<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::truncate();

        Author::create([
         'author_name' => 'Fyodor',
         'author_lastname' => 'Dostoyevsky',
         'author_image_path' => '01HSS9CTX8S67QYR80BCJ6V530.webp',
         'author_slug' => 'fyodor-dostoyevsky',
        ]);

        Author::create([
         'author_name' => 'Leo',
         'author_lastname' => 'Tolstoy',
         'author_image_path' => '01HSS9F3F231NG1ZT0C5XP2KNT.webp',
         'author_slug' => 'leo-tolstoy',
        ]);

        Author::create([
         'author_name' => 'Stephen',
         'author_lastname' => 'King',
         'author_image_path' => '01HSTGJJFGFX17Z7HQAPZBDZ0M.webp',
         'author_slug' => 'stephen-king',
        ]);

        Author::create([
         'author_name' => 'Luigi',
         'author_lastname' => 'Pirandello',
         'author_image_path' => '01HSTGH6ZFTSMMZT253R3JS46J.webp',
         'author_slug' => 'luigi-pirandello',
        ]);

        Author::create([
         'author_name' => 'Franz',
         'author_lastname' => 'Kafka',
         'author_image_path' => '01HSTGMGG4GRWMTR54F9YJDT5M.webp',
         'author_slug' => 'franz-kafka',
        ]);

        Author::create([
         'author_name' => 'Stephen',
         'author_lastname' => 'Fry',
         'author_image_path' => '01HSTHCAP1V0PBKV38ZFMSR3C5.webp',
         'author_slug' => 'stephen-fry',
        ]);

        Author::create([
         'author_name' => 'Kazuo',
         'author_lastname' => 'Ishiguro',
         'author_image_path' => '01HSTHFF0X36GXJD3JKVDQQETR.webp',
         'author_slug' => 'kazuo-ishiguro',
        ]);

        Author::create([
         'author_name' => 'Joseph',
         'author_lastname' => 'Heller',
         'author_image_path' => '01HSTHJCRNNF4Y46JXAN6YJR95.webp',
         'author_slug' => 'joseph-heller',
        ]);

        Author::create([
         'author_name' => 'John',
         'author_lastname' => 'Steinbeck',
         'author_image_path' => '01HSTHPNB6EEK2Q0PEBHD8684R.webp',
         'author_slug' => 'john-steibeck',
        ]);
    }
}
