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
        <p><strong class="text-lightblue">TIPO DE USUARIO</strong></p>
        <input type="hidden" name="persona_id" id="usuario_id">
      
    </form>
    <x-slot name="footerSlot">
        <x-adminlte-button type="submit" form="formAgregarUsuario" class="mr-auto btn btn-lg" theme="success" label="Registrar"/>
        <x-adminlte-button class="btn btn-lg" theme="danger" label="Cerrar" data-dismiss="modal" onclick="cerrarMAgregarUsuario()"/>
    </x-slot>
    
</x-adminlte-modal>
