<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;



Route::view('/login','login');
Route::post('/login',[LoginController::class,'login']);
Route::get('/register', [RegisterController::class, 'index']);
Route::view('/privacy', 'privacy');

Route::get('/', function () {
    return view('home');
});

Route::post('/register', [RegisterController::class, 'register']);

