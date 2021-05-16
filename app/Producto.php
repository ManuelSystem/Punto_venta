<?php

namespace App;

use App\Categoria;
use App\Proveedor;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre',
        'codigo', 
        'imagen',
        'stock', 
        'precio_venta', 
        'estado',
        'categoria_id',
        'proveedor_id',
    ];
    
    //hacer la relación a proveedor y producto

    //un producto pertenece a una categoria
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
        
    }

    //un producto pertenece a un proveedor
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);

    }

}
