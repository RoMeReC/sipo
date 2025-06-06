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
            <button class="btn btn-primary" title="Nuevo Usuario" data-toggle="modal" data-target="#nuevo-usuario"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Nuevo Usuario</button>
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
                        <td>{{ $inf['nuudd'] }}</td>
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
                                @if(count($inf['roles_disponibles']) > 0)
                                    <a href="#" class="btn btn-success btn-crear-usuario" 
                                        data-id_persona="{{ $inf['id_persona'] }}" 
                                        data-id="{{ $inf['id'] }}" 
                                        @isset($inf["roles_disponibles"])
                                            data-roles='@json($inf["roles_disponibles"])'
                                        @endisset
                                        title="Agregar un nuevo usuario">
                                        <i class="fa fa-user-plus"></i>
                                    </a>
                                @endif
                                <a href="#" class="btn btn-warning btn-editar-usuario" 
                                data-id_persona="{{ $inf['id_persona'] }}" 
                                data-id="{{ $inf['id'] }}"
                                data-avatar="{{ $inf['avatar'] }}"
                                data-gguu="{{ $inf['gguu'] }}"
                                data-uudd="{{ $inf['uudd'] }}"
                                data-id_grado="{{ $inf['id_grado']}}"    
                                data-id_especialidad="{{ $inf['id_especialidad']}}"
                                data-nombres="{{ $inf['nombres']}}"
                                data-primer_apellido="{{ $inf['primer_apellido']}}"
                                data-segundo_apellido="{{ $inf['segundo_apellido']}}"
                                data-id_genero="{{ $inf['id_genero']}}"
                                data-carnet_identidad="{{ $inf['carnet_identidad']}}"
                                data-id_condicion="{{ $inf['id_condicion']}}"
                                data-celular="{{ $inf['celular']}}"

                                title="Editar"><i class="fa fa-edit"></i></a>
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
    @include('sadmin.modal-nuevo-usuario')
    <!-- Abre la ventana modal, si hay errores -->
    @if(session('danger') || $errors->any())
    <script>
        $(document).ready(function() {
            $('#nuevo-usuario').modal('show');
        });
    </script>
    @endif
    @include('sadmin.modal-agregar-usuario')
    @include('sadmin.modal-editar-usuario')
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
    <script>
        $(document).ready(function() {
            $('#nuevo-usuario').modal('hide');

            $('.btn-crear-usuario').click(function() {
                let usuarioId = $(this).data('id');
                let rolesDisponibles = $(this).data('roles'); // Extrae los roles del botón
                $('#id').val(usuarioId); // Asigna el ID a tu input oculto
                let personaId = $(this).data('id_persona');
                $('#id_persona').val(personaId); // Asigna el ID a tu input oculto
                // Limpia el select antes de llenarlo
                let select = $('#rol_usuario');
                select.empty();
                select.append('<option value="">Seleccione el rol de usuario</option>');

                // Llenar dinámicamente el select con los roles disponibles
                $.each(rolesDisponibles, function(id, nombre) {
                    select.append('<option value="' + id + '">' + nombre + '</option>');
                });

                $('#agregar-usuario').modal('show');
            });
            $('.btn-editar-usuario').click(function() {
                let usuarioId = $(this).data('id');
                let personaId = $(this).data('id_persona');
                let avatar = $(this).data('avatar');
                let gguuId = $(this).data('gguu');
                let uuddId = $(this).data('uudd');
                let gradoId = $(this).data('id_grado');
                let especialidadId = $(this).data('id_especialidad');
                let nombres = $(this).data('nombres')
                let primer_apellido = $(this).data('primer_apellido')
                let segundo_apellido = $(this).data('segundo_apellido')
                let id_genero = $(this).data('id_genero')
                let carnet_identidad = $(this).data('carnet_identidad')
                let id_condicion = $(this).data('id_condicion')
                let celular = $(this).data('celular')
                let municipioId = $(this).data('municipio');
                let provinciaId = $(this).data('provincia');
                let departamentoId = $(this).data('departamento');

                console.log('Datos:', { usuarioId, personaId, gguuId, uuddId, gradoId, especialidadId, nombres, municipioId,provinciaId,departamentoId });
                $('#id').val(usuarioId); 
                $('#id_persona').val(personaId);
                $('#avatar-preview').attr('src', avatar);
                $('#gguu').val(gguuId);
                // Vaciar y deshabilitar el select de UUDD
                $('#uudd').empty().append('<option value="">Cargando unidades...</option>').prop('disabled', true);
                if (gguuId) {
                    // Cargar las UUDD correspondientes a la GGUU seleccionada
                    $.ajax({
                        url: `/sadmin/uudds/${gguuId}`,
                        type: 'GET',
                        success: function (data) {
                            $('#uudd').empty().append('<option value="">Seleccione una Unidad Dependiente</option>');

                            data.forEach(function (uudd) {
                                let selected = uudd.id_uudd == uuddId ? 'selected' : '';
                                $('#uudd').append(`<option value="${uudd.id_uudd}" ${selected}>${uudd.descripcion_uudd}</option>`);
                            });

                            $('#uudd').prop('disabled', false);
                        }
                    });
                }
                $('#id_grado').val(gradoId);
                $('#id_especialidad').val(especialidadId);
                $('#id_nombres').val(nombres);
                $('#id_primer_apellido').val(primer_apellido);
                $('#id_segundo_apellido').val(segundo_apellido);
                $('#id_genero').val(id_genero);
                $('#id_carnet_identidad').val(carnet_identidad);
                $('#id_condicion').val(id_condicion);
                $('#id_celular').val(celular);
                $('#id_departamento').val(departamentoId);
                $('#id_provincia').val(provinciaId);
                $('#id_municipio').val(municipioId);
                // Vaciar y deshabilitar el select de MUNICIPIOS
                $('#id_municipio').empty().append('<option value="">Cargando municipios...</option>').prop('disabled', true);
                if (provinciaId) {
                    // Cargar las MUNICIPIOS correspondientes a la GGUU seleccionada
                    $.ajax({
                        url: `/sadmin/municipios/${provinciaId}`,
                        type: 'GET',
                        success: function (data) {
                            $('#id_municipio').empty().append('<option value="">Seleccione un municipio</option>');

                            data.forEach(function (municipio) {
                                let selected = municipio.id_municipio == municipioId ? 'selected' : '';
                                $('#id_municipio').append(`<option value="${municipio.id_municipio}" ${selected}>${municipio.municipio}</option>`);
                            });

                            $('#id_municipio').prop('disabled', false);
                        }
                    });
                }

                $('#editar-usuario').modal('show');
            });

            $('#agregar-usuario').on('shown.bs.modal', function () {
                $(this).removeAttr('aria-hidden');
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#gguu').on('change', function () {
                let gguuId = $(this).val();
                $('#uudd').empty().append('<option value="">Cargando unidades...</option>').prop('disabled', true);

                if (gguuId) {
                    $.ajax({
                        url: `/sadmin/uudds/${gguuId}`,
                        type: 'GET',
                        success: function (data) {
                            $('#uudd').empty().append('<option value="">Seleccione una Unidad Dependiente</option>');
                            data.forEach(function (uudd) {
                                $('#uudd').append(`<option value="${uudd.id_uudd}">${uudd.descripcion_uudd}</option>`);
                            });
                            $('#uudd').prop('disabled', false);
                        },
                        error: function () {
                            $('#uudd').empty().append('<option value="">Error al cargar</option>').prop('disabled', true);
                        }
                    });
                } else {
                    $('#uudd').empty().append('<option value="">Seleccione una Unidad Dependiente</option>').prop('disabled', true);
                }
            });
        });
    </script>
        <script>
        $(document).ready(function () {
            $('#id_provincia').on('change', function () {
                let privinciaId = $(this).val();
                $('#id_municipio').empty().append('<option value="">Cargando municipios...</option>').prop('disabled', true);

                if (privinciaId) {
                    $.ajax({
                        url: `/sadmin/municipios/${privinciaId}`,
                        type: 'GET',
                        success: function (data) {
                            $('#id_municipio').empty().append('<option value="">Seleccione un Municipio</option>');
                            data.forEach(function (municipio) {
                                $('#id_municipio').append(`<option value="${municipio.id_municipio}">${municipio.municipio}</option>`);
                            });
                            $('#id_municipio').prop('disabled', false);
                        },
                        error: function () {
                            $('#id_municipio').empty().append('<option value="">Error al cargar</option>').prop('disabled', true);
                        }
                    });
                } else {
                    $('#id_municipio').empty().append('<option value="">Seleccione un Municipio</option>').prop('disabled', true);
                }
            });
        });
    </script>

    <script>
        function cerrarMAgregarUsuario() {
            
            $('#agregar-usuario').on('hidden.bs.modal', function () {
                $(this).attr('aria-hidden', 'true');
            });
        }
    </script>
@stop


