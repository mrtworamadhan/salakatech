<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; // Panggil model User
use Illuminate\Support\Facades\Hash; // Panggil Hash

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Buat user admin/testing yang datanya kita tahu
        User::create([
            'name' => 'Test User',
            'email' => 'test@salakatech.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'), // passwordnya adalah 'password'
        ]);

        // 2. Buat beberapa user dummy lainnya menggunakan factory
        User::factory()->count(10)->create();
    }
}