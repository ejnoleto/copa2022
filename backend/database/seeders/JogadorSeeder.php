<?php

namespace Database\Seeders;

use App\Models\Jogador;
use Illuminate\Database\Seeder;

class JogadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jogador::factory()->count(330)->create();
    }
}
