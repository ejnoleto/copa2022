<?php

namespace App\Enums;

enum Status: string
{
    case AGENDADO = 'Agendado';
    case EMANDAMENTO = 'Em andamento';
    case FINALIZADO = 'Finalizado';
}
