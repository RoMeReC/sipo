<x-adminlte-modal id="nuevo-usuario" title="NUEVO USUARIO" size="lg" theme="teal"
    icon="fas fa-user" v-centered scrollable>

    {{-- MENSAJE DE ERROR --}}
    @if(session('danger'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><i class="fas fa-exclamation-triangle"></i> Atención:</strong> {{ session('danger') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    {{-- ERRORES DE VALIDACIÓN --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <br><br>
    <form id="formNuevoUsuario" action="{{route('sadmin.nuevo-usuario')}}" method="post" class="needs-validation" enctype="multipart/form-data">
    @csrf
    <h3><strong class="text-lightblue">DATOS PERSONALES</strong></h3>
        <div class="container">
            <div class="row">
                <div class="col-4" style="text-align: center">
                    <img src="{{'/images/avatar/avatar-hombre.png'}}" width="100%">
                    <input id="image" type="file" class="filestyle" name="picture" accept="image/jpeg,image/png">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <x-adminlte-select name="gguu" value="{{ old('gguu') }}" label="GRAN UNIDAD:" label-class="text-lightblue" fgroup-class="col-md-6 {{ $errors->has('gguu') ? 'has-error' : '' }}" disable-feedback required>
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-map-marked-alt text-lightblue"></i>
                        </div>
                    </x-slot>
                    <option value="">Seleccione una Gran Unidad</option>
                        @foreach($gguus as $gguu)
                            <option value="{{ $gguu->id_gguu }}">{{ $gguu->descripcion_gguu }}</option>
                        @endforeach
                </x-adminlte-select>
                <x-adminlte-select id="uudd" value="{{ old('uudd') }}" name="uudd" label="UNIDAD DEPENDIENTE:" label-class="text-lightblue" fgroup-class="col-md-6 {{ $errors->has('uudd') ? 'has-error' : '' }}" disable-feedback required>
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-map-marked-alt text-lightblue"></i>
                        </div>
                    </x-slot>
                    <option value="">Seleccione una Unidad Dependiente</option>
                </x-adminlte-select>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <x-adminlte-select name="grado" label="GRADO:" value="{{ old('grado') }}" label-class="text-lightblue" fgroup-class="col-md-6 {{ $errors->has('grado') ? 'has-error' : '' }}" disable-feedback required>
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-ship text-lightblue"></i>
                        </div>
                    </x-slot>
                    <option value="">Seleccione un Grado</option>
                        @foreach($grados as $grado)
                            <option value="{{ $grado->id_grado }}">{{ $grado->descripcion_grado }}</option>
                        @endforeach
                </x-adminlte-select>
                <x-adminlte-select name="especialidad" value="{{ old('especialidad') }}" label="ESPECIALIDAD:" label-class="text-lightblue" fgroup-class="col-md-6 {{ $errors->has('especialidad') ? 'has-error' : '' }}" disable-feedback required>
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-cubes text-lightblue"></i>
                        </div>
                    </x-slot>
                    <option value="">Seleccione una Especialidad</option>
                        @foreach($especialidades as $especialidad)
                            <option value="{{ $especialidad->id_especialidad }}">{{ $especialidad->descripcion_especialidad }}</option>
                        @endforeach
                </x-adminlte-select>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <x-adminlte-input name="nombres" value="{{ old('nombres') }}" label="NOMBRES:" placeholder="{{ 'Registre los Nombres' }}" label-class="text-lightblue" fgroup-class="col-md-6 {{ $errors->has('nombres') ? 'has-error' : '' }}" disable-feedback required>
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
                <x-adminlte-input name="primer_apellido" value="{{ old('primer_apellido') }}" label="PRIMER APELLIDO:" placeholder="{{ 'Registre el Primer Apellido' }}" label-class="text-lightblue" fgroup-class="col-md-6 {{ $errors->has('primer_apellido') ? 'has-error' : '' }}" disable-feedback required>
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-users text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <x-adminlte-input name="segundo_apellido" value="{{ old('segundo_apellido') }}" label="SEGUNDO APELLIDO:" placeholder="{{ 'Registre el Segundo Apellido' }}" label-class="text-lightblue" fgroup-class="col-md-6 {{ $errors->has('segundo_apellido') ? 'has-error' : '' }}" disable-feedback required>
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
                <x-adminlte-select name="genero" label="GENERO:" value="{{ old('genero') }}" label-class="text-lightblue" fgroup-class="col-md-6 {{ $errors->has('genero') ? 'has-error' : '' }}" disable-feedback required>
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-male text-lightblue"></i><i class="fas fa-female text-lightblue"></i>                                    
                        </div>
                    </x-slot>
                    <option value="">Seleccione una Opción</option>
                        @foreach($generos as $genero)
                            <option value={{ $genero->id_genero }}>{{ $genero->descripcion_genero }}</option>
                        @endforeach
                </x-adminlte-select>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <x-adminlte-input name="carnet_identidad" value="{{ old('carnet_identidad') }}" label="CARNET DE IDENTIDAD:" placeholder="{{ 'Registre el Carnet sin lugar de Expedición y sin espacios' }}" label-class="text-lightblue" fgroup-class="col-md-6 {{ $errors->has('carnet_identidad') ? 'has-error' : '' }}" disable-feedback required>
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-address-card text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
                <x-adminlte-select name="condicion" value="{{ old('condicion') }}" label="ESTADO CIVIL:" label-class="text-lightblue" fgroup-class="col-md-6 {{ $errors->has('condicion') ? 'has-error' : '' }}" disable-feedback required>
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-check text-lightblue"></i>
                        </div>
                    </x-slot>
                    <option value="">Seleccione una Opción</option>
                        @foreach($condiciones as $condicion)
                            <option value="{{ $condicion->id_condicion }}">{{ $condicion->condicion }}</option>
                        @endforeach
                </x-adminlte-select>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <x-adminlte-input name="celular" value="{{ old('celular') }}" label="CELULAR:" placeholder="{{ 'Registre el número de Celular' }}" label-class="text-lightblue" fgroup-class="col-md-6 {{ $errors->has('celular') ? 'has-error' : '' }}" disable-feedback required>
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-phone text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
            </div>
        </div>
        <p><strong>LUGAR Y FECHA DE NACIMIENTO</strong></p>
        <div class="container">
            <div class="row">
                <x-adminlte-select name="departamento" value="{{ old('departamento') }}" label="DEPARTAMENTO:" label-class="text-lightblue" fgroup-class="col-md-6 {{ $errors->has('departamento') ? 'has-error' : '' }}" disable-feedback required>
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-map-marked-alt text-lightblue"></i>
                        </div>
                    </x-slot>
                    <option value="">Seleccione un departamento</option>
                        @foreach($departamentos as $departamento)
                            <option value="{{ $departamento->id_departamento }}">{{ $departamento->descripcion_departamento }}</option>
                        @endforeach
                </x-adminlte-select>
                <x-adminlte-select id="provincia" value="{{ old('provincia') }}" name="provincia" label="PROVINCIA:" label-class="text-lightblue" fgroup-class="col-md-6 {{ $errors->has('provincia') ? 'has-error' : '' }}" disable-feedback required>
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-map-marked-alt text-lightblue"></i>
                        </div>
                    </x-slot>
                    <option value="">Seleccione una provincia</option>
                </x-adminlte-select>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <x-adminlte-select id="municipio" value="{{ old('municipio') }}" name="municipio" label="MUNICIPIO:" label-class="text-lightblue" fgroup-class="col-md-6 {{ $errors->has('municipio') ? 'has-error' : '' }}" disable-feedback required>
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-map-marked-alt text-lightblue"></i>
                        </div>
                    </x-slot>
                    <option value="">Seleccione un Municipio</option>
                </x-adminlte-select>
                <x-adminlte-input id="datepicker" value="{{ old('fecha_nacimiento') }}" name="fecha_nacimiento" label="FECHA DE NACIMIENTO:" placeholder="{{ 'Seleccione una fecha del Calendario' }}" label-class="text-lightblue" fgroup-class="col-md-6 {{ $errors->has('fecha_nacimiento') ? 'has-error' : '' }}" disable-feedback required>
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-calendar text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
            </div>
        </div>
        <p><strong>DATOS DEL USUARIO</strong></p>
        <div class="container">
            <div class="row">
                <x-adminlte-input name="email" value="{{ old('email') }}" label="CORREO ELECTRÓNICO:" placeholder="{{ 'Registre su correo electrónico' }}" label-class="text-lightblue" fgroup-class="col-md-6 {{ $errors->has('email') ? 'has-error' : '' }}" disable-feedback required>
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-envelope text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
                <x-adminlte-select name="rol" value="{{ old('rol') }}" label="ROL:" label-class="text-lightblue" fgroup-class="col-md-6 {{ $errors->has('rol') ? 'has-error' : '' }}" disable-feedback required>
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user-tie text-lightblue"></i>
                        </div>
                    </x-slot>
                    <option value="">Seleccione un Rol</option>
                        @foreach($roles as $rol)
                            <option value="{{ $rol->id_rol }}">{{ $rol->rol }}</option>
                        @endforeach
                </x-adminlte-select>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <p><strong class="text-lightblue">PERMISOS:</strong></p>
                <br>
                @foreach($permisos as $permiso)
                    <div class="col-md-3">
                        <div class="form-check">
                            <input 
                                class="form-check-input" 
                                type="checkbox" 
                                name="permisos[]" 
                                id="permiso{{ $permiso->id_permiso }}" 
                                value="{{ $permiso->id_permiso }}"
                                {{ in_array($permiso->id_permiso, old('permisos', [])) ? 'checked' : '' }}
                            >
                            <label class="form-check-label text-lightblue" for="permiso{{ $permiso->id_permiso }}">
                                {{ $permiso->permiso }}
                            </label>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>   
    </form>
    <x-slot name="footerSlot">
        <x-adminlte-button type="submit" form="formNuevoUsuario" class="mr-auto btn btn-lg" theme="success" label="Registrar"/>
        <x-adminlte-button class="btn btn-lg" theme="danger" label="Cerrar" data-dismiss="modal"/>
    </x-slot>
    
</x-adminlte-modal>



