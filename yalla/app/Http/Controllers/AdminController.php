<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Hotel;
use App\Models\TransportService;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\Mailer\Transport;

class AdminController extends Controller
{
    public function dashboard(){
         $usersCount = User::count();
         $hotelsCount = Hotel::count();
         $transportsCount = TransportService::count();
         $Matches = Event::all();
         return view('admin.Dashboard', compact('usersCount', 'Matches', 'hotelsCount', 'transportsCount',));
    }
}
