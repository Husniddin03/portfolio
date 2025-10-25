<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\File>
 */
class FileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'url' => $this->faker->url(),
            'type' => $this->faker->randomElement(['pdf', 'doc', 'image']),
            'title' => $this->faker->sentence(4),
            'content' => $this->faker->paragraph(2),
        ];
    }
}
