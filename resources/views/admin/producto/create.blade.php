@extends('layouts.admin')
@section('title','Registrar Producto')

@section('styles')
@endsection

@section('options')
@endsection

@section('preference')
@endsection

@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Registro de Productos
        </h3>
        <!--links de navegación-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('productos.index') }}">Productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro de Producto</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registro de Producto</h4>
                    </div>

                    <!--formulario de registro de categoría-->
                    {!! Form::open(['route'=>'productos.store', 'method'=>'POST', 'files'=>true]) !!}
                 
                    <div class="form-row">
                     <!--campo para nombre-->
                        <div class="form-group col-md-6">
                           <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="name" class="form-control" placeholder="Nombre" required>
                        </div>

                         <!--campo para precio de venta-->
                        <div class="form-group col-md-6">
                            <label for="precio_venta">Precio de Venta</label>
                            <input type="number" name="precio_venta" id="precio_venta" class="form-control" placeholder="000000" required>
                        </div>
                       
                      
                    </div>
                    <div class="form-row">
                     <!--selector para categoria-->
                        <div class="form-group col-md-6">
                           <label for="categoria_id">Categoría</label>
                            <select class="form-control" id="categoria_id" name="categoria_id">
                            <option disabled>Seleccione</option>
                                @foreach ($categorias as $categoria)
                                    <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                         <!--selector para proveedor-->
                        <div class="form-group col-md-6">
                           <label for="proveedor_id">Proveedor</label>
                            <select class="form-control" id="proveedor_id" name="proveedor_id">
                            <option disabled>Seleccione</option>
                                @foreach ($proveedores as $proveedor)
                                    <option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!--selector de foto -->
                    <div class="card-body">
                        <h4 class="card-title d-flex">Imagen de producto
                          <small class="ml-auto align-self-end">
                            <a href="dropify.html" class="font-weight-light" target="_blank">Seleccionar Archivo</a>
                          </small>
                        </h4>
                        <input type="file"  id="foto" name="foto" class="dropify" />
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Registrar</button>
                    <a href="{{route('productos.index')}}" class="btn btn-light mr-2">Cancelar</a>

                    {!! Form::close() !!}
                    <!--cierre del formulario-->
                </div>
                {{--  <div class="card-footer text-muted">
                    {{$proveedores->render()}}
                </div>  --}}
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
{!! Html::script('melody/js/dropify.js') !!}
@endsection
