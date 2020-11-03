<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoachRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'game_id' => 'required|bail|int|exists:games,id',
            'first_name' => 'required|bail|string|unique:coaches,first_name',
            'last_name' => 'required|bail|string|unique:coaches,last_name',
            'language' => 'required|bail|string',
            'country' => 'required|bail|string',
            'in_game_name' => 'required|bail|string',
        ];
    }
}
