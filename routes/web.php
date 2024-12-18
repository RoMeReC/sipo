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
    //Route::put('/profile/photo', [ProfileController::class, 'updatePhoto'])->name('profile.update-photo');
    // Rutas para usuarios con rol_id:1 (super administradores)
    Route::middleware(['rol_id:1'])->group(function () {
        Route::get('/sadmin/dashboard', [SuperAdminController::class, 'dashboard'])->name('sadmin.dashboard');
        
        Route::get('/sadmin/listar-usuarios', [SuperAdminController::class, 'listar_usuarios'])->name('sadmin.listar-usuarios');
    });
    // Rutas para usuarios con rol_id:2 (administradores)
    Route::middleware(['rol_id:2'])->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    });
    // Rutas para usuarios con rol_id:3 (usuarios)
    Route::middleware(['rol_id:3'])->group(function () {
        Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    });
});
