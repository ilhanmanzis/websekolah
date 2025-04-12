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
            'id_profile' => 1,
            'nama_sekolah' => 'SMA N 1 KASUI',
            'motto' => 'BERPRESTASI DAN BERBUDAYA',
            'image_banner' => 'banner/bg.jpg',
            'logo' => 'logo/logo.png',
            'organisasi_sekolah' => 'profile/struktur/sekolah/bg.jpg',
            'organisasi_komite' => 'profile/struktur/komite/bg.jpg',
            'foto_pendidik' => 'profile/staf/pendidik/banner/bg.jpg',
            'foto_kependidikan' => 'profile/staf/kependidikan/banner/bg.jpg',
            'ekstrakurikuler' => 'layanan/ekstrakurikuler/banner/bg.jpg',
            'created_at' => '2025-04-05 12:35:11',
            'updated_at' => '2025-04-05 12:35:11',
        ];
    }
}
