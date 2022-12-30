<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeamMember>
 */
class TeamMemberFactory extends Factory
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
            "nickname" => fake()->firstName,
            "position" => fake()->jobTitle,
            "address" => fake()->address,
            "email" => fake()->safeEmail,
            "telephone" => fake()->phoneNumber,
            "gender" => fake()->randomElement(["male", "female"]),
            "dob" => fake()->date,
            "about" => fake()->paragraphs(2, true)
        ];
    }
}
