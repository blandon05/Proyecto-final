<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PermissionRequest extends FormRequest
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
                'max:100',
            ],
            'module' => 'required'
        ];
    }

//este mensaje saldra en la vista de crear o editar si no se cumple como lo indica 
    public function messages(): array
    {
        return [
            'name.required' => __('El campo nombre es obligatorio.'),
            'name.string' => __('El campo nombre debe ser una cadena de texto.'),
            'name.max' => __('El campo nombre no debe ser mayor a :max caracteres.'),
            'module.required' => __('El campo modulo es obligatorio.'),
        ];
    }
}
