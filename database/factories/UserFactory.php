<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => 1,
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => NULL,
            'password' => '$2y$12$2wr3tuPUH1jXDlqY.y4l9e5aI.QYdJKw.5RBmv6sOVr3JhohXwy7S',

            // password "admin123" kalo misalkan tidak bisa pake perintah "php artisan make:filament-user" untuk membuat user baru


            'remember_token' => NULL,
            'created_at' => '2025-04-05 12:35:36',
            'updated_at' => '2025-04-12 10:14:36',
            'custom_fields' => NULL,
            'avatar_url' => NULL,
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
