<?php

namespace Database\Seeders;

use App\Models\TransportService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TransportService::create([
            'name' => 'CTM',
            'description' => 'CTM est une societé de transport national et internationale',
            'logo'=>'assets/Tansport/ctm.png',
            'price_per_km' => 10,
            'available_seats' => 50,
        ]);
    }
}
