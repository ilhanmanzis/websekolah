<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TenagaKependidikan>
 */
class TenagaKependidikanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_tenaga_kependidikan' => 1,
            'nama' => 'Ilhan Manzis',
            'status' => 'Tenaga Kependidikan',
            'foto' => 'profile/staf/kependidikan/a.jpg',
            'created_at' => '2025-04-05 12:35:11',
            'updated_at' => '2025-04-05 12:35:11',
        ];
    }
}
