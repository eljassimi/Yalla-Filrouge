<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\TicketType;
use App\Models\userSelections;
use Illuminate\Http\Request;
use Stripe\Checkout\Session as StripeSession;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use Stripe\Exception\ApiErrorException;

class PayementController extends Controller
{
    public function index()
    {
        $user_selections = userSelections::where('user_id', auth()->id())->get();
        $ticket_price = TicketType::where('id', $user_selections[0]->ticket_type_id)->first()->price * $user_selections[0]->ticket_quantity;

        $checkin_date = \Carbon\Carbon::parse($user_selections[0]->check_in_date);
        $checkout_date = \Carbon\Carbon::parse($user_selections[0]->check_out_date);
        $days_stay = $checkin_date->diffInDays($checkout_date);

        $hotel_price = $user_selections[0]->room_price * $days_stay;
        $total_price = $ticket_price + $hotel_price + $user_selections[0]->transport_price;
        $event = Event::where('id', $user_selections[0]->event_id)->first();
        $quantity = $user_selections[0]->ticket_quantity;
        $transport_price = $user_selections[0]->transport_price;

        return view('checkout', compact('event', 'quantity', 'transport_price', 'total_price', 'hotel_price', 'days_stay', 'ticket_price'));
    }

    public function checkout(Request $request)
    {
        $request->validate([
            "total_price" => "required|numeric",
        ]);
        Stripe::setApiKey(config('services.stripe.secret'));
        $unitAmount = intval($request->total_price * 100);

        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'mad',
                    'product_data' => [
                        'name' => 'Hotel Booking',
                    ],
                    'unit_amount' => $unitAmount,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => url('/success'),
            'cancel_url' => url('/cancel'),
        ]);

        return redirect($session->url);
    }
}
