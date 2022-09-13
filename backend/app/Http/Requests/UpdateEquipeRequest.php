<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEquipeRequest extends FormRequest
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
            'pais' => 'sometimes|unique:equipes,pais|string|max:255',
            'nome_alternativo' => 'sometimes|string|max:255',
            'codigo' => 'sometimes|unique:equipes,codigo|string|max:3',
            'grupo_id' => 'sometimes|integer',
            'grupo_sigla' => 'sometimes|string|max:1',
        ];
    }
}
