<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LessonRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'description' => 'required|bail|string',
            'title' => 'required|bail|string',
            'video' => 'required|bail|file',
        ];
    }
}
