<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hero;
use App\Models\Planet;
use App\Models\Power;
use App\Models\System;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hero::insert([
            ['name' => 'Superman', 'planet_id' => 1, 'power_id' => 1, 'age' => 30],
            ['name' => 'Batman', 'planet_id' => 2, 'power_id' => 2, 'age' => 35]]);
    }
}
