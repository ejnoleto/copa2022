<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipe>
 */
class EquipeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pais' => $this->faker->unique()->country(),
            'nome_alternativo' => $this->faker->unique()->name(),
            'codigo' => $this->faker->unique()->countryISOAlpha3(),
            'grupo_id' => $this->faker->randomNumber(1),
            'grupo_sigla' => $this->faker->randomLetter(),
        ];
    }
}
