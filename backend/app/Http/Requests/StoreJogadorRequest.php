<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJogadorRequest extends FormRequest
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
            'nome' => 'required|string|max:255',
            'nascimento' => 'required|date_format:d/m/Y',
            'posicao' => 'required|string|max:255',
            'numero_camisa' => 'required|integer',
            'capitao' => 'required|boolean',
            'pais' => 'required|string|max:255',
            'equipe_id' => 'required|integer|exists:equipes,id'
        ];
    }
}
