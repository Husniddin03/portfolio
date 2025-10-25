<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostMediafile>
 */
class PostMediafileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'url' => $this->faker->imageUrl(),
            'type' => $this->faker->randomElement(['image', 'video', 'url']),
            'content_id' => \App\Models\Content::factory(),
        ];
    }
}
