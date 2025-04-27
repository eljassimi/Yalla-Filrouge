<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Hotel;
use App\Models\Location;
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

    public function destroy($id){
        $hotel = Hotel::findOrfail($id);
        $hotel->delete();
        return redirect('/hotels');
    }

    public function store(Request $request)
    {
        $locationData = $request->validate([
            'city' => 'required',
            'address' => 'required',
            'coordinates' => 'required'
        ]);

        $location = Location::create($locationData);

        $hotelData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gallery_images' => 'required|array',
            'gallery_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'amenities' => 'nullable|array',
            'rooms' => 'required|integer|min:1',
        ]);

        if ($request->hasFile('main_image')) {
            $originalName = $request->file('main_image')->getClientOriginalName();
            $mainImagePath = $request->file('main_image')->storeAs('stay', $originalName, 'public');
            $hotelData['main_image'] = $mainImagePath;
        }

        if ($request->hasFile('gallery_images')) {
            $galleryPaths = [];
            foreach ($request->file('gallery_images') as $image) {
                $originalName = $image->getClientOriginalName();
                $galleryPaths[] = $image->storeAs('stay', $originalName, 'public');
            }
            $hotelData['gallery_images'] = json_encode($galleryPaths);
        }

        if ($request->filled('amenities')) {
            $hotelData['amenities'] = json_encode($request->amenities);
        } else {
            $hotelData['amenities'] = null;
        }

        $hotelData['location_id'] = $location->id;
        $hotel = Hotel::create($hotelData);

        $roomData = $request->validate([
            'room_type_id' => 'required|array',
            'room_type_id.*' => 'required|exists:room_types,id',
            'price_per_night' => 'required|array',
            'price_per_night.*' => 'required|numeric|min:0',
            'number_of_rooms' => 'required|array',
            'number_of_rooms.*' => 'required|integer|min:1',
        ]);

        foreach ($request->room_type_id as $index => $typeId) {
            Room::create([
                'hotel_id' => $hotel->id,
                'room_type_id' => $typeId,
                'price_per_night' => $request->price_per_night[$index],
                'number_of_rooms' => $request->number_of_rooms[$index],
            ]);
        }

        return redirect('/admin/hotels');
    }
    public function update(Request $request, $id)
    {
        $hotel = Hotel::findOrFail($id);

        $hotel->location->update([
            'city' => $request->city,
            'address' => $request->address,
            'coordinates' => $request->coordinates
        ]);

        $hotel->name = $request->name;
        $hotel->description = $request->description;
        $hotel->rooms = $request->rooms;
        $hotel->amenities = $request->filled('amenities') ? json_encode($request->amenities) : null;

        if ($request->hasFile('main_image')) {
            $hotel->main_image = $request->file('main_image')->store('hotels', 'public');
        }

        if ($request->hasFile('gallery_images')) {
            $galleryPaths = [];
            foreach ($request->file('gallery_images') as $image) {
                $galleryPaths[] = $image->store('hotels/gallery', 'public');
            }
            $hotel->gallery_images = json_encode($galleryPaths);
        }

        $hotel->save();

        Room::where('hotel_id', $hotel->id)->delete();

        for ($i = 0; $i < count($request->room_type_id); $i++) {
            Room::create([
                'hotel_id' => $hotel->id,
                'room_type_id' => $request->room_type_id[$i],
                'price_per_night' => $request->price_per_night[$i],
                'number_of_rooms' => $request->number_of_rooms[$i],
            ]);
        }

        return redirect('/hotels');
    }

    public function showEditForm($id){
        $hotel = Hotel::with('location')->with('room')->with('roomTypes')->findOrFail($id);
        return view('admin.editHotelForm', compact('hotel'));
     }
}
