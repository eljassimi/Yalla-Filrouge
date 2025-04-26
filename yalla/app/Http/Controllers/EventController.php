<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Location;
use App\Models\TicketType;
use App\Models\userSelections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index(){
        $matches = Event::with('location')->where("event_type", "=", "Match")->paginate(6);
        return view('matches', compact('matches'));
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

    public function handleMatchForm(Request $request)
    {
        $locationData = $request->validate([
            'city' => 'required',
            'address' => 'required',
            'coordinates' => 'required'
        ]);

        $matchData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'team_1_name' => 'required',
            'team_2_name' => 'required',
            'flag_team_1' => 'required',
            'flag_team_2' => 'required',
            'date' => 'required',
            'available_spots' => 'required',
        ]);

        $matchData['event_type'] = 'Match';

        if($request->form_action == 'create') {
            $location = Location::create($locationData);
            $matchData['location_id'] = $location->id;
            Event::create($matchData);
        } else {
            $event = Event::findOrFail($request->match_id);
            if ($event->location_id) {
                $location = Location::findOrFail($event->location_id);
                $location->update($locationData);
            } else {
                $location = Location::create($locationData);
                $matchData['location_id'] = $location->id;
            }
            $event->update($matchData);
        }
        return redirect('/admin/matches');
    }

    public function destroy($id){
        $event = Event::find($id);
        $event->delete();
        return redirect('/matches');
    }
}
