<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class RegisterController extends Controller
{
    public function getCities()
    {
        $path = storage_path('app/moroccan_cities.csv');
        $cities = [];

        if (($handle = fopen($path, 'r')) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
                $cities[] = $data[0];
            }
            fclose($handle);
        }
        return $cities;
    }

    public function index(){
        $cities = $this->getCities();
        return view('register', compact('cities'));
    }

    public function register(Request $request){
       $attributes =  $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'current_city'=>'required'
        ]);
       $user = User::create($attributes);
       Auth::login($user);
       return redirect('/login');
    }

}
