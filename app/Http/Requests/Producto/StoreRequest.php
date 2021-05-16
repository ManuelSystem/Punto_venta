<?php

namespace App\Http\Requests\Producto;

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
            'nombre'=>'string|required|unique:productos|max:250',
            //'imagen'=>'required|dimensions:min_width=100,min_height=200',
            'precio_venta'=>'required',
            //'categoria_id'=>'integer|required|exists:App\Categoria,id',
            //'proveedor_id'=>'integer|required|exists:App\Proveedor,id',
        ];
    }
    //funcion para que devuelva los mensajes 
    public function messages()
    {
        return [
            
            'nombre.string'=>'El valor no es correcto',
            'nombre.required'=>'Este campo es requerido',
            'nombre.unique'=>'El producto ya está registrado',
            'nombre.max'=>'Solo se permite 250 carácteres',

            /* 'imagen.required'=>'Este campo es requerido',
            'imagen.dimensions'=>'Solo se permiten imagenes de 100x200 px', */

            'precio_venta'=>'Este campo es requerido',

           /*  'categoria_id.integer'=>'El valor tiene que ser entero',
            'categoria_id.required'=>'Este campo es requerido',
            'categoria_id.exists'=>'La categoría no existe',

            'proveedor_id.integer'=>'El valor tiene que ser entero',
            'proveedor_id.required'=>'Este campo es requerido',
            'proveedor_id.exists'=>'El proveedor no existe', */
        ];
    }
}
