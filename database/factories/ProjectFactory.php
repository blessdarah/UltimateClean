<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->name,
            "image" => $this->faker->imageUrl,
            "slug" => $this->faker->slug,
            "description" => fake()->sentence,
            "detail" => $this->faker->paragraph,
            "status" => array_rand(["published", "draft", "archived"]),
            "start_date" => $this->faker->date,
            "end_date" => $this->faker->date
        ];
    }
}
