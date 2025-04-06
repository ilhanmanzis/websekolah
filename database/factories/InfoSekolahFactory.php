<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InfoSekolah>
 */
class InfoSekolahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "judul"     => "PENILAIAN AKHIR SEMESTER GANJIL T.P. 2024/2025",
            "isi"       => $this->faker->paragraphs(5, true),
            "tanggal"       => Carbon::parse($this->faker->date())->translatedFormat('d F Y'),
            "image"     => "info/bg.jpg"
        ];
    }
}
