<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    // Untuk memanggil dan menjalankanseeder yang lain
    public function run()
    {
        $this->call([
                FasilitasSeeder::class,
                MakananSeeder::class,
                MinumanSeeder::class,
                PeraturanSeeder::class,
                PermissionTableSeeder::class,
                RoleSeeder::class,
                UserSeeder::class,
        ]);
    }
}