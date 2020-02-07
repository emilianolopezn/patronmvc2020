@extends('layouts.admin')

@section('titulo','Administración | Crear usuario')
@section('titulo2','Usuarios')

@section('breadcrumbs')
@endsection

@section('contenido')
<a class="btn btn-secondary btn-sm"
    style="margin-bottom: 10px;"
    href="{{route('usuarios.index')}}">
    <i class="fas fa-arrow-left"></i>
    Volver a lista de usuarios</a>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            @if(Session::has('exito'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> ¡Éxito!</h5>
                    {{Session::get('exito')}}
                </div>
            @endif
            @if(Session::has('error'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Error!</h5>
                    {{Session::get('error')}}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Crear usuarios</h3>
                </div>
                <div class="card-body">
                    <form method="POST" 
                        action="{{route('usuarios.update',$usuario->id)}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" value="{{$usuario->name}}"
                                name="name" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Correo</label>
                            <input type="text" value="{{$usuario->email}}" readonly
                                name="email" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" 
                                name="password" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Confirmar password</label>
                            <input type="password" 
                               class="form-control"/>
                        </div>
                        <div class="form-group">
                            <button type="submit"
                                class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection

@section('estilos')
@endsection