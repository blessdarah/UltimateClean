<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => fake()->name,
            "address" => fake()->address,
            "email" => fake()->email,
            "website" => fake()->url,
            "phone_number" => fake()->phoneNumber,
            "info" => fake()->paragraphs(2, true),
            "country" => fake()->country
        ];
    }
}
