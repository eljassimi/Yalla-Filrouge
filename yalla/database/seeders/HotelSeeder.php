<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelSeeder extends Seeder
{
    public function run()
    {
        $types = ['Standard', 'Royal', 'Deluxe', 'Suite'];

        foreach ($types as $type) {
            DB::table('room_types')->insertOrIgnore([
                'type' => $type,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $hotels = [
            ['location_id' => 1, 'name' => 'Stay Grand Hotel', 'image' => 'stay/stay1.png'],
            ['location_id' => 1, 'name' => 'Stay Royal Palace', 'image' => 'stay/stay2.png'],
            ['location_id' => 2, 'name' => 'Ocean View Retreat', 'image' => 'stay/stay1.png'],
            ['location_id' => 2, 'name' => 'Seaside Resort', 'image' => 'stay/stay1.png'],
            ['location_id' => 3, 'name' => 'Mountain Escape', 'image' => 'stay/stay1.png'],
            ['location_id' => 3, 'name' => 'Alpine Lodge', 'image' => 'stay/stay1.png'],
            ['location_id' => 2, 'name' => 'Urban Chic Hotel', 'image' => 'stay/stay1.png'],
            ['location_id' => 2, 'name' => 'Metropolitan Suites', 'image' => 'stay/stay1.png'],
        ];

        $amenitiesList = [
            ['WiFi', 'Smart TV', 'Gym', 'Swimming Pool', 'Full Kitchen'],
            ['WiFi', 'Gym', 'Spa', 'Rooftop Bar'],
            ['WiFi', 'Sea View', 'Private Beach', 'Infinity Pool'],
            ['WiFi', 'Mountain View', 'Fireplace', 'Hiking Trails'],
        ];

        foreach ($hotels as $index => $hotel) {
            $hotel_id = DB::table('hotels')->insertGetId([
                'location_id' => $hotel['location_id'],
                'name' => $hotel['name'],
                'description' => 'A luxury hotel offering the best experience.',
                'main_image' => $hotel['image'],
                'gallery_images' => json_encode([$hotel['image'], str_replace('1', '2', $hotel['image'])]),
                'amenities' => json_encode($amenitiesList[$index % count($amenitiesList)]),
                'rooms' => rand(5, 15),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            for ($i = 1; $i <= 2; $i++) {
                DB::table('rooms')->insert([
                    'hotel_id' => $hotel_id,
                    'room_type_id' => $i,
                    'price_per_night' => rand(100, 300),
                    'number_of_rooms' => rand(3, 7),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
