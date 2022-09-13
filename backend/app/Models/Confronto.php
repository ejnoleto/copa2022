<?php

namespace App\Models;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Confronto extends Model
{
    use HasFactory;

    protected $fillable = [
        'local',
        'status',
        'data',
        'equipe_casa_id',
        'equipe_visitante_id',
        'gols_casa',
        'gols_visitante',
        'vencedor_id'
    ];

    protected $casts = [
        'status' => Status::class,
    ];

    public function equipe_casa()
    {
        return $this->belongsTo(Equipe::class, 'equipe_casa_id');
    }

    public function equipe_visitante()
    {
        return $this->belongsTo(Equipe::class, 'equipe_visitante_id');
    }

    public function vencedor()
    {
        return $this->belongsTo(Equipe::class, 'vencedor_id');
    }
}
