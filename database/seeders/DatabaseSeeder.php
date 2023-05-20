<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AdminSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(AdminSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(ComputerSeeder::class);
        $this->call(PartnerSeeder::class);
        $this->call(PositionSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(VideoSeeder::class);
    }
}
