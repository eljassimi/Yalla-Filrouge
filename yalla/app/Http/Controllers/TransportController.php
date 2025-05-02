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
        $transports = TransportService::where('available_seats','>',0)->paginate(6);
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
            'transport_price' => $attributes['total_price'],
            'transport_booking_id' => $transport_booking->id,
        ]);
        session(['skip_transport' => false]);
        return redirect('/checkout');
    }

    public function skipTransport(){
        session(['skip_transport' => true]);
        return redirect('/transports');
    }

    public function handleTransport(Request $request) {
        $isUpdate = $request->has('id') && $request->id != '';

        $rules = [
            'name' => 'required',
            'description' => 'required',
            'price_per_km' => 'required|numeric',
            'available_seats' => 'required|numeric',
        ];
        if (!$isUpdate) {
            $rules['logo'] = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        } else {
            $rules['logo'] = 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        }
        $attributes = $request->validate($rules);

        if ($request->hasFile('logo')) {
            $originalName = $request->file('logo')->getClientOriginalName();
            $request->file('logo')->storeAs('Transport', $originalName, 'public');
            $attributes['logo'] = "assets/Transport/".$originalName;
        }
        if ($isUpdate) {
            $transport = TransportService::findOrFail($request->id);
            if (!$request->hasFile('logo')) {
                unset($attributes['logo']);
            }
            $transport->update($attributes);
        } else {
            $attributes['logo'] =
            TransportService::create($attributes);
        }
        return redirect('/transports');
    }
    public function destroy($id){
        $transport = TransportService::findOrFail($id);
        $transport->delete();
        return redirect('/transports');
    }


}
