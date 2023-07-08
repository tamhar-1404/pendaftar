<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'sekolah' => fake()->sentence(2),
            'email_verified_at' => now(),
            'role' => 'Siswa',
            'password' => '$2a$12$4mKH/fWTT2xH2.UM8wC.z.S7zLYpHczIoXqV627PAWFn0l2xeJE8K', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
