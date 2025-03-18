<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\room;
use Illuminate\Http\Request;

class HotelController extends Controller
{
     public function index(){
         $hotels = Hotel::with('location','room')->paginate(6);
         return view('hotels', compact('hotels'));
     }
     public function hotelDetails($id){
         $hotel = Hotel::with('location')->findOrFail($id);
         $rooms = Room::where('hotel_id', $id)->with('roomType')->get();
         $hotel->gallery_images = json_decode($hotel->gallery_images, true);
         $amenities = json_decode($hotel->amenities);
         return view('bookingDetails', compact('hotel','rooms','amenities'));
     }

     public function booking(Request $request){

     }
}
