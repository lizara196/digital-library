<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('publishers')->insert([
            [
                'name'       => 'Gramedia Pustaka Utama',
                'address'    => 'Jl. Palmerah Barat No. 29-37, Jakarta',
                'phone'      => '02153650110',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name'       => 'Bloomsbury Publishing',
                'address'    => 'London, United Kingdom',
                'phone'      => '+442076315600',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}