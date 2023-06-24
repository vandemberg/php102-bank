<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::all()->each->delete();

        User::factory()->create([
            'name' => 'Vandemberg Lima',
            'email' => 'vandemberg.silva.lima@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
