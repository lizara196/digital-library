<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('loans')->insert([
            [
                'member_id'   => 1, // Liza Mutiara
                'book_id'     => 2, // Buku Bumi
                'loan_date'   => '2026-10-01',
                'due_date'    => '2026-10-08',
                'return_date' => '2026-10-07',
                'status'      => 'returned',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'member_id'   => 2, // Budi Santoso
                'book_id'     => 3, // A Game of Thrones
                'loan_date'   => '2026-10-05',
                'due_date'    => '2026-10-12',
                'return_date' => null,
                'status'      => 'borrowed',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'member_id'   => 1, // Liza Mutiara
                'book_id'     => 1, // Harry Potter
                'loan_date'   => '2026-10-09',
                'due_date'    => '2026-10-16',
                'return_date' => null,
                'status'      => 'borrowed',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);
    }
}