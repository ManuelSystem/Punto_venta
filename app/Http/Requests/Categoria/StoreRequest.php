<?php

namespace App\Http\Requests\Categoria;

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
            'nombre'=>'required|string|max:50',
            'descripcion'=>'nullable|string|max:250',
        ];
    }
    //funcion para que devuelva los mensajes 
    public function messages()
    {
        return [
            'nombre.required'=>'Este campo es requerido',
            'nombre.string'=>'El valor no es correcto',
            'nombre.max'=>'Solo se permite 50 carácteres',
            
            'descripcion.string'=>'El valor no es correcto',
            'descripcion.max'=>'Solo se permite 250 carácteres',
        ];
    }
}
