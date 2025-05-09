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
    public function index()
    {
        $matches = Event::with('location')
            ->where('event_type', 'Match')
            ->whereHas('ticketTypes', function ($query) {
                $query->where('seats', '>', 0);
            })->paginate(6);
        return view('matches', compact('matches'));
    }

    public function matchDetails($id){
        $match = Event::with('location')->with('ticketTypes')->find($id);
        $ticket_types = $match->ticketTypes;
        return view('MatchDetails', compact('match', 'ticket_types'));
    }

    public function PurshaseEvent(Request $request){
        $attributes = $request->validate([
            'ticket_type_id' => 'required|exists:ticket_types,id',
            'event_id'=>'required|exists:events,id',
            'ticket_quantity'=>'required|numeric|min:1',
        ]);

        $ticketType = TicketType::find($attributes['ticket_type_id']);

        if($ticketType->seats < $attributes['ticket_quantity']) {
            return back()->with('error', 'Not enough tickets available');
        }

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

        if ($request->form_action == 'create') {
            $location = Location::create($locationData);
            $matchData['location_id'] = $location->id;
            $event = Event::create($matchData);
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

        if ($request->has('ticket_type')) {
            foreach ($request->ticket_type as $index => $typeName) {
                TicketType::create([
                    'name' => $typeName,
                    'price' => $request->price_per_ticket[$index],
                    'seats' => $request->seats[$index],
                    'event_id' => $event->id,
                ]);
            }
        }

        return redirect('/admin/matches');
    }
    public function destroy($id){
        $event = Event::find($id);
        $event->delete();
        return redirect('/admin/matches');
    }
}
