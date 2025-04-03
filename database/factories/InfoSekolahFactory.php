<?php

namespace Database\Factories;

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
            "isi"       => "shsghfjsdkjfhgsdjhfhkjdfh",
            "tanggal"       => "21 Februari 2025",
            "image"     => "bg.jpg"
        ];
    }
}
