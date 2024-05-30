<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'email' => 'dawood.faiz.tvs@gmail.com',
            'password' => Hash::make(123456789),
        ]);

        $this->call(JobSeeder::class);
        $this->call(TagSeeder::class);
    }
}
