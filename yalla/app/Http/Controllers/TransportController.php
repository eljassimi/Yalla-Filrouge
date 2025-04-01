<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Mailer\Transport;
use App\Models\TransportService;

class TransportController extends Controller
{
    public function index(){
        $transports = TransportService::all();
        return view('transports', compact('transports'));
    }
    public function show($id){
        $transport = TransportService::where('id', $id)->first();
        return view('transport-details', compact('transport'));
    }
}
