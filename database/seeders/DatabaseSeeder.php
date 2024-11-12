<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
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

        User::factory()->create([
            'id' => 1,
            'name' => 'zura',
            'email' => 'zura@example.com',
            'password' => bcrypt('123.321A'), //bcrypt for encrypt pass in DB
            'email_verified_at' => time()
        ]);
        User::factory()->create([
            'id' => 2,
            'name' => 'John Smith',
            'email' => 'john@example.com',
            'password' => bcrypt('123.321A'),
            'email_verified_at' => time()
        ]);

        User::factory()->create([
            'id' => 3,
            'name' => 'Aziz',
            'email' => 'Abdulaziz.ab888@gmail.com',
            'password' => bcrypt('123.321A'), 
            'email_verified_at' => time()
        ]);



        Project::factory()
            ->count(30)
            ->hasTasks(30)
            ->create();
    }
}
