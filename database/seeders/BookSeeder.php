<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'title' => 'Laskar Pelangi',
                'author' => 'Andrea Hirata',
                'published_year' => 2005,
                'cover_path' => 'images/foto1 (1).jpeg',
            ],
            [
                'title' => 'Bumi Manusia',
                'author' => 'Pramoedya Ananta Toer',
                'published_year' => 1980,
                'cover_path' => 'images/foto1 (2).jpeg',
            ],
            [
                'title' => 'Filosofi Teras',
                'author' => 'Henry Manampiring',
                'published_year' => 2018,
                'cover_path' => 'images/foto1 (3).jpeg',
            ],
            [
                'title' => 'Negeri 5 Menara',
                'author' => 'Ahmad Fuadi',
                'published_year' => 2009,
                'cover_path' => 'images/foto1 (4).jpeg',
            ],
            [
                'title' => 'Cantik Itu Luka',
                'author' => 'Eka Kurniawan',
                'published_year' => 2002,
                'cover_path' => 'images/foto1 (5).jpeg',
            ],
            [
                'title' => 'Hujan',
                'author' => 'Tere Liye',
                'published_year' => 2016,
                'cover_path' => 'images/foto1 (6).jpeg',
            ],
            [
                'title' => 'Pulang',
                'author' => 'Leila S. Chudori',
                'published_year' => 2012,
                'cover_path' => 'images/foto1 (7).jpeg',
            ],
        ];

        Book::query()->truncate();

        foreach ($books as $book) {
            Book::query()->create($book);
        }
    }
}
