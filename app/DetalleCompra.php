<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    protected $fillable = [
        'compra_id', 'producto_id', 'cantidad', 'precio',
    ];

    //hacer la relación de un detalle compra a un compra
    public function compra()
    {
        return $this->belongsTo(Compra::class);
        
    }

    //hacer la relación de un detalle compra a un producto
    public function producto()
    {
        return $this->belongsTo(Producto::class);
        
    }
}
