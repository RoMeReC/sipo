<x-adminlte-modal id="agregar-usuario" title="AGREGAR USUARIO" size="sg" theme="teal"
    icon="fas fa-user-plus" v-centered scrollable>

    {{-- MENSAJE DE ERROR --}}
    @if(session('danger'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong><i class="fas fa-exclamation-triangle"></i> Atención:</strong> {{ session('danger') }}
            <button type="button" class="close" aria-label="Cerrar" onclick="cerrarMAgregarUsuario()">
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
    <form id="formAgregarUsuario" action="{{route('sadmin.agregar-usuario')}}" method="post" class="needs-validation">
        @csrf
        <input type="hidden" name="id_persona" id="id_persona"><input type="hidden" name="id" id="id">
        <div class="container">
            <div class="row">
                <x-adminlte-select id="tipo_usuario" name="tipo_usuario" value="{{ old('tipo_usuario') }}" label="TIPO DE USUARIO:" label-class="text-lightblue" fgroup-class="col-md-12 {{ $errors->has('tipo_usuario') ? 'has-error' : '' }}" disable-feedback required>
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user-plus text-lightblue"></i>
                        </div>
                    </x-slot>
                    <option value="">Seleccione un tipo de usuario</option>
                        
                </x-adminlte-select>
            </div>
        </div>
        <input type="hidden" name="email" id="email">
        <div class="container">
            <p><strong class="text-lightblue">PERMISOS:</strong></p>
            <div class="row">    
                @foreach($permisos as $permiso)
                    <div class="col-md-2">
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
        <x-adminlte-button type="submit" form="formAgregarUsuario" class="mr-auto btn btn-lg" theme="success" label="Registrar"/>
        <x-adminlte-button class="btn btn-lg" theme="danger" label="Cerrar" data-dismiss="modal" onclick="cerrarMAgregarUsuario()"/>
    </x-slot>
    
</x-adminlte-modal>
