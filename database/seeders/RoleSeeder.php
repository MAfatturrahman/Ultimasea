<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    // Untuk membuat permission di setiap role
    public function run()
    {
        $SuperAdmin = Role::create([
            'name' => 'Super Admin',
            'guard_name' => 'web',
        ]);

        $Petugas = Role::create([
            'name' => 'Petugas',
            'guard_name' => 'web',
        ]);

        $SuperAdmin->givePermissionTo([
            // Permission Petugas
            'view-petugas',
            'create-petugas',
            'edit-petugas',
            'show-petugas',
            'delete-petugas',

            // Permission Makanan
            'view-makanan',
            'create-makanan',
            'edit-makanan',
            'show-makanan',
            'delete-makanan',

            // Permission Minuman
            'view-minuman',
            'create-minuman',
            'edit-minuman',
            'show-minuman',
            'delete-minuman',

            // Permission Fasilitas
            'view-fasilitas',
            'create-fasilitas',
            'edit-fasilitas',
            'show-fasilitas',
            'delete-fasilitas',

            // Permission Peraturan
            'view-peraturan',
            'create-peraturan',
            'edit-peraturan',
            'delete-peraturan',

            // Permission User Management
            'view-userManagement',
            'create-userManagement',
            'edit-userManagement',
            'show-userManagement',
            'delete-userManagement',

            // Permission Role
            'view-role',
            'create-role',
            'edit-role',
            'show-role',
            'delete-role',

            // Permission Audit
            'view-audit',
            'show-audit',
        ]);

        $Petugas->givePermissionTo([
            // Permission Petugas
            'view-petugas',
            'create-petugas',
            'edit-petugas',
            'show-petugas',
            'delete-petugas',

            // Permission Makanan
            'view-makanan',
            'create-makanan',
            'edit-makanan',
            'show-makanan',
            'delete-makanan',

            // Permission Minuman
            'view-minuman',
            'create-minuman',
            'edit-minuman',
            'show-minuman',
            'delete-minuman',

            // Permission Fasilitas
            'view-fasilitas',
            'create-fasilitas',
            'edit-fasilitas',
            'show-fasilitas',
            'delete-fasilitas',

            // Permission Peraturan
            'view-peraturan',
            'create-peraturan',
            'edit-peraturan',
            'delete-peraturan',
        ]);
    }
}