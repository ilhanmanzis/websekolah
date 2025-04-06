<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prestasi>
 */
class PrestasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "judul"     => "JUARA UMUM LKTI NASIONAL MIPA UNY",
            "image"     => "poster/bg.jpg",
            "tanggal"       => Carbon::parse($this->faker->date())->translatedFormat('d F Y'),
            "skala"     => "Nasioal",
            "juara"     => "Juara 1",
            "anggota"   => "Ilhan Manzis, Janggar Fals",
            "isi"       => "asdbshagjhsagfjhagjh"
        ];
    }
}
