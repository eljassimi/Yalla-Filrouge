<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }


    public function register(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'latitude' => 'nullable',
            'longitude' => 'nullable',
            'city' => 'nullable',
            'address' => 'nullable',
        ]);

        $location = null;
        if ($attributes['latitude'] && $attributes['longitude']) {
            $location = Location::create([
                'coordinates' => json_encode([
                    'latitude' => $attributes['latitude'],
                    'longitude' => $attributes['longitude'],
                ]),
                'city' => $attributes['city'] ?? 'Unknown',
                'address' => $attributes['address'] ?? 'Unknown',
            ]);
        }

        $user = User::create([
            'name' => $attributes['name'],
            'email' => $attributes['email'],
            'password' => bcrypt($attributes['password']),
            'location_id' => $location ? $location->id : null,
        ]);

        Auth::login($user);
        return redirect('/login');
    }



}
