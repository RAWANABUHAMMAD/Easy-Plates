<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Rawan',
            'email' => 'rawan@easyplates.com',
            'password' => Hash::make('password123'),
            'phone' => '0788888888',
            'address' => 'Aqaba',
            'role' => 'admin',
        ]);
    }
}
