<div class="modal fade" id="nuevo-usuario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="tex">
                <h4 class="modal-title" id="staticBackdropLabel">Nuevo Usuario</h4>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <ul class="alert alert-danger">{{ $error }}</ul>
                    @endforeach
                @endif
                <br><br>
                <form action="" method="post" class="needs-validation" enctype="multipart/form-data">
                @csrf
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
                            <x-adminlte-select name="grado" label="GRADO:" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback>
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
                            <x-adminlte-select name="especialidad" label="ESPECIALIDAD:" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback>
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
                            <x-adminlte-input name="nombres" label="NOMBRES:" placeholder="{{ '' }}" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback>
                                <x-slot name="prependSlot">
                                    <div class="input-group-text">
                                        <i class="fas fa-user text-lightblue"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-input>
                            <x-adminlte-input name="apellidos" label="APELLIDOS:" placeholder="{{ '' }}" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback>
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
                            <x-adminlte-input name="carnet_identidad" label="CARNET DE IDENTIDAD:" placeholder="{{ '' }}" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback>
                                <x-slot name="prependSlot">
                                    <div class="input-group-text">
                                        <i class="fas fa-address-card text-lightblue"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-input>
                            <x-adminlte-select name="condicion" label="ESTADO CIVIL:" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback>
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
                        <p><strong>LUGAR DE NACIMIENTO</strong></p>
                        <div class="row">
                            <x-adminlte-select name="departamento" label="DEPARTAMENTO:" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback>
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
                            <x-adminlte-select id="provincia" name="provincia" label="PROVINCIA:" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback>
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
                            <x-adminlte-select id="municipio" name="municipio" label="MUNICIPIO:" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback>
                                <x-slot name="prependSlot">
                                    <div class="input-group-text">
                                        <i class="fas fa-map-marked-alt text-lightblue"></i>
                                    </div>
                                </x-slot>
                                <option value="">Seleccione un Municipio</option>
                            </x-adminlte-select>
                            <x-adminlte-input name="fecha_nacimiento" label="FECHA DE NACIMIENTO:" placeholder="{{ '' }}" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback>
                                <x-slot name="prependSlot">
                                    <div class="input-group-text">
                                        <i class="fas fa-calendar text-lightblue"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-input>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <x-adminlte-input name="celular" label="CELULAR:" placeholder="{{ '' }}" label-class="text-lightblue" fgroup-class="col-md-6 {{ $errors->has('celular') ? 'has-error' : '' }}" disable-feedback>
                                <x-slot name="prependSlot">
                                    <div class="input-group-text">
                                        <i class="fas fa-phone text-lightblue"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-input>
                            <x-adminlte-select name="genero" label="GENERO:" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback>
                                <x-slot name="prependSlot">
                                    <div class="input-group-text">
                                        <i class="fas fa-male text-lightblue"></i><i class="fas fa-female text-lightblue"></i>                                    </div>
                                </x-slot>
                                <option value="">Seleccione una Opción</option>
                                    @foreach($generos as $genero)
                                        <option value="{{ $genero->id_genero }}">{{ $genero->descripcion_genero }}</option>
                                    @endforeach
                            </x-adminlte-select>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <x-adminlte-input name="email" label="CORREO ELECTRÓNICO" placeholder="{{ '' }}" label-class="text-lightblue" fgroup-class="col-md-6" disable-feedback>
                                <x-slot name="prependSlot">
                                    <div class="input-group-text">
                                        <i class="fas fa-envelope text-lightblue"></i>
                                    </div>
                                </x-slot>
                            </x-adminlte-input>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success btn-lg"><i class="fa fa-save"></i> Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>