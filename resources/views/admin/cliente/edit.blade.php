@extends('layouts.admin')
@section('title','Editar Cliente')

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
            Edición de Clientes
        </h3>
        <!--links de navegación-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('clientes.index') }}">Clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar Cliente</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Editar Cliente</h4>
                    </div>
                    <!--formulario de actualizar registro de cliente con la respectiva ruta-->
                    {!! Form::model($cliente, ['route'=>['clientes.update',$cliente], 'method'=>'PUT']) !!}
                    
                    {{-- campo nombre de cliente --}}
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control" 
                        value="{{$cliente->name}}" placeholder="Nombre" required>
                    </div>
                    {{-- campo Driección de cliente --}}
                    <div class="form-group">
                        <label for="address">Driección de residencia</label>
                        <input type="text" name="address" id="address" class="form-control" 
                        value="{{$cliente->address}}" placeholder="Ingresa la dirección" aria-describedby="helpId">
                        <small id="helpId" class="form-text text-muted">Este campo es opcional.</small>
                    </div>
                    {{-- campo Teléfono de cliente --}}
                    <div class="form-group">
                        <label for="phone">Teléfono/celular</label>
                        <input type="number" name="phone" id="phone" class="form-control" 
                        value="{{$cliente->phone}}" placeholder="Número de teléfono o celular" aria-describedby="helpId">
                        <small id="helpId" class="form-text text-muted">Este campo es opcional.</small>
                    </div>
                    {{-- campo Correo de cliente --}}
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="text" name="email" id="email" class="form-control" 
                        value="{{$cliente->email}}" placeholder="ejemplo@mail.com" aria-describedby="helpId">
                        <small id="helpId" class="form-text text-muted">Este campo es opcional.</small>
                    </div>
                      

                    <button type="submit" class="btn btn-primary mr-2">Actualizar</button>
                    <a href="{{route('clientes.index')}}" class="btn btn-light mr-2">Cancelar</a>

                    {!! Form::close() !!}
                    <!--cierre del formulario-->
                </div>
                {{--  <div class="card-footer text-muted">
                    {{$clientes->render()}}
                </div>  --}}
            </div>
        </div>
    </div>
</div>
@endsection
