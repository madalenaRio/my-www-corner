<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Story>
 */
class StoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->unique()->realText($maxNBChars = 30),
            'content' => fake()->realText($maxNBChars = 300),
            'user_id' => fake()->numberBetween(1, 60),
            'publish_date'=> fake()->date(),
            'imgURL' => fake()->imageUrl(640,480),
        ];
    }
}
