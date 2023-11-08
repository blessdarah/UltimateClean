<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        if(app()->environment('production')) {
            User::create([
                'name' => 'Super admin',
                'email' => 'user@test.com',
                'password' => Hash::make('testuser')
            ]);
        } else {
            $this->call([
                TagSeeder::class,
                CategorySeeder::class,
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
                InvoiceSeeder::class
            ]);
        }
    }
}
