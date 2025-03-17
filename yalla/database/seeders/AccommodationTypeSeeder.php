<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccommodationTypeSeeder extends Seeder
{
    public function run()
    {
        $types = ['Standard', 'Royal', 'Deluxe', 'Suite'];

        foreach ($types as $type) {
            DB::table('accommodation_types')->insert([
                'type' => $type,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
