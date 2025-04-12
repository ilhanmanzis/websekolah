<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ekstrakurikuler>
 */
class EkstrakurikulerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_ekstrakurikuler' => 1,
            'nama' => 'Pramuka',
            'logo' => 'layanan/ekstrakurikuler/logo.png',
            'created_at' => '2025-04-05 12:35:11',
            'updated_at' => '2025-04-05 12:35:11',
        ];
    }
}
