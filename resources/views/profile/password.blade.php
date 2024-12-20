@extends('layouts.main')

@section('title', 'Perfil de Usuario')

@section('content_header')
    <h1>Cambiar Contraseña de Usuario</h1>
@stop

@section('content')
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @elseif(session('info'))
        <div class="alert alert-info">{{ session('info') }}</div>
    @endif
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <ul class="alert alert-danger">{{ $error }}</ul>
        @endforeach
    @endif

    @if (session('repeatPassword'))
        <div class="alert alert-danger" role="alert">
            {{session('repeatPassword')}}
        </div>
    @endif
    <br>
    <br>
    <form action="{{route('perfil.update_password')}}" method="post" class="needs-validation">
    @csrf
        <div class="container">
            <div class="row">
                <x-adminlte-input name="password_actual" type="password" label="CONTRASEÑA ACTUAL" placeholder="Escriba aquí su contraseña actual" label-class="text-olive" class="form-control {{ $errors->has('password_actual') ? 'is-invalid' : '' }}" fgroup-class="col-md-4" disable-feedback required>
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-key text-olive"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
                <x-adminlte-input id="password" name="password" type="password" label="NUEVA CONTRASEÑA" placeholder="Escriba aquí la nueva contraseña" label-class="text-olive" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" fgroup-class="col-md-4" disable-feedback required>
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-key text-olive"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
                <x-adminlte-input name="password_confirmation" type="password" label="CONFIRME CONTRASEÑA" placeholder="Vuelva a escribir la nueva contraseña" label-class="text-olive" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" fgroup-class="col-md-4" required>
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
    <style>
        .has-error input {
            border: 2px solid red;
        }
    
        .text-danger {
            color: red;
        }
    </style>

@stop

@section('js')


@stop