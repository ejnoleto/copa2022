<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateJogadorRequest extends FormRequest
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
            'nome' => 'sometimes|string|max:255',
            'nascimento' => 'sometimes|date_format:d/m/Y',
            'posicao' => 'sometimes|string|max:255',
            'numero_camisa' => 'sometimes|integer',
            'capitao' => 'sometimes|boolean',
            'pais' => 'sometimes|string|max:255',
            'equipe_id' => 'sometimes|integer|exists:equipes,id'
        ];
    }
}
