<x-adminlte-modal id="editar-rol" title="EDITAR ROL" size="lg" theme="warning"
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
    <form id="formEditarRol" action="{{route('sadmin.editar-rol')}}" method="post" class="needs-validation">
    @csrf
        <input type="hidden" id="id_rolEditar" name="id_rolEditar" value="{{ old('id_rolEditar') }}">
        <div class="container">
            <div class="row">
                <x-adminlte-input id="rolEditar" name="rolEditar" value="{{ old('rolEditar') }}" label="ROL:" placeholder="{{ 'Registre el Rol' }}" label-class="text-lightblue" fgroup-class="col-md-6 {{ $errors->has('rolEditar') ? 'has-error' : '' }}" disable-feedback required>
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user-plus text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <x-adminlte-input id="descripcionEditar" name="descripcionEditar" value="{{ old('descripcionEditar') }}" label="DESCRIPCIÓN:" placeholder="{{ 'Registre la descripción del Rol' }}" label-class="text-lightblue" fgroup-class="col-md-6 {{ $errors->has('descripcionEditar') ? 'has-error' : '' }}" disable-feedback required>
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-cubes text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
            </div>
        </div>
    </form>
    <x-slot name="footerSlot">
        <x-adminlte-button type="submit" form="formEditarRol" class="mr-auto btn btn-lg" theme="success" label="Guardar"/>
        <x-adminlte-button class="btn btn-lg" theme="danger" label="Cerrar" data-dismiss="modal"/>
    </x-slot>
    
</x-adminlte-modal>