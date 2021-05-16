@extends('layouts.admin')
@section('title','Editar Categoría')

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
           Editar Categoría
        </h3>
        <!--links de navegación-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item"><a href="{{ route('categorias.index') }}">Categorías</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar Categoría</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title">Editar Categoría</h4>
                    </div>
                    <!--formulario de actualizar registro de categoría con la respectiva ruta-->
                    {!! Form::model($categoria, ['route'=>['categorias.update',$categoria], 'method'=>'PUT']) !!}
                    
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="name" class="form-control" 
                        value="{{$categoria->nombre}}" placeholder="Nombre" required>
                      </div>
                      <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" name="descripcion" 
                        id="descripcion" rows="3">{{$categoria->descripcion}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Actualizar</button>
                    <a href="{{route('categorias.index')}}" class="btn btn-light mr-2">Cancelar</a>

                    {!! Form::close() !!}
                    <!--cierre del formulario-->
                </div>
                {{--  <div class="card-footer text-muted">
                    {{$categorias->render()}}
                </div>  --}}
            </div>
        </div>
    </div>
</div>
@endsection
