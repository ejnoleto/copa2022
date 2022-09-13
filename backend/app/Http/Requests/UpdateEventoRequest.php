<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'tipo' => 'sometimes|string|max:255',
            'tempo' => 'sometimes|integer',
            'jogador_id' => 'sometimes|integer|exists:jogadores,id',
            'equipe_id' => 'sometimes|integer|exists:equipes,id',
            'confronto_id' => 'sometimes|integer|exists:confrontos,id',
        ];
    }
}
