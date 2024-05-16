<?php

namespace Database\Seeders;

use App\Models\BookStatus;
use Illuminate\Database\Seeder;

class BookStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BookStatus::truncate();

        BookStatus::create([
            'status' => 'to read',
        ]);

        BookStatus::create([
            'status' => 'reading',
        ]);

        BookStatus::create([
            'status' => 'read',
        ]);

    }
}
