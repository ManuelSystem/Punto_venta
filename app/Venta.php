<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable = [
        'user_id',
        'cliente_id',
        'fecha_venta',
        'iva',
        'total',
        'estado',
    ];

    //hacer la relación de una compra a un user
    public function user()
    {
        return $this->belongsTo(User::class);
        
    }
    //hacer la relación de una compra a un proveedor
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
        
    }
    //hacer la relación de una compra a muchos detalle Compra
    public function detalleVenta()
    {
        return $this->hasMany(ventaDetalle::class);
        
    }
}
