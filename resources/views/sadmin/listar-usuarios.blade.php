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
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <ul class="alert alert-danger">{{ $error }}</ul>
        @endforeach
    @endif
    <div class="card">
        {{-- <a href="{{ route('sadmin.users.create') }}" class="btn btn-primary">Nuevo Usuario</a> --}}
        <div class="container">
            <button class="btn btn-primary" title="Agregar Persona" data-toggle="modal" data-target="#nueva-persona"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Agregar Persona</button>
        </div>
        

        <table id="lista-usuarios" class="hover" style="width:100%">
            <thead>
                <tr>
                    <th>Nro</th>
                    <th>Grado</th>
                    <th>Apellidos</th>
                    <th>Nombres</th>
                    <th>UUDD</th>
                    <th>Usuario</th>
                    <th>Rol</th>
                    <th>Estado</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php $n = 1;?>
                @foreach ($info as $inf)
                    <tr>
                        <td>{{ $n }}</td>
                        <td>{{ $inf['grado'] }}</td>
                        <td>{{ $inf['apellidos'] }}</td>
                        <td>{{ $inf['nombres'] }}</td>
                        <td>{{ $inf['uudd'] }}</td>
                        <td>{{ $inf['username'] }}</td>
                        <td>{{ $inf['rol'] }}</td>
                        <td>
                            @if($inf['activo'])
                                <span class="badge bg-primary">Activo</span>
                            @else
                                <span class="badge bg-danger">Inactivo</span>
                            @endif
                        </td>
                        <td>
                            @if($inf['activo'])
                                <a href="#" class="btn btn-success" title="Agregar un nuevo usuario"><i class="fa fa-user-plus"></i></a>
                                <a href="#" class="btn btn-warning" title="Editar"><i class="fa fa-edit"></i></a>
                                <a href="{{ route('sadmin.desactivar', $inf['id']) }}" class="btn btn-danger" title="Desactivar"><i class="fa fa-lock"></i></a>
                            @else
                                <a href="{{ route('sadmin.activar', $inf['id']) }}" class="btn btn-info" title="Activar"><i class="fa fa-unlock"></i></a>
                            @endif
                        </td>
                    </tr>
                    <?php $n = $n+1;?>
                @endforeach
                
            </tbody>
        </table>
    </div>
    @include('sadmin.modal-nueva-persona')
    <!-- Abre la ventana modal, si hay errores -->
    @if(session('danger') || $errors->any())
    <script>
        $(document).ready(function() {
            $('#nueva-persona').modal('show');
        });
    </script>
@endif
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="/css/admin_custom.css"> 
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
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
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE JS -->
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.7.1.js"></script> --}}
    
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="/scripts/cambiar-idioma-datatable.js"></script>
    <script src="/scripts/seleccionar-municipio.js"></script>
    <script src="/scripts/seleccionar-uudd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.es.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#datepicker').datepicker({
                format: 'dd-mm-yyyy', // Formato de la fecha
                autoclose: true,
                todayHighlight: true,
                orientation: 'bottom auto',
                language: 'es', // Establece el idioma a español
            });
        });
    </script>
@stop


