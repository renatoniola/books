<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@books.com',
            'password' => bcrypt('password'),
            'role_id' => 1
        ]);

        $normy = User::create([
            'name' => 'normy',
            'email' => 'normy@books.com',
            'password' => bcrypt('password'),
            'role_id' => 2
        ]);

    }
}
