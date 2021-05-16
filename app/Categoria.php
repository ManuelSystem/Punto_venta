<?php

namespace App;

use App\Producto;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nombre', 'descripcion',
    ];

    //hacer la relación... una categoria tiene muchos producto
    public function productos()
    {
        return $this->hasMany(Producto::class);
        
    }
}
