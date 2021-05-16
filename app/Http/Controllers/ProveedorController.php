<?php

namespace App\Http\Controllers;

use App\Proveedor;
use Illuminate\Http\Request;
use App\Http\Requests\Proveedor\StoreRequest;
use App\Http\Requests\Categoria\UpdateRequest;

class ProveedorController extends Controller
{
    public function index()
    {
        $proveedors = Proveedor::get();

        return \view("admin.proveedor.index")->with('proveedors',$proveedors);
    }

    
    public function create()
    {
        return \view("admin.proveedor.create");
    }

    
    public function store(StoreRequest $request)
    {
        Proveedor::create($request->all());

        return redirect()->route('proveedors.index');
    }

    
    public function show(Proveedor $proveedor)
    {
        return \view("admin.proveedor.show", \compact('proveedor'));
    }

    
    public function edit(Proveedor $proveedor)
    {
        return \view("admin.proveedor.edit", \compact('proveedor'));
    }

   
    public function update(UpdateRequest $request, Proveedor $proveedor)
    {
        $proveedor->update($request->all());

        return \redirect()->route('proveedors.index');
    }

    
    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();

        return \redirect()->route('proveedors.index');
    }
}
