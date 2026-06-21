<?php

namespace Database\Seeders;

use App\Models\Paralelo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParaleloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Paralelo::create(['nombre' => 'A']);
        Paralelo::create(['nombre' => 'B']);
        Paralelo::create(['nombre' => 'C']);
    }
}
