<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evento>
 */
class EventoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => 'Evento ' . $this->faker->text($maxNBChars = 10),
            'fecha' => fake()->dateTimeBetween('-4 weeks', '+ 2 months'),
            'hora' => $this->faker->time('H:i'),
            'descripcion' => fake()->sentence(20),
            'ciudad' => $this->faker->city(),
            'direccion' => $this->faker->address(),
            'estado' => fake()->randomElement(['creado', 'cancelado', 'terminado']),
            'aforo' => fake()->numberBetween(50, 300),
            'tipo' => fake()->randomElement(['presencial', 'online']),
            'entrada_persona' => fake()->numberBetween(0, 40),
            'imagen' => fake()->randomElement(['ev1.jpg', 'ev2.jpg', 'ev3.jpg', 'ev4.jpg', 'ev5.jpg']),
            'categoria_id' => fake()->numberBetween(1, 7),
            'user_id' => fake()->numberBetween(1, 10)
        ];
    }
}
