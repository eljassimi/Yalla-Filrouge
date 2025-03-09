<?php

namespace Database\Seeders;

use App\Enums\EventType;
use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'name' => 'Morocco vs France',
            'date' => now(),
            'available_spots' => 50000,
            'description' => 'A friendly match between Morocco and France.',
            'event_type' => EventType::MATCH,
            'location_id' => 1,
        ]);
    }
}
