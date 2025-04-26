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
            'name' => 'Morocco vs Brazil',
            'team_1_name' => 'Morocco',
            'team_2_name' => 'Brazil',
            'date' => '2025-03-13 11:02:11',
            'available_spots' => 50000,
            'description' => 'A Group match between Morocco and Brazil.',
            'event_type' => EventType::MATCH,
            'location_id' => 1,
            'flag_team_1' => 'assets\flags\morocco.png',
            'flag_team_2' => 'assets\flags\brazil.png'
        ]);
    }
}
