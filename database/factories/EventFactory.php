<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name,
            "slug" => $this->faker->slug,
            "description" => $this->faker->sentence,
            "detail" => $this->faker->paragraph,
            "start_date" => $this->faker->date,
            "end_date" => $this->faker->date
        ];
    }
}
