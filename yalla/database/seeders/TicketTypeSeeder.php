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
        ]);

        TicketType::create([
            'name' => 'South Stand',
            'price' => 100,
        ]);

        TicketType::create([
            'name' => 'Family Stand',
            'price' => 200,
        ]);

        TicketType::create([
            'name' => 'COLIN BELL STAND',
            'price' => 300,
        ]);
    }
}
