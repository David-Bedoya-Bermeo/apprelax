<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonaFormRequest extends FormRequest
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
            'nombre' => 'required',
            'a_paterno' => 'required',
            'a_materno' => 'required', 
            'fecha_Nacimiento' => 'required',
            'edad' => 'required', 
            'tipo_Documento' => 'required',
            'num_Documento' => 'required',
            'direccion' => 'required', 
            'telefono' => 'required',
            'email' => 'required', 
        ];
    }
    public function messages()
{
return [
    'nombre.required' => 'El nombre debe ser un campo requerido',
    'a_paterno.required' => 'El Primer apellido es un campo requerido',
    'a_materno.required' => 'El Segundo apellido es un campo requerido',
    'fecha_Nacimiento.required' => 'La fecha de nacimiento es un campo requerido',
    'edad' => 'La edad debe ser un campo requerido',
    'tipo_Documento.required' => 'El Tipo de documento es un campo requerido',
    'num_Documento' => 'El Numero de documento debe ser un campo requerido',
    'direccion.required' => 'La direccion es un campo requerido',
    'telefono' => 'El telefono debe ser un campo requerido',
    'email.required' => 'El email es un campo requerido',
    
//'email.email' => 'El correo debe tener un formato correcto',
];
}
}
