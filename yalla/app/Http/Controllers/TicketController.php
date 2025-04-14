<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Payment;
use App\Models\userSelections;
class TicketController extends Controller
{
    public function downloadTicket($paymentId)
    {
        $payment = Payment::findOrFail($paymentId);
        $userSelection = userSelections::where('user_id', auth()->id())->first();

        $qrCode = base64_encode(QrCode::format('png')->size(200)->generate("UserID: " . auth()->id() . ", SelectionID: " . $userSelection->id));

        $pdf = PDF::loadView('pdf.ticket', [
            'payment' => $payment,
            'user' => auth()->user(),
            'userSelection' => $userSelection,
            'qrCode' => $qrCode
        ]);

        return $pdf->download('Your_Ticket.pdf');
    }
}
