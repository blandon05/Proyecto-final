<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest//esta vista (archivo) solo carga validaciones.
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
     * 
     * //es obligatorio que estos campos obligatoios estan totalmente diligenciados.
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'Name' => [
                'required',
                'string',
                'max:100',
            ],
            'Price' => 'required',
            'State' => 'required'
        ];
    }

//este mensaje saldra en la vista de crear o editar si no se cumple como lo indica 
    public function messages(): array
    {
        return [
            'Name.required' => __('El campo nombre es obligatorio.'),
            'Name.string' => __('El campo nombre debe ser una cadena de texto.'),
            'Name.max' => __('El campo nombre no debe ser mayor a :max caracteres.'),
            'Price.required' => __('El campo precio es obligatorio.'),
            'State.required' => __('El campo Estado es obligatorio'),
        ];
    }
}
