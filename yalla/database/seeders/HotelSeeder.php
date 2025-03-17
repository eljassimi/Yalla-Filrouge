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
            DB::table('room_types')->insert([
                'type' => $type,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $hotel_1 = DB::table('hotels')->insertGetId([
            'location_id' => 1,
            'name' => 'Stay Grand Hotel',
            'description' => 'A luxurious hotel with exceptional services and views.',
            'main_image' => 'stay/stay1.png',
            'gallery_images' => json_encode(['stay/stay2.png', 'stay/stay3.png']),
            'rooms' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $hotel_2 = DB::table('hotels')->insertGetId([
            'location_id' => 1,
            'name' => 'Stay Royal Palace',
            'description' => 'An exclusive royal experience with world-class amenities.',
            'main_image' => 'stay/stay2.png',
            'gallery_images' => json_encode(['stay/stay3.png', 'stay/stay4.png']),
            'rooms' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('rooms')->insert([
            'hotel_id' => $hotel_1,
            'room_type_id' => 1,
            'price_per_night' => 100,
            'number_of_rooms' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('rooms')->insert([
            'hotel_id' => $hotel_1,
            'room_type_id' => 2,
            'price_per_night' => 200,
            'number_of_rooms' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('rooms')->insert([
            'hotel_id' => $hotel_2,
            'room_type_id' => 1,
            'price_per_night' => 150,
            'number_of_rooms' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('rooms')->insert([
            'hotel_id' => $hotel_2,
            'room_type_id' => 2,
            'price_per_night' => 250,
            'number_of_rooms' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
