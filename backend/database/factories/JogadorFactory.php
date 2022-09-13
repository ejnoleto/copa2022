<?php

namespace Database\Factories;

use App\Models\Equipe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jogador>
 */
class JogadorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $posicao = ['Goleiro', 'Laterais direito e esquerdo', 'Zagueiro', 'Volante', 'Meia', 'Atacante'];
        return [
            'nome' => $this->faker->unique()->name(),
            'nascimento' => $this->faker->dateTimeBetween('-60 years', '-20 years'),
            'posicao' => $this->faker->randomElement($posicao),
            'numero_camisa' => $this->faker->randomNumber(2),
            'capitao' => $this->faker->boolean(),
            'pais' => $this->faker->country,
            'equipe_id' => $this->faker->randomElement(Equipe::all())['id'],
        ];
    }
}
