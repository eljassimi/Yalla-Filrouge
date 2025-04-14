<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Payment;

class TicketController extends Controller
{
    public function downloadTicket($paymentId)
    {
        $payment = Payment::findOrFail($paymentId);
        $user = auth()->user();
        $data = "User: {$user->name} | PaymentID: {$payment->id}";
        $qrCodeUrl = "https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=" . urlencode($data);
        return view('pdf.ticket',compact('user','payment','data','qrCodeUrl'));
    }
}
