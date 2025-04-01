<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    public function run()
    {
        Location::create([
            'city' => 'Safi',
            'address' => '123 Main Street',
            'coordinates' => '{"latitude":"32.2833322","longitude":"-9.2333324"}'
        ]);

        Location::create([
            'city' => 'Casablanca',
            'address' => '456 Ocean Avenue',
            'coordinates' => '33.5731° N, 7.5898° W'
        ]);

        Location::create([
            'city' => 'Rabat',
            'address' => '789 Central Park',
            'coordinates' => '34.0209° N, 6.8416° W'
        ]);
    }
}
