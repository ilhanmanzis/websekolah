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
            "nama"      => "Ilhan Manzis",
            "status"    => "Tenaga Kependidikan",
            "foto"      => "profile/staf/kependidikan/a.jpg"
        ];
    }
}
