<?php

namespace Database\Seeders;

use App\Models\TransportService;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            LocationSeeder::class,
            HotelSeeder::class,
            EventSeeder::class,
            TicketTypeSeeder::class,
            TransportSeeder::class
        ]);
    }
}
