<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\System;
use App\Models\Hero;
use App\Models\Planet;
use App\Models\Power;

class SystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        System::insert([
            ['name' => 'Solar System'],
            ['name' => 'CENNTA']

        ]);
    }
}
