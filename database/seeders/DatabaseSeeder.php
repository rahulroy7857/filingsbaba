<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Role::factory()->create([
            'id' => 2,
            'name' => 'Admin'
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@filingsbaba.com',
            'password' => bcrypt('password'), // password
            'role_id' => 2, // Assuming role_id 2 is for 'admin'
        ]);
    }
}
