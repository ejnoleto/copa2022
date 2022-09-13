<?php

namespace Database\Factories;

use App\Models\Confronto;
use App\Models\Equipe;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Eventos>
 */

class EventoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $tipo_evento = ['gol', 'cartao_amarelo', 'cartao_vermelho', 'substituicao - saida', 'substituicao - entrada'];
        $confronto = Confronto::inRandomOrder()->first();
        $equipe = $this->faker->randomElement([$confronto->equipe_casa_id, $confronto->equipe_visitante_id]);
        return [
            'tipo' => $this->faker->randomElement($tipo_evento),
            'tempo' => $this->faker->numberBetween(1, 90),
            'jogador_id' => Equipe::find(1)->jogadores->random()->id,
            'equipe_id' => $equipe,
            'confronto_id' => $confronto['id'],
        ];
    }
}
