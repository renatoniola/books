<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::truncate();

        Book::create([
            'book_title' => 'The idiot',
            'author_id' => 1,
            'book_descr' => 'Iure quidem earum ut quisquam architecto. Quibusdam voluptatem dignissimos eius atque eos dolores quisquam. Doloribus itaque est ea et. Et qui aut dolores voluptatem veniam. Placeat quia quidem quibusdam nisi. Sed et rerum sit ut et enim. Dolor eos voluptatem omnis natus quia omnis. Doloribus qui aspernatur enim sit laudantium. Impedit iusto odit aut temporibus velit repellendus temporibus. Sint et hic cum odio quis exercitationem quas.',
            'book_excerpt' => 'Excerpto yoo',
            'book_image_path' => '01HSTCXTCDNYWSPCJX92MZRBS0.jpg',
            'book_year_published' => 1869,
            'book_slug' => 'the-idiot'
        ]);

        Book::create([
            'book_title' => 'War and peace',
            'author_id' => 2,
            'book_descr' => 'Iure quidem earum ut quisquam architecto. Quibusdam voluptatem dignissimos eius atque eos dolores quisquam. Doloribus itaque est ea et. Et qui aut dolores voluptatem veniam. Placeat quia quidem quibusdam nisi. Sed et rerum sit ut et enim. Dolor eos voluptatem omnis natus quia omnis. Doloribus qui aspernatur enim sit laudantium. Impedit iusto odit aut temporibus velit repellendus temporibus. Sint et hic cum odio quis exercitationem quas.',
            'book_excerpt' => 'Excerpto yoo',
            'book_image_path' => '01HSTF8J6ZEET6V880J27K3G5F.webp',
            'book_year_published' => 0,
            'book_slug' => 'war-and-peace'
        ]);

        Book::create([
            'book_title' => 'The stand',
            'author_id' => 3,
            'book_descr' => 'Iure quidem earum ut quisquam architecto. Quibusdam voluptatem dignissimos eius atque eos dolores quisquam. Doloribus itaque est ea et. Et qui aut dolores voluptatem veniam. Placeat quia quidem quibusdam nisi. Sed et rerum sit ut et enim. Dolor eos voluptatem omnis natus quia omnis. Doloribus qui aspernatur enim sit laudantium. Impedit iusto odit aut temporibus velit repellendus temporibus. Sint et hic cum odio quis exercitationem quas.',
            'book_excerpt' => 'Excerpto yoo',
            'book_image_path' => '01HSTHZQ8F9284X4J8JTJHVNVR.jpg',
            'book_year_published' => 0,
            'book_slug' => 'the-stand'
        ]);

        Book::create([
            'book_title' => 'Il fu Mattia Pascal',
            'author_id' => 4,
            'book_descr' => 'Iure quidem earum ut quisquam architecto. Quibusdam voluptatem dignissimos eius atque eos dolores quisquam. Doloribus itaque est ea et. Et qui aut dolores voluptatem veniam. Placeat quia quidem quibusdam nisi. Sed et rerum sit ut et enim. Dolor eos voluptatem omnis natus quia omnis. Doloribus qui aspernatur enim sit laudantium. Impedit iusto odit aut temporibus velit repellendus temporibus. Sint et hic cum odio quis exercitationem quas.',
            'book_excerpt' => 'Excerpto yoo',
            'book_image_path' => '01HSTHY774QK12K9N2GX957Z45.jpg',
            'book_year_published' => 0,
            'book_slug' => 'il-fu-mattia-pascal',
        ]);

        Book::create([
            'book_title' => 'Metamorphosis',
            'author_id' => 5,
            'book_descr' => 'Iure quidem earum ut quisquam architecto. Quibusdam voluptatem dignissimos eius atque eos dolores quisquam. Doloribus itaque est ea et. Et qui aut dolores voluptatem veniam. Placeat quia quidem quibusdam nisi. Sed et rerum sit ut et enim. Dolor eos voluptatem omnis natus quia omnis. Doloribus qui aspernatur enim sit laudantium. Impedit iusto odit aut temporibus velit repellendus temporibus. Sint et hic cum odio quis exercitationem quas.',
            'book_excerpt' => 'Excerpto yoo',
            'book_image_path' => '01HSTHWEMKFNTXK3GXSA25RB1M.jpg',
            'book_year_published' => 0,
            'book_slug' => 'metamorphosis',
        ]);

        Book::create([
            'book_title' => 'Mythos',
            'author_id' => 6,
            'book_descr' => 'Iure quidem earum ut quisquam architecto. Quibusdam voluptatem dignissimos eius atque eos dolores quisquam. Doloribus itaque est ea et. Et qui aut dolores voluptatem veniam. Placeat quia quidem quibusdam nisi. Sed et rerum sit ut et enim. Dolor eos voluptatem omnis natus quia omnis. Doloribus qui aspernatur enim sit laudantium. Impedit iusto odit aut temporibus velit repellendus temporibus. Sint et hic cum odio quis exercitationem quas.',
            'book_excerpt' => 'Excerpto yoo',
            'book_image_path' => '01HSTHSEV106X567CY2VWFB3V3.jpg',
            'book_year_published' => 0,
            'book_slug' => 'mythos',
        ]);

        Book::create([
            'book_title' => 'Klara and the sun',
            'author_id' => 7,
            'book_descr' => 'Iure quidem earum ut quisquam architecto. Quibusdam voluptatem dignissimos eius atque eos dolores quisquam. Doloribus itaque est ea et. Et qui aut dolores voluptatem veniam. Placeat quia quidem quibusdam nisi. Sed et rerum sit ut et enim. Dolor eos voluptatem omnis natus quia omnis. Doloribus qui aspernatur enim sit laudantium. Impedit iusto odit aut temporibus velit repellendus temporibus. Sint et hic cum odio quis exercitationem quas.',
            'book_excerpt' => 'Excerpto yoo',
            'book_image_path' => '01HSTHG55DM255TSXYBCR2AY17.jpg',
            'book_year_published' => 0,
            'book_slug' => 'kiara-and-the-sun',
        ]);

        Book::create([
            'book_title' => 'Catch 22',
            'author_id' => 8,
            'book_descr' => 'Iure quidem earum ut quisquam architecto. Quibusdam voluptatem dignissimos eius atque eos dolores quisquam. Doloribus itaque est ea et. Et qui aut dolores voluptatem veniam. Placeat quia quidem quibusdam nisi. Sed et rerum sit ut et enim. Dolor eos voluptatem omnis natus quia omnis. Doloribus qui aspernatur enim sit laudantium. Impedit iusto odit aut temporibus velit repellendus temporibus. Sint et hic cum odio quis exercitationem quas.',
            'book_excerpt' => 'Excerpto yoo',
            'book_image_path' => '01HSTHKX0D2NF8B8ZBBYMFZ7JD.jpg',
            'book_year_published' => 0,
            'book_slug' => 'catch-22',
        ]);

        Book::create([
            'book_title' => 'East of eden',
            'author_id' => 9,
            'book_descr' => 'Iure quidem earum ut quisquam architecto. Quibusdam voluptatem dignissimos eius atque eos dolores quisquam. Doloribus itaque est ea et. Et qui aut dolores voluptatem veniam. Placeat quia quidem quibusdam nisi. Sed et rerum sit ut et enim. Dolor eos voluptatem omnis natus quia omnis. Doloribus qui aspernatur enim sit laudantium. Impedit iusto odit aut temporibus velit repellendus temporibus. Sint et hic cum odio quis exercitationem quas.',
            'book_excerpt' => 'Excerpto yoo',
            'book_image_path' => '01HSTHQZ9Y3NPKYY4NSAW3M9MN.jpg',
            'book_year_published' => 0,
            'book_slug' => 'east-of-eden',
        ]);


    }
}
