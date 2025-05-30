{{--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@extends('adminlte::page')

@section('footer')
<footer style="text-align: right">Biblioteca Virtual del <b>Quinto Distrito Naval "SANTA CRUZ"</b> - @RoMeReC-2024</footer>
@stop
--}}


@extends('adminlte::page')

@section('title', 'Página Principal')

{{-- Estilos personalizados --}}
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        /* Asegura que el contenido principal se extienda verticalmente */
        .content-wrapper {
            min-height: calc(100vh - 4rem); /* Ajusta según tu header/footer */
        }
    </style>
@stop

{{-- Scripts personalizados --}}
@section('js')
    {{-- Puedes agregar scripts aquí si los necesitas --}}
@stop

{{-- Footer personalizado --}}
@section('footer')
    <footer style="text-align: right; padding: 1rem;">
        Biblioteca Virtual del <b>Quinto Distrito Naval "SANTA CRUZ"</b> - @RoMeReC-2025
    </footer>
@stop
