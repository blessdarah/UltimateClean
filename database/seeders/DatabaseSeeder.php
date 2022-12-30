<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ServiceSeeder::class,
            EventSeeder::class,
            ProjectSeeder::class,
            UpdateSeeder::class,
            TestimonialSeeder::class,
            FaqSeeder::class,
            PartnerSeeder::class,
            TeamMemberSeeder::class,
            PostSeeder::class,
            ContactMessageSeeder::class,
        ]);
    }
}
