<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin CleanWheels',
            'email' => 'admin@cleanwheels.com',
            'password' => bcrypt('password'), // In real app, use env or prompt
            'is_admin' => true, // Assuming I add this column or just use email check
        ]);
    }
}
