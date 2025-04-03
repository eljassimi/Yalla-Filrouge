<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Location;
use App\Models\TransportBooking;
use App\Models\userSelections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Mailer\Transport;
use App\Models\TransportService;

class TransportController extends Controller
{
    public function index(){
        $transports = TransportService::paginate(6);
        return view('transports', compact('transports'));
    }
    public function show($id) {
        $event_id = session('event_id');
        $event = Event::with('location')->findOrFail($event_id);
        $transport = TransportService::where('id', $id)->first();
        return view('transport-details', compact('transport', 'event'));
    }

    public function store(Request $request) {

        $attributes = request()->validate([
            'distance_km'=>'required|numeric',
            'total_price'=>'required|numeric',
            'transport_service_id'=>'required',
            'booking_date'=>'required|date'
        ]);

        $transport_booking = TransportBooking::create($attributes);

        $userId = auth()->id();
        $eventId = session('event_id');

        if (!$eventId) {
            return redirect()->back()->withErrors(['error' => 'No event selected.']);
        }

        $userSelection = userSelections::where('user_id', $userId)
            ->where('event_id', $eventId)
            ->latest()
            ->first();

        if (!$userSelection) {
            return redirect()->back()->withErrors(['error' => 'User selection not found.']);
        }
        $userSelection->update([
            'transport_booking_id' => $transport_booking->id,
        ]);
        return redirect('/transports');
    }

}
