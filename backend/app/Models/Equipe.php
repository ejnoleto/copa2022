<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'pais',
        'nome_alternativo',
        'codigo',
        'grupo_id',
        'grupo_sigla'
    ];

    public function jogadores()
    {
        return $this->hasMany(Jogador::class);
    }
}
