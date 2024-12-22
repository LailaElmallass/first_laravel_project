<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {     
        \App\Models\User::factory(10)->create();
        // Check if the email already exists
        $existingUser = User::where('email', 'test@example.com')->first();

        // Only create the user if they don't already exist
        if (!$existingUser) {
            User::factory()->create([
                'name' => 'Test user',
                'email' => 'test@example.com',
            ]);
        }
    }
}
