<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('authors')->insert([
            [
                'name'       => 'J.K. Rowling',
                'bio'        => 'British author, best known for the Harry Potter series.',
                'birth_date' => '1965-07-31',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'Tere Liye',
                'bio'        => 'Penulis novel populer Indonesia.',
                'birth_date' => '1979-05-21',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'George R.R. Martin',
                'bio'        => 'American novelist and short story writer.',
                'birth_date' => '1948-09-20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}