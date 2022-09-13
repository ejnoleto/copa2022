<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEquipeRequest extends FormRequest
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
            'pais' => 'required|unique:equipes,pais|string|max:255',
            'nome_alternativo' => 'sometimes|string|max:255',
            'codigo' => 'required|unique:equipes,codigo|string|max:3',
            'grupo_id' => 'required|integer',
            'grupo_sigla' => 'required|string|max:1',
        ];
    }
}
