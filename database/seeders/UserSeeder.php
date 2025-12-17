<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin user
        User::create([
            'name' => 'Admin',
            'email' => 'admin@inventorylite.test',
            'password' => Hash::make('password123'), // password demo
            'role' => 'admin',
        ]);

        // Staff user
        User::create([
            'name' => 'Staff',
            'email' => 'staff@inventorylite.test',
            'password' => Hash::make('password123'), // password demo
            'role' => 'staff',
        ]);
    }
}
