<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Categoria;
use App\Proveedor;
use Illuminate\Http\Request;
use App\Http\Requests\Producto\StoreRequest;
use App\Http\Requests\Producto\UpdateRequest;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::get();

        return \view("admin.producto.index")->with('productos',$productos);
    }

    
    public function create()
    {
        $proveedores = Proveedor::all();
        $categorias = Categoria::all();
        return \view("admin.producto.create", \compact('proveedores', 'categorias'));
    }

    
    public function store(StoreRequest $request)
    {
        # validamos si existe la imagen en el request
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            /* se le asigna nombre a la imagen esto con el tiempo en que se guardo, para que si se sube  una imagen
            con el mismo nombre no se elimine y genere conflictos */
            $image_name =time().'_'.$file->getClientOriginalName();
            #se mueve la imagen a la carpeta /image
            $file->move(public_path("/image"), $image_name);
        } 
        $producto = Producto::create($request->all()+[
            'imagen'=>$image_name,
        ]);
        #para guardar el codigo se actualiza el producto ya registrado
        $producto->update(['codigo'=>$producto->id]);

        
        return \redirect()->route('productos.index');
    }

    
    public function show(Producto $producto)
    {
        return \view("admin.producto.show", \compact('producto'));
    }

    
    public function edit(Producto $producto)
    {
        $proveedores = Proveedor::all();
        $categorias = Categoria::all();
        return \view("admin.producto.edit", \compact('producto', 'proveedores', 'categorias'));
    }

   
    public function update(UpdateRequest $request, Producto $producto)
    {
        # validamos si existe la imagen en el request
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            /* se le asigna nombre a la imagen esto con el tiempo en que se guardo, para que si se sube  una imagen
            con el mismo nombre no se elimine y genere conflictos */
            $image_name =time().'_'.$file->getClientOriginalName();
            #se mueve la imagen a la carpeta /image
            $file->move(public_path("/image"), $image_name);
        } 
        $producto->update($request->all()+[
            'imagen'=>$image_name,
        ]);

        return \redirect()->route('productos.index');
    }

    
    public function destroy(Producto $producto)
    {
        $producto->delete();

        return \redirect()->route('productos.index');
    }
}
