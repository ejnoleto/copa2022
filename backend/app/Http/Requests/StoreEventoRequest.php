<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventoRequest extends FormRequest
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
            'tipo' => 'required|string|max:255',
            'tempo' => 'required|integer',
            'jogador_id' => 'required|integer|exists:jogadores,id',
            'equipe_id' => 'required|integer|exists:equipes,id',
            'confronto_id' => 'required|integer|exists:confrontos,id',
        ];
    }
}
