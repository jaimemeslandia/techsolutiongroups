<?php

namespace Database\Factories;

use App\Models\Proyectos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Proyectos>
 */
class ProyectosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nombre'=>fake()->realText(45),
            'Fecha_de_inicio'=>fake()->date(),
            'Estado'=>fake()->text(7),
            'Responsable'=>fake()->name(),
            'Monto'=>fake()->numberBetween(400000, 3000000)
        ];
    }
}
