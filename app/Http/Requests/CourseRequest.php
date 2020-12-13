<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|bail|string|unique:courses,title',
            'description' => 'required|bail|string',
            'coach_profile_id' => 'required|int|exists:coach_profiles,id',
            'thumbnail_url' => 'required|bail|string',
        ];
    }
}
