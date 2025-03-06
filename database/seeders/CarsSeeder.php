<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsSeeder extends Seeder
{
    public function run()
    {
        DB::table('cars')->insert([
            [
                'make' => 'Nissan',
                'model' => 'Navara',
                'year' => 2024,
                'miles' => 3000,
            ],
            [
                'make' => 'Honda',
                'model' => 'Civic',
                'year' => 2024,
                'miles' => 3000,
            ],
            [
                'make' => 'Ferrari',
                'model' => 'F8',
                'year' => 2024,
                'miles' => 3000,
            ],
            [
                'make' => 'Toyota',
                'model' => 'mk4',
                'year' => 2004,
                'miles' => 25000,
            ],
            [
                'make' => 'Ford',
                'model' => 'Mustang',
                'year' => 2020,
                'miles' => 5000,
            ],
            [
                'make' => 'Dodge',
                'model' => 'Hellcat',
                'year' => 2025,
                'miles' => 15000,
            ],
        ]);
    }
}
