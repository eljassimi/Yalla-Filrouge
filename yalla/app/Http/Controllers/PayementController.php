<?php

namespace App\Http\Controllers;

use App\Models\userSelections;
use Illuminate\Http\Request;

class PayementController extends Controller
{
    public function index(){
        $user_selections = userSelections::where('user_id', auth()->id())->get();
        dd($user_selections);
    }
}
