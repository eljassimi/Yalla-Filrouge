<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Mailer\Transport;
use App\Models\TransportService;

class TransportController extends Controller
{
    public function index(){
        $transports = TransportService::all();
        return view('transports', compact('transports'));
    }
}
