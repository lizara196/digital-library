<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('members')->insert([
            [
                'member_code' => 'MBR-001',
                'name'        => 'Liza Mutiara',
                'email'       => 'liza@example.com',
                'phone'       => '08123456789',
                'address'     => 'Banda Aceh',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'member_code' => 'MBR-002',
                'name'        => 'Budi Santoso',
                'email'       => 'budi@example.com',
                'phone'       => '08987654321',
                'address'     => 'Medan',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);
    }
}