<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            User::factory()->create([
                'name' => 'Walter laura Soto',
                'email' => 'waltels2019@gmail.com',
                'password' => bcrypt('123456789'),
            ]);
    }
}
