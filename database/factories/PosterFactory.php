<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Poster>
 */
class PosterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_poster' => 1,
            'image' => 'poster/bg.jpg',
            'created_at' => '2025-04-05 12:35:11',
            'updated_at' => '2025-04-05 12:35:11',
        ];
    }
}
