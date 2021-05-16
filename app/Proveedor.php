<?php

namespace App;

use App\Producto;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $fillable = [
        'nombre', 'telefono', 'direccion', 'email',
    ];
     //hacer la relación a producto
     public function productos()
     {
         return $this->hasMany(Producto::class);
         
     }
}
