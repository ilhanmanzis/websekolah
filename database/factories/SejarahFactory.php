<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sejarah>
 */
class SejarahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "isi"   => "asdhkashdk ashdknfkjsbkfjbsd kfgb  sdfjkgsd hj  fbvczxcjhs  dkfksjfbk jhsdvfbjhsd  jfhdsvajfhvsdajfhva",
            "image" => "profile/sejarah/bg.jpg"
        ];
    }
}
