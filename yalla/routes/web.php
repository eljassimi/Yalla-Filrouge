<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;



Route::view('/login','login');
Route::post('/login',[LoginController::class,'login']);
Route::get('/register', [RegisterController::class, 'index']);
Route::view('/privacy', 'privacy');

Route::middleware(AuthMiddleware::class)->group(function () {
Route::get('/', function () {return view('home');});
});

Route::post('/register', [RegisterController::class, 'register']);
Route::get('/logout', [SessionController::class, 'destroy']);

