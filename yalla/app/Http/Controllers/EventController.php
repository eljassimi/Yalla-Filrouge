<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $matches = Event::with('location')->where("event_type", "=", "Match")->paginate(6);
        return view('tickets', compact('matches'));
    }
}
