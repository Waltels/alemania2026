<?php

namespace Database\Factories;

use App\Models\Gestion;
use App\Models\Nivel;
use App\Models\Paralelo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grado>
 */
class GradoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word(),
            'paralelo_id' => Paralelo::all()->random()->id,
            'nivel_id' => Nivel::all()->random()->id,
            'gestion_id' => Gestion::all()->random()->id,
            'estado' => $this->faker->boolean(),
        ];
    }
}
