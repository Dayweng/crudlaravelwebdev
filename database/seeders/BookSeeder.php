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
            ],
            [
                'title' => 'Bumi Manusia',
                'author' => 'Pramoedya Ananta Toer',
                'published_year' => 1980,
            ],
            [
                'title' => 'Filosofi Teras',
                'author' => 'Henry Manampiring',
                'published_year' => 2018,
            ],
            [
                'title' => 'Negeri 5 Menara',
                'author' => 'Ahmad Fuadi',
                'published_year' => 2009,
            ],
            [
                'title' => 'Cantik Itu Luka',
                'author' => 'Eka Kurniawan',
                'published_year' => 2002,
            ],
            [
                'title' => 'Hujan',
                'author' => 'Tere Liye',
                'published_year' => 2016,
            ],
            [
                'title' => 'Pulang',
                'author' => 'Leila S. Chudori',
                'published_year' => 2012,
            ],
        ];

        Book::query()->truncate();

        foreach ($books as $book) {
            Book::query()->create($book);
        }
    }
}
