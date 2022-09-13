<?php

namespace Database\Factories;

use App\Enums\Status;
use App\Models\Equipe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Confronto>
 */
class ConfrontoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $equipes = [
            $this->faker->randomElement(Equipe::all())['id'],
            $this->faker->randomElement(Equipe::all())['id']
        ];
        return [
            'local' => $this->faker->unique()->city(),
            'data' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'status' => $this->faker->randomElement(Status::cases()),
            'equipe_casa_id' => $equipes[0],
            'equipe_visitante_id' => $equipes[1],
            'gols_casa' => $this->faker->randomNumber(1),
            'gols_visitante' => $this->faker->randomNumber(1),
            'vencedor_id' => $this->faker->randomElement($equipes),
        ];
    }
}
