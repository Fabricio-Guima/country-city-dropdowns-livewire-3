<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountryCitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // País 1: United States
        $usa = Country::firstOrCreate(['name' => 'United States']);

        City::firstOrCreate(['name' => 'New York', 'country_id' => $usa->id]);
        City::firstOrCreate(['name' => 'Washington', 'country_id' => $usa->id]);

        // País 2: United Kingdom
        $uk = Country::firstOrCreate(['name' => 'United Kingdom']);

        City::firstOrCreate(['name' => 'London', 'country_id' => $uk->id]);
        City::firstOrCreate(['name' => 'Manchester', 'country_id' => $uk->id]);
    }
}
