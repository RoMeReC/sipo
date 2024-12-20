@extends('layouts.main')

@section('title', 'Listar Usuarios')

@section('content_header')
    <h1>Lista de Usuarios</h1>
         
@stop

@section('content')
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @elseif(session('info'))
        <div class="alert alert-info">{{ session('info') }}</div>
    @endif
    <div class="card">
        {{-- <a href="{{ route('sadmin.users.create') }}" class="btn btn-primary">Nuevo Usuario</a> --}}
        <div class="container">
            <button class="btn btn-primary" title="Agregar Usuario" data-toggle="modal" data-target="#nuevo-usuario"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Agregar Usuario</button>
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
    @include('sadmin.modal-nuevo-usuario')
@stop

@section('css')
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="/css/admin_custom.css"> 
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">


@stop

@section('js')
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE JS -->
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
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
    <script>
        $(document).ready(function () {
            // Cargar provincias al seleccionar un departamento
            $('#departamento').on('change', function () {
                let departamentoId = $(this).val();
                $('#provincia').empty().append('<option value="">Seleccione una provincia</option>').prop('disabled', true);
                $('#municipio').empty().append('<option value="">Seleccione un municipio</option>').prop('disabled', true);
    
                if (departamentoId) {
                    $.ajax({
                        url: `/sadmin/provincias/${departamentoId}`,
                        type: 'GET',
                        
                        success: function (data) {
                            console.log(data);
                            
                            $('#provincia').prop('disabled', false);
                            data.forEach(function (provincia) {
                                $('#provincia').append(`<option value="${provincia.id_provincia}">${provincia.provincia}</option>`);
                            });
                        }
                    });
                }
            });
    
            // Cargar municipios al seleccionar una provincia
            $('#provincia').on('change', function () {
                let provinciaId = $(this).val();
                $('#municipio').empty().append('<option value="">Seleccione un municipio</option>').prop('disabled', true);
    
                if (provinciaId) {
                    $.ajax({
                        url: `/sadmin/municipios/${provinciaId}`,
                        type: 'GET',
                        success: function (data) {
                            $('#municipio').prop('disabled', false);
                            data.forEach(function (municipio) {
                                $('#municipio').append(`<option value="${municipio.id_municipio}">${municipio.municipio}</option>`);
                            });
                        }
                    });
                }
            });
        });
    </script>
@stop

