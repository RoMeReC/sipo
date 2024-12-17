@extends('layouts.main')

@section('title', 'Listar Usuarios')

@section('content_header')
    <h1>Lista de Usuarios</h1>
         
@stop

@section('content')
    <div class="card">
        {{-- <a href="{{ route('sadmin.users.create') }}" class="btn btn-primary">Nuevo Usuario</a> --}}
        <div class="container">
            <a href="" class="btn btn-primary">Nuevo Usuario</a>
        </div>

        <table id="lista-usuarios" class="hover" style="width:100%">
            <thead>
                <tr>
                    <th>Nro</th>
                    <th>Grado</th>
                    <th>Especialidad</th>
                    <th>Apellidos</th>
                    <th>Nombres</th>
                    <th>Usuario</th>
                    <th>Rol</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php $n = 1;?>
                @foreach ($info as $inf)
                    <tr>
                        <td>{{ $n }}</td>
                        <td>{{ $inf['grado'] }}</td>
                        <td>{{ $inf['especialidad'] }}</td>
                        <td>{{ $inf['apellidos'] }}</td>
                        <td>{{ $inf['nombres'] }}</td>
                        <td>{{ $inf['username'] }}</td>
                        <td>{{ $inf['rol'] }}</td>
                        <td>
                            <a href="" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-dark"><i class="fa fa-lock"></i></a>
                            <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            <a href="" class="btn btn-info"><i class="fa fa-unlock"></i></a>
                        </td>
                    </tr>
                    <?php $n = $n+1;?>
                @endforeach
                
            </tbody>
        </table>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css"> 
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

    <script>
        $(document).ready(function(){
            $('#lista-usuarios').DataTable({
                "language":{
                    "search": "Buscar",
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "paginate": {
                        "previus": "Anterior",
                        "next": "Siguiente",
                        "first": "Primero",
                        "last": "Último",
                    }
                },
                "sScrollX": '100%',
            });
        });
    </script>
@stop