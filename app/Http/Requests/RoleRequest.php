<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
            'Name_Rol' => [
                'required',
                'string',
                'max:100'
            ],
            'Description' => 'required|string|max:1000',
        ];
    }

    public function messages(): array
    {
        return [
            'Name_Rol.required' => __('El campo nombre es obligatorio.'),
            'Name_Rol.string' => __('El campo nombre debe ser una cadena de texto.'),
            'Name_Rol.max' => __('El campo nombre no debe ser mayor a :max caracteres.'),
            'Name_Rol.unique' => __('El campo nombre ya está en uso.'),
            'Description.required' => __('El campo descripción es obligatorio.'),
            'Description.string' => __('El campo descripción debe ser una cadena de texto.'),
            'Description.max' => __('El campo descripción no debe ser mayor a :max caracteres.'),
        ];
    }
}
