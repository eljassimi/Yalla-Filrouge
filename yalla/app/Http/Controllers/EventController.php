<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\TicketType;
use App\Models\userSelections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function PurshaseEvent(Request $request){
        $attributes = $request->validate([
            'ticket_type_id' => 'required|exists:ticket_types,id',
            'event_id'=>'required|exists:events,id',
            'ticket_quantity'=>'required|numeric|min:1',
        ]);

        $attributes['user_id'] = Auth::id();
        userSelections::create($attributes);

        session(['event_id' => $attributes['event_id']]);
        return redirect('/hotels');
    }
}
