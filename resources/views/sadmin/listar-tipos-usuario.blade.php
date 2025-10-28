@extends('layouts.main')

@section('title', 'Listar Tipos de Usuario')

@section('content_header')
    <h1>Lista de Tipos de Usuario</h1>
         
@stop

@section('content')
    @if(session('success'))
        <div id="alerta-success" class="alert alert-success alert-dismissible fade show" role="alert">{{ session('success') }}</div>
    @elseif(session('info'))
        <div id="alerta-infor" class="alert alert-info alert-dismissible fade show" role="alert">{{ session('info') }}</div>
    @endif
    {{-- MENSAJE DE ERROR --}}
    @if(session('danger'))
        <div id="alerta-danger" class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><i class="fas fa-exclamation-triangle"></i> Atención:</strong> {{ session('danger') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <ul class="alert alert-danger">{{ $error }}</ul>
        @endforeach
    @endif
    <div class="card">
        {{-- <a href="{{ route('sadmin.users.create') }}" class="btn btn-primary">Nuevo Usuario</a> --}}
        <div class="container">
            <button class="btn btn-primary" title="Nuevo Rol" data-toggle="modal" data-target="#nuevo-rol"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Nuevo Tipo de Usuario</button>
        </div>
        

        <table id="lista-tipos-usuario" class="hover" style="width:100%">
            <thead>
                <tr>
                    <th>Nro</th>
                    <th>Tipo de Usuario</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php $n = 1;?>
                    @foreach ($roles as $rol)
                        <tr>
                            <td>{{ $n }}</td>
                            <td>{{ $rol['rol'] }}</td>
                            <td>{{ $rol['descripcion'] }}</td>
                            <td>
                                @if($rol['activo'])
                                    <span class="badge bg-primary">Activo</span>
                                @else
                                    <span class="badge bg-danger">Inactivo</span>
                                @endif
                            </td>
                            <td>
                                @if($rol['activo'])
                                    <a href="#" class="btn btn-warning btn-editar-rol" 
                                    data-id-rol-editar="{{ $rol['id_rol'] }}"
                                    data-rol-editar="{{ $rol['rol'] }}"
                                    data-descripcion-editar="{{ $rol['descripcion'] }}"
                                    title="Editar Rol"><i class="fa fa-edit"></i></a>
                                    <a href="{{ route('sadmin.desactivar_rol', $rol['id_rol']) }}" class="btn btn-danger" title="Desactivar"><i class="fa fa-lock"></i></a>
                                @else
                                    <a href="{{ route('sadmin.activar_rol', $rol['id_rol']) }}" class="btn btn-info" title="Activar"><i class="fa fa-unlock"></i></a>
                                @endif
                            </td>
                        </tr>    
                    <?php $n = $n+1;?>
                    @endforeach
            </tbody>
        </table>
    </div>
    @include('sadmin.modal-nuevo-rol')
    <!-- Abre la ventana modal, si hay errores -->
    @if(session('danger') || $errors->any())
        <script>
            $(document).ready(function() {
                $('#nuevo-rol').modal('show');
            });
        </script>
    @endif
    @include('sadmin.modal-editar-rol')
@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <!-- Bootstrap 4.6 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
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
    <!-- Bootstrap 4.6 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE JS -->
    {{-- <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.7.1.js"></script> --}}
    
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="/scripts/sadmin/cambiar-idioma-datatable_tu.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.es.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Esperar unos segundos y ocultar la alerta automáticamente
        setTimeout(function() {
            let alerta = document.getElementById('alerta-success');
            if (alerta) {
                alerta.classList.remove('show');
                alerta.classList.add('fade');
                alerta.style.display = 'none';
            }
        }, 5000); // 3 segundos
    </script>
    <script>
        $(document).ready(function() {
            $('#nuevo-rol').modal('hide');
            $(document).on('click', '.btn-editar-rol', function() {
                let rolId = $(this).data('idRolEditar');
                let rolEditar = $(this).data('rolEditar');
                let descripcionEditar = $(this).data('descripcionEditar');

                console.log('Datos:', { rolId, rolEditar, descripcionEditar });
                $('#id_rolEditar').val(rolId); 
                $('#rolEditar').val(rolEditar);
                $('#descripcionEditar').val(descripcionEditar);
                
                $('#editar-rol').modal('show');
            });

            $('#agregar-rol').on('shown.bs.modal', function () {
                $(this).removeAttr('aria-hidden');
            });
        });
    </script>

@stop

