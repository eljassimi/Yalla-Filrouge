<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Hotel;
use App\Models\TransportService;
use App\Models\User;
use App\Models\userSelections;
use Illuminate\Http\Request;
use Symfony\Component\Mailer\Transport;

class AdminController extends Controller
{
    public function dashboard(){
         $usersCount = User::count();
         $hotelsCount = Hotel::count();
         $transportsCount = TransportService::count();
         $Matches = Event::all();

        $confirmedPayments = UserSelections::with(['user', 'ticketType'])
            ->where('confirmed', 1)
            ->get()
            ->map(function ($selection) {
                $roomPrice = $selection->room_price ?? 0;
                $transportPrice = $selection->transport_price ?? 0;
                $ticketPrice = ($selection->ticketType->price ?? 0) * ($selection->ticket_quantity ?? 0);

                $totalAmount = $roomPrice + $transportPrice + $ticketPrice;

                return [
                    'name' => $selection->user->name ?? 'Unknown',
                    'amount' => $totalAmount,
                ];
            });
        $paymentsArray = $confirmedPayments->toArray();

         return view('admin.Dashboard', compact('usersCount', 'Matches', 'hotelsCount', 'transportsCount','paymentsArray'));
    }

    public function matches(){
        $Matches = Event::with('Location')->paginate(6);
        return view('admin.Matches', compact('Matches'));
    }

    public function hotels(){
        $hotels = Hotel::with('Location')->paginate(6);
        return view('admin.hotels', compact('hotels'));
    }

    public function transports(){
        $transports = TransportService::paginate(6);
        return view('admin.transports', compact('transports'));
    }

    public function users(){
        $users = User::paginate(6);
        return view('admin.users', compact('users'));
    }

    public function activeUser($id){
        $user = User::find($id);
        $user->suspend = false;
        $user->save();
        return redirect()->back();
    }
    public function suspendUser($id){
        $user = User::find($id);
        $user->suspend = true;
        $user->save();
        return redirect()->back();
    }
}
