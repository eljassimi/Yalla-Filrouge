<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\TicketType;
use App\Models\userSelections;
use Illuminate\Http\Request;

class PayementController extends Controller
{
    public function index() {

        $user_selections = userSelections::where('user_id', auth()->id())->get();
        $ticket_price = TicketType::where('id', $user_selections[0]->ticket_type_id)->first()->price * $user_selections[0]->ticket_quantity;

        $checkin_date = \Carbon\Carbon::parse($user_selections[0]->check_in_date);
        $checkout_date = \Carbon\Carbon::parse($user_selections[0]->check_out_date);
        $days_stay = $checkin_date->diffInDays($checkout_date);

        $hotel_price = $user_selections[0]->room_price * $days_stay;
        $total_price = $ticket_price + $hotel_price + $user_selections[0]->transport_price;
        $event = Event::where('id', $user_selections[0]->event_id)->first();
        $quantity =$user_selections[0]->ticket_quantity;
        $transport_price = $user_selections[0]->transport_price;


        return view('checkout',compact('event','quantity','transport_price','total_price','hotel_price','days_stay','ticket_price'));
    }

}
