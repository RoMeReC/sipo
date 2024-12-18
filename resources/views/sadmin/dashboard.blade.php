@extends('layouts.main')

@section('title', 'Página Principal')

@section('content_header')
    <h1>Página Principal</h1>
@stop

@section('content')
<p>Bienvenido a la Biblioteca Virtual del <b>Quinto Distrito Naval "SANTA CRUZ"</b>.</p>
<img src="{{asset('images/Biblioteca.jpg')}}" alt="" width="100%">
@stop


@section('footer')
<footer style="text-align: right">Biblioteca Virtual del <b>Quinto Distrito Naval "SANTA CRUZ"</b> - @RoMeReC-2024</footer>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css"> 
@stop

@section('js')
    {{-- <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script> --}}
@stop