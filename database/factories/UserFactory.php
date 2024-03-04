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
            'rol' => fake()->randomElement(['asistente', 'creadorEventos']),
            'dni' => $this->faker->dni,
            'nombre' => fake()->name(),
            'apellidos' => fake()->lastName(),
            'edad' => fake()->numberBetween(15, 80),
            'direccion' => fake()->address(),
            'ciudad' => fake()->city(),
            'telefono' => fake()->phoneNumber(),
            'puesto' => fake()->jobTitle(),
            'empresa_id' => fake()->numberBetween(1, 10),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
