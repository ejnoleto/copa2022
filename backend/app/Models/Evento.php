<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
        'tempo',
        'jogador_id',
        'equipe_id',
        'confronto_id'
    ];

    public function jogador()
    {
        return $this->belongsTo(Jogador::class);
    }

    public function equipe()
    {
        return $this->belongsTo(Equipe::class);
    }

    public function confronto()
    {
        return $this->belongsTo(Confronto::class);
    }
}
