<?php

namespace Database\Factories;

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
            "image"     => "bg.jpg",
            "tanggal"   => "17-02-2025",
            "skala"     => "Nasioal",
            "juara"     => "Juara 1",
            "anggota"   => "Ilhan Manzis, Janggar Fals",
            "isi"       => "asdbshagjhsagfjhagjh"
        ];
    }
}
