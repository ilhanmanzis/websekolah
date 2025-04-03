<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nama_sekolah"         => "SMA N 1 KASUI",
            "motto"                => "BERPRESTASI DAN BERBUDAYA",
            "image_banner"         => "bg.jpg",
            "logo"                 => "logo.png",
            "organisasi_sekolah"   => "bg.jpg",
            "organisasi_komite"    => "bg.jpg",
            "foto_pendidik"        => "bg.jpg",
            "foto_kependidikan"    => "bg.jpg",
            "ekstrakurikuler"    => "bg.jpg"
        ];
    }
}
