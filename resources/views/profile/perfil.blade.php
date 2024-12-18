@extends('layouts.main')

@section('title', 'Perfil de Usuario')

@section('content_header')
    <h1>Perfil de Usuario</h1>
@stop

@section('content')
<form action="{{route('perfil.update')}}" method="post" class="needs-validation" enctype="multipart/form-data">
@csrf
    <div class="container">
        <div class="row">
            <div class="col-4" style="text-align: center">
                <img src="{{$datos['foto']}}">
                <input id="image" type="file" class="filestyle" name="picture" accept="image/jpeg,image/png">
                {{-- <label style="font-weight: bold">Cambiar Imagen</label> --}}
                <ul>
                    @foreach ($errors->all() as $mensaje)
                        <li>
                            {{$mensaje}}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <x-adminlte-input name="grado" label="GRADO:" value="{{ $datos['grado'] }}" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback readonly>
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-ship text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
            <x-adminlte-input name="especialidad" label="ESPECIALIDAD:" value="{{ $datos['especialidad'] }}" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback readonly>
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-cubes text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <x-adminlte-input name="nombres" label="NOMBRES:" value="{{ $datos['nombres'] }}" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback readonly>
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-user text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
            <x-adminlte-input name="apellidos" label="APELLIDOS:" value="{{ $datos['primer_apellido'].' '.$datos['segundo_apellido'] }}" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback readonly>
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-users text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <x-adminlte-input name="carnet_identidad" label="CARNET DE IDENTIDAD:" value="{{ $datos['carnet_identidad'] }}" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback readonly>
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-address-card text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
            <x-adminlte-input name="condicion" label="ESTADO CIVIL:" value="{{ $datos['condicion'] }}" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback readonly>
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-check text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <x-adminlte-input name="lugar_nacimiento" label="LUGAR DE NACIMIENTO:" value="{{ $datos['lugar_nacimiento'] }}" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback readonly>
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-map-marked-alt text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
            <x-adminlte-input name="fecha_nacimiento" label="FECHA DE NACIMIENTO:" value="{{ $datos['fecha_nacimiento'] }}" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback readonly>
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-calendar text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <x-adminlte-input name="telefono" label="TELÉFONO:" value="{{ $datos['telefono'] }}" label-class="text-olive" fgroup-class="col-md-6" disable-feedback>
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-phone text-olive"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
            <x-adminlte-input name="genero" label="GENERO:" value="{{ $datos['genero'] }}" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback readonly>
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-male text-lightblue"></i><i class="fas fa-female text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <x-adminlte-input name="name" label="NOMBRE DE USUARIO" value="{{ $datos['name'] }}" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback readonly>
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-user text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
            <x-adminlte-input name="email" label="CORREO ELECTRÓNICO" value="{{ $datos['email'] }}" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback readonly>
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-envelope text-lightblue"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <x-adminlte-input name="new-password" label="NUEVA CONTRASEÑA" placeholder="Escriba aquí su nueva contraseña" label-class="text-olive" fgroup-class="col-md-6" disable-feedback>
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-key text-olive"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
            <x-adminlte-input name="rnew-password" label="REPITA LA CONTRASEÑA" placeholder="Escriba aquí la misma contraseña" label-class="text-olive" fgroup-class="col-md-6" disable-feedback>
                <x-slot name="prependSlot">
                    <div class="input-group-text">
                        <i class="fas fa-key text-olive"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
        </div>
    </div>
    <div class="container" style="text-align: center">
        <button type="submit" class="btn btn-success btn-lg"><i class="fa fa-save"></i> Guardar</button>
    </div>
</form>

@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css"> 
@stop

@section('js')
    {{-- <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script> --}}
@stop