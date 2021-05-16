<?php

namespace App\Http\Controllers;

use App\Venta;
use Illuminate\Http\Request;
use App\Http\Requests\Venta\StoreRequest;
use App\Http\Requests\Venta\UpdateRequest;

class VentaController extends Controller
{
    public function index()
    {
        $ventas = Venta::get();

        return \view("admin.venta.index")->with('ventas',$ventas);
    }

    
    public function create()
    {
        $clientes = Cliente::get();
        return \view("admin.venta.create", \compact('clientes'));
    }

 
    public function store(StoreRequest $request)
    {
        $venta = Venta::create($request->all());
        //con este foreach lo que se hace es que cada vez que haya una venta el producto se registra en ese array
        foreach ($request->producto_id as $key => $producto) {
            $results[] = array("producto_id"=>$request->producto_id[$key],
            "cantidad"=>$request->cantidad[$key], "precio"=>$request->precio[$key], 
            "descuento"=>$request->descuento[$key]);
        }
        $venta->detalleVenta()->createMany($results);

        return \redirect()->route('ventas.index');
    }

  
    public function show(Venta $venta)
    {
        return \view("admin.venta.show", \compact('venta'));
    }

   
    public function edit(Venta $venta)
    {
        $clientes = Cliente::get();
        return \view("admin.venta.show", \compact('venta'));
    }

   
    public function update(UpdateRequest $request, Venta $venta)
    {
        /* $venta->update($request->all());

        return \redirect()->route('ventas.index'); */
    }

    
    public function destroy(Venta $venta)
    {
       /*  $venta->delete();

        return \redirect()->route('ventas.index'); */
    }
}
