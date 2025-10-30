<x-adminlte-modal id="nuevo-tipo-documento" title="NUEVO TIPO DE DOCUMENTO" size="lg" theme="primary"
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
    <form id="formNuevoTipoDocumento" action="{{route('sadmin.nuevo-tipo-documento')}}" method="post" class="needs-validation">
    @csrf
        <div class="container">
            <div class="row">
                <x-adminlte-input name="tipo_documento" value="{{ old('tipo_documento') }}" label="TIPO DE DOCUMENTO:" placeholder="{{ 'Registre el Tipo de Documento' }}" label-class="text-lightblue" fgroup-class="col-md-6 {{ $errors->has('tipo_documento') ? 'has-error' : '' }}" disable-feedback required>
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
                <x-adminlte-input name="descripcion" value="{{ old('descripcion') }}" label="DESCRIPCIÓN:" placeholder="{{ 'Registre la descripción del Tipo de Documento' }}" label-class="text-lightblue" fgroup-class="col-md-6 {{ $errors->has('descripcion') ? 'has-error' : '' }}" disable-feedback required>
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
        <x-adminlte-button type="submit" form="formNuevoTipoDocumento" class="mr-auto btn btn-lg" theme="success" label="Registrar"/>
        <x-adminlte-button class="btn btn-lg" theme="danger" label="Cerrar" data-dismiss="modal"/>
    </x-slot>
    
</x-adminlte-modal>



