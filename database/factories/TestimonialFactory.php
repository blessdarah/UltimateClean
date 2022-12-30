<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "message" => fake()->paragraph,
            "author_name" => fake()->name,
            "author_position" => fake()->jobTitle,
            "author_company" => fake()->company
        ];
    }
}
