@extends('layouts.main')

@section('title', 'Página Principal')

@section('content_header')
    <h1>Página Principal</h1>
@stop

@section('content')
<p>Bienvenido a la Biblioteca Virtual del <b>Quinto Distrito Naval "SANTA CRUZ"</b>.</p>
<img src="{{asset('images/Biblioteca.jpg')}}" alt="" width="100%">
@stop