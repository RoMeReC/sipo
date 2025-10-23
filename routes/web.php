<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Backend\SuperAdminController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController as ControllersUserController;

// Rutas de autenticación
Auth::routes();

// Ruta para el inicio (login por defecto)
Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('home');
    }    
    return view('auth.login');
});

// Rutas protegidas por autenticación
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/perfil', [ProfileController::class, 'index'])->name('perfil');
    Route::post('/perfil/update', [ProfileController::class, 'updateProfile'])->name('perfil.update');
    Route::get('/password', [ProfileController::class, 'password'])->name('password');
    Route::post('/perfil/update_password', [ProfileController::class, 'updatePassword'])->name('perfil.update_password');

    //Route::put('/profile/photo', [ProfileController::class, 'updatePhoto'])->name('profile.update-photo');
    // Rutas para usuarios con rol_id:1 (super administradores)
    Route::middleware(['rol_id:1'])->group(function () {
        Route::get('/sadmin/dashboard', [SuperAdminController::class, 'dashboard'])->name('sadmin.dashboard');
        Route::get('/sadmin/listar-usuarios', [SuperAdminController::class, 'listar_usuarios'])->name('sadmin.listar-usuarios');
        Route::get('/sadmin/provincias/{departamentoId}', [SuperAdminController::class, 'getProvincias']);
        Route::get('/sadmin/municipios/{provinciaId}', [SuperAdminController::class, 'getMunicipios']);
        Route::get('/sadmin/uudds/{gguuId}', [SuperAdminController::class, 'getUUDD']);
        Route::post('/sadmin/nuevo-usuario', [SuperAdminController::class, 'nuevo_usuario'])->name('sadmin.nuevo-usuario');
        Route::post('/sadmin/agregar-usuario', [SuperAdminController::class, 'agregar_usuario'])->name('sadmin.agregar-usuario');
        Route::post('/sadmin/editar-usuario', [SuperAdminController::class, 'editar_usuario'])->name('sadmin.editar-usuario');
        Route::get('/sadmin/{id}/activar', [SuperAdminController::class, 'activar'])->name('sadmin.activar');
        Route::get('/sadmin/{id}/desactivar', [SuperAdminController::class, 'desactivar'])->name('sadmin.desactivar');
        Route::get('/sadmin/listar-tipos-usuario', [SuperAdminController::class, 'listar_tipos_usuario'])->name('sadmin.listar-tipo-usuario');
    });
    // Rutas para usuarios con rol_id:2 (administradores)
    Route::middleware(['rol_id:2'])->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/admin/listar-usuarios', [AdminController::class, 'listar_usuarios'])->name('admin.listar-usuarios');
        Route::get('/admin/provincias/{departamentoId}', [AdminController::class, 'getProvincias']);
        Route::get('/admin/municipios/{provinciaId}', [AdminController::class, 'getMunicipios']);
        Route::get('/admin/uudds/{gguuId}', [AdminController::class, 'getUUDD']);
        Route::post('/admin/nuevo-usuario', [AdminController::class, 'nuevo_usuario'])->name('admin.nuevo-usuario');
        Route::post('/admin/agregar-usuario', [AdminController::class, 'agregar_usuario'])->name('admin.agregar-usuario');
        Route::post('/admin/editar-usuario', [AdminController::class, 'editar_usuario'])->name('admin.editar-usuario');
        Route::get('/admin/{id}/activar', [AdminController::class, 'activar'])->name('admin.activar');
        Route::get('/admin/{id}/desactivar', [AdminController::class, 'desactivar'])->name('admin.desactivar');
    });
    // Rutas para usuarios con rol_id:3 (usuarios)
    Route::middleware(['rol_id:3'])->group(function () {
        Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    });
});
