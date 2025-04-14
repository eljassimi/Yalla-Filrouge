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

    }
}
