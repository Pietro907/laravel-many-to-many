<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|unique|max 50|min 3',
/*             'description' => 'require|max 100|min 10',
            'authors' => 'nullable|unique|max 50|min 3',
            'link' => 'require|unique|max 255',
            'git_hub' => 'require|unique|max 255',
            'type_id' => 'nullable',
            'tech' => 'nullable', */
        ];
    }
}
