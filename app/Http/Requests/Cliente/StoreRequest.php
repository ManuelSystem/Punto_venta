<?php

namespace App\Http\Requests\Cliente;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name'=>'string|required|max:250',
            'address'=>'string|nullable|max:250',
            'phone'=>'string|nullable|unique:clientes|min:7|max:10', 
            'email'=>'string|nullable|unique:clientes|max:250|email:rfc,dns',
        ];
    }
    //funcion para que devuelva los mensajes 
    public function messages()
    {
        return [
            
            'nombre.string'=>'El valor no es correcto',
            'nombre.required'=>'Este campo es requerido',
            'nombre.max'=>'Solo se permite 250 carácteres',

            'address.string'=>'El valor no es correcto',
            'address.max'=>'Solo se permite 250 carácteres',

            'phone.string'=>'El valor no es correcto',
            'phone.unique'=>'El teléfono ya está registrado',
            'phone.min'=>'Ingrese mínimo 7 carácteres',
            'phone.max'=>'Solo se permite 10 carácteres',

            'email.string'=>'El valor no es correcto',
            'email.unique'=>'La dirección de correo electrónico ya está registrada',
            'email.max'=>'Solo se permite 250 carácteres',
            'email.email'=>'No es un correo electrónico',
        ];
    }
}
