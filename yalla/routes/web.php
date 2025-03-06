<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/home', function () {
    return view('welcome');
});