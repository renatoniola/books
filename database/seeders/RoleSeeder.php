<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::truncate();

        $admin = Role::create([
            'role' => 'admin',
        ]);

        $admin = Role::create([
            'role' => 'guest',
        ]);

    }
}
