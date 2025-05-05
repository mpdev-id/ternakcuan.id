<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\PartnerSeeder;
use Database\Seeders\PrimaryWebsiteSeeder;
use Database\Seeders\QuoteSeeder;
use Database\Seeders\TestimoniesSeeder;
use Database\Seeders\ServiceSeeder;
use Database\Seeders\AboutSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            PrimaryWebsiteSeeder::class,
            PartnerSeeder::class,
            QuoteSeeder::class,
            // PrimaryWebsiteSeeder::class,
            TestimoniesSeeder::class,
            AboutSeeder::class,
            // UserSeeder::class,
            // ContactSeeder::class,
            ServiceSeeder::class,
            // BlogCategorySeeder::class,
            // BlogSeeder::class,
        ]);
    }
}
