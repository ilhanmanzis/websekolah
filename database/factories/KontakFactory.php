<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kontak>
 */
class KontakFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_kontak' => 1,
            'email' => 'admin@gmail.com',
            'alamat' => 'Jl. Bukit Suling 1, Jaya Tinggi, Kec. Kasui, Kabupaten Way Kanan, Lampung 34765',
            'fax' => '0274 - 542604',
            'no_telpon' => '0877456465465',
            'wa' => '+62875765765765',
            'facebook' => 'https://facebook.com/ilhanmanzis',
            'instagram' => 'https://instagram.com/janggarfals',
            'youtube' => 'https://youtube.com',
            'created_at' => '2025-04-05 12:35:11',
            'updated_at' => '2025-04-05 12:35:11',
        ];
    }
}
