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
            'price' => 100,
        ]);
    }
}
