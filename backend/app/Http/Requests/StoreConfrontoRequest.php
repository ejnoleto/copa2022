<?php

namespace App\Http\Requests;

use App\Enums\Status;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class StoreConfrontoRequest extends FormRequest
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
            'local' => 'required|string|max:255',
            'status' => ['required', new Enum(Status::class)],
            'data' => 'required|date_format:d/m/Y H:i',
            'equipe_casa_id' => 'required|integer|exists:equipes,id',
            'equipe_visitante_id' => 'required|integer|exists:equipes,id',
            'gols_casa' => 'sometimes|integer',
            'gols_visitante' => 'sometimes|integer',
            'vencedor_id' => 'sometimes|integer|exists:equipes,id',
        ];
    }
}
