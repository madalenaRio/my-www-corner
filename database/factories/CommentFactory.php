<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CommentFactory extends Factory
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
            'content' => fake()->realText($maxNBChars = 180),
            'user_id' => fake()->numberBetween(1, 150),
            'story_id'=> fake()->numberBetween(1, 254),
            'publish_date'=> fake()->date(),
        ];
    }
}