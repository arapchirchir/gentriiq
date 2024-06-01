<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'admin',
            'user',
        ];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'info@gentriiqsafaris.co.ke',
            'password' => bcrypt('Gentriiq@2024'),
        ]);

        $admin->assignRole('admin');
    }
}
