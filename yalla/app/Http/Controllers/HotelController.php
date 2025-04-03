<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Hotel;
use App\Models\room;
use App\Models\userSelections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HotelController extends Controller
{
    public function index()
    {
        $eventId = session('event_id');
        $event = Event::with('location')->find($eventId);
        $eventCity = $event->location->city;
        $hotels = Hotel::with('location', 'room')
            ->whereHas('location', function ($query) use ($eventCity) {
                $query->where('city', $eventCity);
            })->paginate(6);
        return view('hotels', compact('hotels'));
    }
     public function hotelDetails($id){
         $hotel = Hotel::with('location')->findOrFail($id);
         $rooms = Room::where('hotel_id', $id)->with('roomType')->get();
         $hotel->gallery_images = json_decode($hotel->gallery_images, true);
         $amenities = json_decode($hotel->amenities);
         return view('bookingDetails', compact('hotel','rooms','amenities'));
     }

    public function booking(Request $request)
    {
        $request->validate([
            'room_price' => 'required|numeric',
            'hotel_id' => 'required|exists:hotels,id',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
        ]);

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
            'hotel_id' => $request->hotel_id,
            'room_price'=>$request->room_price,
            'check_in_date' => $request->check_in,
            'check_out_date' => $request->check_out,
        ]);
        session(['hotel_skipped' => false]);
        return redirect('/transports');
    }

    public function skipHotel(){
        session(['hotel_skipped' => true]);
        return redirect('/transports');
    }

}
