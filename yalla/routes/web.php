<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PayementController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TransportController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;



Route::view('/login','login');
Route::post('/login',[LoginController::class,'login']);
Route::get('/register', [RegisterController::class, 'index']);
Route::view('/privacy', 'privacy');
Route::get('/', function () {return view('home');});

Route::middleware(AuthMiddleware::class)->group(function () {

});

Route::post('/register', [RegisterController::class, 'register']);
Route::get('/logout', [SessionController::class, 'destroy']);

Route::get("/matches",[EventController::class,"index"]);
Route::get('/ticket/{id}',[EventController::class,'matchDetails']);
Route::post('/ticketpurshase',[EventController::class,'PurshaseEvent']);

Route::get('/hotels',[HotelController::class,'index']);
Route::get('/hotel-details/{id}',[HotelController::class,'hotelDetails']);
Route::post('/bookingHotel',[HotelController::class,'booking']);
Route::get('/skip-hotel',[HotelController::class,'skipHotel']);

Route::get('/transports',[TransportController::class,'index']);
Route::get('/transport-details/{id}',[TransportController::class,'show']);
Route::post('/book-transport',[TransportController::class,'store']);
Route::get('/skip-transport',[TransportController::class,'skipTransport']);

Route::get('checkout',[PayementController::class,'index']);
Route::post('/payment', [PayementController::class, 'checkout']);

Route::view("/success","payment.success");


