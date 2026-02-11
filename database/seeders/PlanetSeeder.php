<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Planet;
use App\Models\Hero;
use App\Models\Power;
use App\Models\System;
class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Planet::insert([
            ['name' => 'Earth', 'population' => 800, 'system_id' => 1],
            ['name' => 'Mars', 'population' => 1, 'system_id' => 2],
            ['name' => 'Venus', 'population' => 1, 'system_id' => 1]

        ]);
    }
}
