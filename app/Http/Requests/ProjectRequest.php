<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:100'
            ],
            'description' => 'required|string|max:1000',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => __('El campo nombre es obligatorio.'),
            'name.string' => __('El campo nombre debe ser una cadena de texto.'),
            'name.max' => __('El campo nombre no debe ser mayor a :max caracteres.'),
            'name.unique' => __('El campo nombre ya está en uso.'),
            'description.required' => __('El campo descripción es obligatorio.'),
            'description.string' => __('El campo descripción debe ser una cadena de texto.'),
            'description.max' => __('El campo descripción no debe ser mayor a :max caracteres.'),
        ];
    }
}
