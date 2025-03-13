<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\TicketType;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $matches = Event::with('location')->where("event_type", "=", "Match")->paginate(6);
        return view('tickets', compact('matches'));
    }

    public function matchDetails($id){
        $match = Event::with('location')->find($id);
        $ticket_types = TicketType::whereNotIn('name', ['Normal', 'VIP'])->get();
        return view('MatchDetails', compact('match', 'ticket_types'));
    }
}
