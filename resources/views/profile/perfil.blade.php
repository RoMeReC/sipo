@extends('layouts.main')

@section('title', 'Perfil de Usuario')

@section('content_header')
    <h1>Perfil de Usuario</h1>
@stop

@section('content')

<div class="section-body">
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
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css"> 
@stop

@section('js')
    {{-- <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script> --}}
@stop