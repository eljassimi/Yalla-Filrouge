<?php

namespace App\Http\Controllers;

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

        return view('checkout');

        dd($total_price);
    }

}
