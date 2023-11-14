<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            
            'title' => 'required|min:3|max:50',
            'project_link' => 'nullable|min:2',
            'technologies' => 'nullable|exists:technologies,id',
            'description' => 'nullable',
            'type_id' => 'nullable|exists:types,id',
            'online_link' => 'nullable'
        ];
    }
}
