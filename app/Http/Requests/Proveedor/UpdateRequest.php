<?php

namespace App\Http\Requests\Proveedor;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'=>'required|string|max:50',
            'telefono'=>'required|string|max:10|min:7',
            'direccion'=>'nullable|string|max:250',
            'email'=>'required|email|string|unique:proveedors,email' . 
            $this->route('proveedor')->id.'|max:200',
            //con esto podrá hacer una exepción al actualizar el email el proveedor y no arroje que ya se encuentra ese email
        ];
    }
     //funcion para que devuelva los mensajes 
     public function messages()
     {
         return [
            'nombre.required'=>'Este campo es requerido',
            'nombre.string'=>'El valor no es correcto',
            'nombre.max'=>'Solo se permite 50 carácteres',

            'telefono.required'=>'Este campo es requerido',
            'telefono.string'=>'El valor no es correcto',
            'telefono.max'=>'Solo se permite 10 carácteres',
            'telefono.min'=>'Se requieren 7 carácteres',

            'direccion.string'=>'El valor no es correcto',
            'direccion.max'=>'Solo se permite 50 carácteres',

            'email.required'=>'Este campo es requerido',
            'email.email'=>'No es un correo electónico',
            'email.string'=>'El valor no es correcto',
            'email.max'=>'Solo se permite 200 carácteres',
            'email.unique'=>'Ya se encuentra registrado',
         ];
     }
}
