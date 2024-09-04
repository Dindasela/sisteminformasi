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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'phone' => '081234567890',
            'address' => 'Jl. Test No. 1',
            'nik' => '1234567890123456',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            'swafoto' => 'swafoto.jpg',
            'ktp' => 'ktp.jpg',
            'is_active' => 1,
            'role' => 'admin',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'user@gmail.com',
            'username' => 'user',
            'phone' => '081234567890',
            'address' => 'Jl. Test No. 1',
            'nik' => '1234567890123451',
            'password' => password_hash('user', PASSWORD_DEFAULT),
            'swafoto' => 'swafoto.jpg',
            'ktp' => 'ktp.jpg',
            'is_active' => 1,
            'role' => 'user',
        ]);
    }
}
