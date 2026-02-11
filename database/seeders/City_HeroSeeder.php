<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class  City_HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('city_hero')->insert([
            ['city_id' => 1, 'hero_id' => 1, 'active' => true],
            ['city_id' => 2, 'hero_id' => 2, 'active' => true],
            ['city_id' => 3, 'hero_id' => 1, 'active' => false]
        ]);
    }
}
