<?php

namespace Database\Seeders;

use App\Models\TicketType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TicketType::create([
            'name' => 'East Stand',
            'price' => 100,
            'event_id'=>1
        ]);

        TicketType::create([
            'name' => 'South Stand',
            'price' => 100,
            'event_id'=>1
        ]);

        TicketType::create([
            'name' => 'Family Stand',
            'price' => 200,
            'event_id'=>1
        ]);

        TicketType::create([
            'name' => 'COLIN BELL STAND',
            'price' => 300,
            'event_id'=>1
        ]);
    }
}
