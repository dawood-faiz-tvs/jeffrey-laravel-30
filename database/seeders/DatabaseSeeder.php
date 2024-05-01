<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'first_name' => 'Dawood',
            'last_name' => 'Faiz',
            'email' => 'test@example.com',
        ]);

        $this->call(JobSeeder::class);
        $this->call(TagSeeder::class);
    }
}
