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
            "id_mata_pelajaran" => 1,
            "nama"              => "Ilhan Manzis",
            "foto"              => "a.jpg"
        ];
    }
}
