<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogador extends Model
{
    use HasFactory;

    protected $table = 'jogadores';

    protected $fillable = [
        'nome',
        'nascimento',
        'posicao',
        'numero_camisa',
        'capitao',
        'pais',
        'equipe_id'
    ];

    public function equipe()
    {
        return $this->belongsTo(Equipe::class);
    }
}
