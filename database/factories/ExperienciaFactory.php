<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experiencia>
 */
class ExperienciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => 'Experiencia ' . $this->faker->text($maxNBChars = 10),
            'fecha' => fake()->dateTimeBetween('-4 weeks', '+ 2 months'),
            'fecha_string' => fake()->randomElement(['1 semana', '4 dias', '1 mes', '3 meses', '6 meses']),
            'descripcion_corta' => fake()->sentence(20),
            'descripcion_larga' => fake()->sentence(50),
            'precio' => fake()->randomFloat(2, 0, 50),
            'link' => fake()->url(),
            'imagen' => fake()->randomElement(['ex1.jpg', 'ex2.jpg', 'ex3.jpg', 'ex4.jpg', 'ex5.jpg']),
            'categoria_id' => fake()->numberBetween(1, 7),
            'empresa_id' => fake()->numberBetween(1, 10),
        ];
    }
}
