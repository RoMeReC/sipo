@extends('layouts.main')

@section('title', 'Perfil de Usuario')

@section('content_header')
    <h1>Perfil de Usuario</h1>
@stop

@section('content')

{{-- <div class="section-body">
    <div class="row mt-sm-4">
        <div class="col-12 col-md-12 col-lg-7">
            <div class="card">
                <form method="post" class="needs-validation" novalidate="">
                    <div class="card-header">
                        <h4>Datos del Usuario</h4>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}
{{-- Minimal --}}
{{-- <x-adminlte-input name="iBasic"/> --}}

{{-- Email type --}}
{{-- <x-adminlte-input name="iMail" type="email" placeholder="mail@example.com"/> --}}

{{-- With label, invalid feedback disabled, and form group class --}}
<div class="container">
    <div class="row">
        <div class="col-4" style="text-align: center">
            @if($datos['genero'] === 'Masculino')
                <img src="{{asset('images/avatar/avatar-hombre.png')}}">
            @else
                <img src="{{asset('images/avatar/avatar-mujer.png')}}">
            @endif
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
        <x-adminlte-input name="lgrado" label="GRADO:" placeholder="{{ $datos['grado'] }}" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback readonly>
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-ship text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>
        <x-adminlte-input name="lespecialidad" label="ESPECIALIDAD:" placeholder="{{ $datos['especialidad'] }}" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback readonly>
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
        <x-adminlte-input name="lnombres" label="NOMBRES:" placeholder="{{ $datos['nombres'] }}" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback readonly>
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-user text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>
        <x-adminlte-input name="lapellidos" label="APELLIDOS:" placeholder="{{ $datos['primer_apellido'].' '.$datos['segundo_apellido'] }}" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback readonly>
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
        <x-adminlte-input name="lcarnet_identidad" label="CARNET DE IDENTIDAD:" placeholder="{{ $datos['carnet_identidad'] }}" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback readonly>
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-address-card text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>
        <x-adminlte-input name="lcondicion" label="ESTADO CIVIL:" placeholder="{{ $datos['condicion'] }}" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback readonly>
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-gg-circle text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>
    </div>
</div>
<div class="container">
    <div class="row">
        <x-adminlte-input name="llugar_nacimiento" label="LUGAR DE NACIMIENTO:" placeholder="{{ $datos['lugar_nacimiento'] }}" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback readonly>
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-map-marked-alt text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>
        <x-adminlte-input name="lfecha_nacimiento" label="FECHA DE NACIMIENTO:" placeholder="{{ $datos['fecha_nacimiento'] }}" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback readonly>
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
        <x-adminlte-input name="ltelefono" label="TELÉFONO:" placeholder="{{ $datos['telefono'] }}" label-class="text-olive" fgroup-class="col-md-6" disable-feedback>
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-phone text-olive"></i>
                </div>
            </x-slot>
        </x-adminlte-input>
        <x-adminlte-input name="lgenero" label="GENERO:" placeholder="{{ $datos['genero'] }}" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback readonly>
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
        <x-adminlte-input name="lname" label="NOMBRE DE USUARIO" placeholder="{{ $datos['name'] }}" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback readonly>
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-user text-lightblue"></i>
                </div>
            </x-slot>
        </x-adminlte-input>
        <x-adminlte-input name="lemail" label="CORREO ELECTRÓNICO" placeholder="{{ $datos['email'] }}" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback readonly>
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
        <x-adminlte-input name="lpassword" label="NUEVA CONTRASEÑA" placeholder="Escriba aquí su nueva contraseña" label-class="text-olive" fgroup-class="col-md-6" disable-feedback>
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-key text-olive"></i>
                </div>
            </x-slot>
        </x-adminlte-input>
        <x-adminlte-input name="lrpassword" label="REPITA LA CONTRASEÑA" placeholder="Escriba aquí la misma contraseña" label-class="text-olive" fgroup-class="col-md-6" disable-feedback>
            <x-slot name="prependSlot">
                <div class="input-group-text">
                    <i class="fas fa-key text-olive"></i>
                </div>
            </x-slot>
        </x-adminlte-input>
    </div>
</div>
<div class="container" style="text-align: center">

            <button type="button" class="btn btn-success btn-lg"><i class="fa fa-save"></i> Guardar</button>

</div>


@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css"> 
@stop

@section('js')
    {{-- <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script> --}}
@stop