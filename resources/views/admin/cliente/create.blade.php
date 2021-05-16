@extends('layouts.admin')
@section('title','Registrar Cliente')

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
            Registro de Clientes
        </h3>
        <!--links de navegación-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('clientes.index') }}">Clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro de Cliente</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Registro de Cliente</h4>
                    </div>
                    <!--formulario de registro de categoría-->
                    {!! Form::open(['route'=>'clientes.store', 'method'=>'POST']) !!}
                    @include('admin.cliente._form')

                    <button type="submit" class="btn btn-primary mr-2">Registrar</button>
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
