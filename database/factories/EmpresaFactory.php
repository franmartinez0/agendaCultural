<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresa>
 */
class EmpresaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->unique()->company(),
            'direccion' => fake()->address,
            'telefono' => fake()->phoneNumber(),
            'email' => fake()->unique()->email,
            'web' => "http://" . fake()->domainName,
            'info' => fake()->sentence(25),
        ];
    }
}
