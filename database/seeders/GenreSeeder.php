<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::truncate();

        $admin = Genre::create([
            'role' => 'Fantasy',
        ]);

        $admin = Genre::create([
            'role' => 'Fiction',
        ]);

        $admin = Genre::create([
            'role' => 'Historical Fiction',
        ]);
    }
}
