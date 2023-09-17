<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
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
    { //'Description','Initial_date','End_date','Price','Service_id','Quantity_people'
        return [
            'Description' => 'required|string|max:1000',
            'Initial_date' => 'required|date',
            'End_date' => 'required|date',
            'Price' => 'required',
            'Service_id' => 'required|int',
            'Quantity_people' => 'required|int'

        ];
    }

    public function messages(): array
    {
        return [
            'Description.required' => __('El campo descripción es obligatorio.'),
            'Initial_date.required' => __('El campo fecha inicial es obligatorio.'),
            'End_date.required' => __('El campo fecha final es obligatorio.'),
            'Price.required' => __('El campo precio es obligatorio.'),
            'Service_id.required' => __('El campo servicio es obligatorio.'),
            'Quantity_people.required' => __('El campo cantidad de personas es obligatorio.'),
        ];
    }
}
