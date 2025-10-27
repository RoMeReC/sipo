@extends('layouts.main')

@section('title', 'Listar Usuarios')

@section('content_header')
    <h1>Lista de Usuarios</h1>
         
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
            <button class="btn btn-primary" title="Nuevo Usuario" data-toggle="modal" data-target="#nuevo-usuario"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Nuevo Usuario</button>
        </div>
        

        <table id="sa-lista-usuarios" class="hover" style="width:100%">
            <thead>
                <tr>
                    <th>Nro</th>
                    <th>Grado</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
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
                        <td>{{ $inf['nombres'] }}</td>
                        <td>{{ $inf['apellidos'] }}</td>
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
                                data-id_persona_editar="{{ $inf['id_persona'] }}" 
                                data-id="{{ $inf['id'] }}"
                                data-id_rol="{{ $inf['id_rol'] }}"
                                data-email="{{ $inf['email'] }}"
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
                                data-id_departamento="{{ $inf['id_departamento'] }}"
                                data-id_provincia="{{ $inf['id_provincia'] }}"
                                data-id_municipio="{{ $inf['id_municipio'] }}"
                                data-fecha_nacimiento="{{ $inf['fecha_nacimiento']}}"
                                data-permisos='@json($inf["permisos_asignados"])'    
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
    <script src="/scripts/sadmin/cambiar-idioma-datatable-salu.js"></script>
    <script src="/scripts/sadmin/seleccionar-municipio.js"></script>
    <script src="/scripts/sadmin/seleccionar-uudd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.es.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            $('#id_fecha_nacimiento').datepicker({
                format: 'dd-mm-yyyy', // Formato de la fecha
                autoclose: true,
                todayHighlight: true,
                orientation: 'bottom auto',
                language: 'es', // Establece el idioma a español
            });
        });
    </script>
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
            $(document).on('click', '.btn-editar-usuario', function() {
                let usuarioId = $(this).data('id');
                let email = $(this).data('email');
                let personaId_editar = $(this).data('id_persona_editar');
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
                let municipioId = $(this).data('id_municipio');
                let provinciaId = $(this).data('id_provincia');
                let departamentoId = $(this).data('id_departamento');
                let fecha_nacimiento = $(this).data('fecha_nacimiento');
                let emaileditar = $(this).data('email');
                let rolId = $(this).data('id_rol');
                let permisosUsuario = $(this).data('permisos');
                console.log('Permisos del usuario:', permisosUsuario); // Para verificar que llegan bien

                console.log('Datos:', { usuarioId, rolId, gguuId, uuddId, gradoId, especialidadId, nombres, municipioId,provinciaId,departamentoId });
                $('#id_user').val(usuarioId); 
                $('#id_persona_editar').val(personaId_editar);
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
                //$('#id_municipio').val(municipioId);

                $('#id_provincia').empty().append('<option value="">Cargando provincias...</option>').prop('disabled', true);
                    if (departamentoId) {
                        // Cargar las PROVINCIAS correspondientes al DEPARTAMENTO seleccionada
                        $.ajax({
                            url: `/sadmin/provincias/${departamentoId}`,
                            type: 'GET',
                            success: function (data) {
                                $('#id_provincia').empty().append('<option value="">Seleccione una provincia</option>');

                                data.forEach(function (provincia) {
                                    let selected = provincia.id_provincia == provinciaId ? 'selected' : '';
                                    $('#id_provincia').append(`<option value="${provincia.id_provincia}" ${selected}>${provincia.provincia}</option>`);
                                });

                                $('#id_provincia').prop('disabled', false);
                            }
                        });
                    }
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

                // Vaciar y deshabilitar el select de PROVINCIAS
                // Cargar uudd al seleccionar una gguu
                $('#id_departamento').on('change', function () {
                    let departamentoId = $(this).val();

                    // Reinicia provincia y municipio cuando cambia el departamento
                    provinciaId = '';
                    municipioId = '';

                    $('#id_provincia').empty().append('<option value="">Cargando provincias...</option>').prop('disabled', true);
                    $('#id_municipio').empty().append('<option value="">Seleccione un municipio</option>').prop('disabled', true);

                    if (departamentoId) {
                        $.ajax({
                            url: `/sadmin/provincias/${departamentoId}`,
                            type: 'GET',
                            success: function (data) {
                                $('#id_provincia').empty().append('<option value="">Seleccione una provincia</option>');
                                data.forEach(function (provincia) {
                                    $('#id_provincia').append(`<option value="${provincia.id_provincia}">${provincia.provincia}</option>`);
                                });

                                $('#id_provincia').prop('disabled', false);
                            }
                        });
                    }
                });
                $('#id_fecha_nacimiento').val(fecha_nacimiento);
                $('#email_editar').val(emaileditar);
                //$('#id_rol').val(rolId);

                // Desmarcar todos primero
                $('.permiso-checkbox').prop('checked', false);

                // Verifica si es un array y marca los checks
                if (Array.isArray(permisosUsuario)) {
                    permisosUsuario.forEach(function(permisoId) {
                        // ✅ Aquí usamos backticks para interpolar correctamente
                        $(`.permiso-checkbox[value="${permisoId}"]`).prop('checked', true);
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


