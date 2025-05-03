<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\userSelections;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Payment;

class TicketController extends Controller
{
    public function downloadTicket($paymentId)
    {
        $payment = Payment::findOrFail($paymentId);
        $user = auth()->user();
        $event_id = Userselections::where('user_id', $user->id)->first()->event_id;
        $event = Event::where('id',$event_id)->with('location')->get()->first();
        $event_date = \Carbon\Carbon::parse($event->date)->format('Y-m-d');
        $event_time = \Carbon\Carbon::parse($event->date)->format('h:i A');

        $data = "User: {$user->name} | PaymentID: {$payment}";
        $qrCodeUrl = "https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=" . urlencode($data);
        return view('pdf.ticket',compact('user','event','event_date','event_time','payment','data','qrCodeUrl'));
    }
}
