<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TenagaPendidik>
 */
class TenagaPendidikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_tenaga_pendidik' => 1,
            'id_mata_pelajaran' => 1,
            'nama' => 'Ilhan Manzis',
            'foto' => 'profile/staf/pendidik/a.jpg',
            'created_at' => '2025-04-05 12:35:11',
            'updated_at' => '2025-04-05 12:35:11',
        ];
    }
}
