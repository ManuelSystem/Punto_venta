<?php

namespace App\Http\Controllers;

use App\Compra;
use App\Producto;
use App\Proveedor;
use Illuminate\Http\Request;
use App\Http\Requests\Compra\StoreRequest;
use App\Http\Requests\Compra\UpdateRequest;

class CompraController extends Controller
{
    public function index()
    {
        $compras = Compra::get();

        return \view("admin.compra.index")->with('compras',$compras);
    }

    
    public function create()
    {
        $proveedores = Proveedor::get();
        $productos = Producto::get();
        return \view("admin.compra.create", \compact('proveedores', 'productos'));
    }

 
    public function store(StoreRequest $request)
    {
        $compra = Compra::create($request->all());
        //con este foreach lo que se hace es que cada vez que haya una compra el producto se registra en ese array
        foreach ($request->producto_id as $key => $producto) {
            $results[] = array("producto_id"=>$request->producto_id[$key],
            "cantidad"=>$request->cantidad[$key], "precio"=>$request->precio[$key]);
        }
        $compra->detalleCompra()->createMany($results);

        return \redirect()->route('compras.index');
    }

  
    public function show(Compra $compra)
    {
        return \view("admin.compra.show", \compact('compra'));
    }

   
    public function edit(Compra $compra)
    {
        $proveedores = Proveedor::get();
        return \view("admin.compra.show", \compact('compra'));
    }

   
    public function update(UpdateRequest $request, Compra $compra)
    {
        /* $compra->update($request->all());

        return \redirect()->route('compras.index'); */
    }

    
    public function destroy(Compra $compra)
    {
       /*  $compra->delete();

        return \redirect()->route('compras.index'); */
    }
}
