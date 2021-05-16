@extends('layouts.admin')
@section('title','Editar Proveedor')

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
           Editar Proveedor
        </h3>
        <!--links de navegación-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('proveedors.index') }}">Proveedores</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar Proveedor</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Edición de Proveedor</h4>
                    </div>
                   <!--formulario de editar de proveedor-->
                   {!! Form::model($proveedor, ['route'=>['proveedors.update',$proveedor], 'method'=>'PUT']) !!}
                   
                   <!--campo para nombre-->
                   <div class="form-group">
                       <label for="nombre">Nombre</label>
                       <input type="text" name="nombre" id="name" class="form-control" 
                       value="{{$proveedor->nombre}}" placeholder="Nombre" required>
                   </div>
                   <!--campo para telefono-->
                   <div class="form-group">
                       <label for="telefono">Número de Teléfono</label>
                       <input type="number" name="telefono" id="telefono" class="form-control" 
                       value="{{$proveedor->telefono}}" placeholder="Telefono" required>
                   </div>
                   <!--campo para direccion-->
                   <div class="form-group">
                       <label for="direccion">Dirección</label>
                       <input type="text" name="direccion" id="direccion" class="form-control" 
                       value="{{$proveedor->direccion}}" placeholder="Direccion">
                   </div>
                   <!--campo para email-->
                   <div class="form-group">
                       <label for="email">Correo Electrónico</label>
                       <input type="email" name="email" id="email" class="form-control" 
                       value="{{$proveedor->email}}" placeholder="ejemplo@mail.com" required>
                   </div>

                   <button type="submit" class="btn btn-primary mr-2">Actualizar</button>
                   <a href="{{route('proveedors.index')}}" class="btn btn-light mr-2">Cancelar</a>

                   {!! Form::close() !!}
                   <!--cierre del formulario-->
                </div>
                {{--  <div class="card-footer text-muted">
                    {{$proveedors->render()}}
                </div>  --}}
            </div>
        </div>
    </div>
</div>
@endsection
