<?php

namespace Database\Seeders;

<<<<<<< HEAD
=======
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
>>>>>>> f367aee79e7692afcb65cf899088af2ab49d479b
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
<<<<<<< HEAD
    public function run(): void
    {
        $this->call([
            AuthorSeeder::class,
            PublisherSeeder::class,
            BookSeeder::class,
            MemberSeeder::class,
            LoanSeeder::class,
        ]);
    }
}
=======
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
>>>>>>> f367aee79e7692afcb65cf899088af2ab49d479b
