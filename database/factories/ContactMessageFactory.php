<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContactMessage>
 */
class ContactMessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "firstname" => fake()->firstName,
            "lastname" => fake()->lastName,
            "email" => fake()->safeEmail,
            "subject" => fake()->words(5, true),
            "message" => fake()->sentence
        ];
    }
}
