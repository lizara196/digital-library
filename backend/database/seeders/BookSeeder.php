<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title'            => "Harry Potter and the Philosopher's Stone",
                'isbn'             => '9780747532699',
                'author_id'        => 1,
                'publisher_id'     => 2,
                'publication_year' => 1997,
                'stock'            => 15,
                'created_at'       => now(),
                'updated_at'       => now(),
            ],
            [
                'title'            => 'Bumi',
                'isbn'             => '9786020301123',
                'author_id'        => 2,
                'publisher_id'     => 1,
                'publication_year' => 2014,
                'stock'            => 10,
                'created_at'       => now(),
                'updated_at'       => now(),
            ],
            [
                'title'            => 'A Game of Thrones',
                'isbn'             => '9780553103540',
                'author_id'        => 3,
                'publisher_id'     => 2,
                'publication_year' => 1996,
                'stock'            => 8,
                'created_at'       => now(),
                'updated_at'       => now(),
            ],
        ]);
    }
}