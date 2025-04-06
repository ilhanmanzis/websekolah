<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\VisiMisi>
 */
class VisiMisiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "visi"  => $this->faker->paragraphs(5, true),
            "misi"  => $this->faker->paragraphs(5, true),
            "image" => "profile/visimisi/bg.jpg"
        ];
    }
}
