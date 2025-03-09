<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
});


Route::get('/register', [RegisterController::class, 'index']);

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/', function () {
    return view('home');
});

Route::post('/register', [RegisterController::class, 'register']);
