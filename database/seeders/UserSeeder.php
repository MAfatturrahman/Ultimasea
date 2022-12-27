<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    // Untuk membuat akun 
    public function run()
    {
        User::create([
            'name' => 'Fatur',
            'email' => 'fatur@gmail.com',
            'password' => bcrypt('123456789'),
        ])->assignRole('Super Admin');
    }
}