<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccommodationSeeder extends Seeder
{
    public function run()
    {

        $accommodation_1 = DB::table('accommodations')->insertGetId([
            'location_id' => 1,
            'name' => 'Stay Grand Hotel',
            'description' => 'A luxurious hotel with exceptional services and views.',
            'main_image' => 'stay/stay1.png',
            'gallery_images' => json_encode(['stay/stay2.png', 'stay/stay3.png']),
            'available_rooms' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $accommodation_2 = DB::table('accommodations')->insertGetId([
            'location_id' => 1,
            'name' => 'Stay Royal Palace',
            'description' => 'An exclusive royal experience with world-class amenities.',
            'main_image' => 'stay/stay2.png',
            'gallery_images' => json_encode(['stay/stay3.png', 'stay/stay4.png']),
            'available_rooms' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('accommodation_accommodation_type')->insert([
            'accommodation_id' => $accommodation_1,
            'accommodation_type_id' => 1,
            'price_per_night' => 100,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('accommodation_accommodation_type')->insert([
            'accommodation_id' => $accommodation_1,
            'accommodation_type_id' => 2,
            'price_per_night' => 200,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('accommodation_accommodation_type')->insert([
            'accommodation_id' => $accommodation_2,
            'accommodation_type_id' => 1,
            'price_per_night' => 150,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('accommodation_accommodation_type')->insert([
            'accommodation_id' => $accommodation_2,
            'accommodation_type_id' => 2,
            'price_per_night' => 250,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
