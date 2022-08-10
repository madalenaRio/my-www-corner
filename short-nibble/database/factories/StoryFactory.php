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
            'title' => $this->faker->unique()->realText($maxNBChars = 30),
            'content' => $this->faker->realText($maxNBChars = 300),
            'author_id' => $this->faker->numberBetween(1, 60),
            'publish_date'=> $this->faker->date(),
            'imgURL' => $this->faker->imageUrl(640,480),
        ];
    }
}
