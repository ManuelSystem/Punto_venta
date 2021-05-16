<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $fillable = [
        'user_id', 'proveedor_id', 'fecha_compra', 'total','estado', 'imagen',
    ];

    //hacer la relación de una compra a un user
    public function user()
    {
        return $this->belongsTo(User::class);
        
    }
    //hacer la relación de una compra a un proveedor
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
        
    }
    //hacer la relación de una compra a muchos detalle Compra
    public function detalleCompra()
    {
        return $this->hasMany(DetalleCompra::class);
        
    }
}
