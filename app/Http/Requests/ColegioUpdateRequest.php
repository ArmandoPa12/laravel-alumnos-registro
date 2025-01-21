<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ColegioUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'campo' => 'string|max:255|nullable',
        ];
    }

    public function messages()
    {
        // Mensajes personalizados para las validaciones.
        return [    
            'nombre.required' => 'El nombre es obligatorio.',
            'nombre.unique' => 'El colegio ya existe',
            'direccion.required' => 'La dirección es obligatoria.',
            'gestion.required' => 'El nombre de la gestion es obligatoria.',
        ];
    }
}
