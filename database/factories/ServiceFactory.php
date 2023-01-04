<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => fake()->sentence,
            "slug" => fake()->slug,
            "summary" => fake()->sentence,
            "description" => fake()->text,
            "category_id" => Category::inRandomOrder()->first()->id
        ];
    }
}
