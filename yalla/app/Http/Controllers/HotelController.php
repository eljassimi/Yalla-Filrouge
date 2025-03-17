<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
     public function index(){
         $hotels = Hotel::with('location','room')->get();
         return view('hotels', compact('hotels'));
     }
}
