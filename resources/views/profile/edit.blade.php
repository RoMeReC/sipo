@extends('adminlte::page') <!-- AdminLTE 3 -->

@section('title', 'Editar Perfil')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Actualizar Foto de Perfil</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('profile.update-photo') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="profile_photo">Nueva Foto de Perfil</label>
                <input type="file" class="form-control-file" id="profile_photo" name="profile_photo" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection


