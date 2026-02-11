<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Power;
use App\Models\Hero;
use App\Models\Planet;
use App\Models\System;
class PowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Power::insert([
            ['name' => 'Super Strength', 'description' => 'Ability to lift and move heavy objects with ease.'],
            ['name' => 'Flight', 'description' => 'Ability to fly through the air without any physical support.'],
            ['name' => 'X-Ray Vision', 'description' => 'Ability to see through solid objects.']
        ]);
    }
}
