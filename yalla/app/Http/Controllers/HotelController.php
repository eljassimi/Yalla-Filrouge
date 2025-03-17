<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
     public function index(){
         $hotels = Hotel::with('location','room')->paginate(6);
         return view('hotels', compact('hotels'));
     }
     public function bookingDetails($id){
         $hotel = Hotel::with('location','room')->find($id);
         $hotel->gallery_images = json_decode($hotel->gallery_images, true);
         return view('bookingDetails', compact('hotel'));
     }
}
