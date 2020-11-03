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
            'title' => 'required|bail|string',
            'description' => 'required|bail|string',
            'duration' => 'required|bail|numeric',
            'course_id' => 'required|int|exists:courses,id',
        ];
    }
}
