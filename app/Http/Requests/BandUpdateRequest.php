<?php

namespace App\Http\Requests;

use App\Support\FailedValidation;
use Illuminate\Foundation\Http\FormRequest;

class BandUpdateRequest extends FormRequest
{
    use FailedValidation;

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'country_id' => ['required', 'exists:countries,id'],
            'genres_ids' => ['required', 'array', 'min:1', 'exists:genres,id'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O nome da banda é obrigatório.',
            'name.string' => 'O nome da banda deve ser uma string.',
            'name.max' => 'O nome da banda deve ter no máximo 100 caracteres.',
            'country_id.required' => 'O país da banda é obrigatório.',
            'country_id.exists' => 'O país da banda deve existir na tabela de países.',
            'genres_ids.required' => 'Os gêneros da banda são obrigatórios.',
            'genres_ids.array' => 'Os gêneros da banda devem ser um array.',
            'genres_ids.min' => 'A banda deve ter pelo menos um gênero.',
            'genres_ids.exists' => 'Os gêneros da banda devem existir na tabela de gêneros.',
        ];
    }
}
