<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'name' => 'required|max:255',
            'description' => 'required',
            // 'image' => 'required',
            // 'technology' => 'required',
            'repo_links' => 'required',
            'type-id' => 'nullable|exists:types,id',
        ];
    }

    public function messages(): array {
        return [
            'max' => 'Il campo :attribute deve avere massimo :max caratteri',
            'required' => 'Il campo :attribute non è stato inserito',
            'exists' => 'Eh voleeeeviiii',
        ];
    }
}
