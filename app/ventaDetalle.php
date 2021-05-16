<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ventaDetalle extends Model
{
    protected $fillable = [
        'venta_id',
        'producto_id',
        'cantidad',
        'precio',
        'descuento',
    ];
     //hacer la relación de un detalle compra a un producto
     public function producto()
     {
         return $this->belongsTo(Producto::class);
         
     }
}
