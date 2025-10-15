<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';
    protected $primary = 'id';
    protected $fillable = [
        'name',
        'email',
        'password',
        'persona_id',
        'rol_id',
        'activo',
        'auth_id',
        'profile_photo_path',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    
    public function adminlte_profile_url()
    {
        return url('perfil');
    }
    public function adminlte_desc()
    {
        $rol = DB::table('roles')->where('id_rol', $this->rol_id)->firstOrFail()->rol;
        return $rol; 
    }
    public function persona()
    {
        return $this->belongsTo(Persona::class, 'persona_id', 'id_persona');
    }
    public function getAvatarPathAttribute()
    {
        // Si existe relación persona y tiene avatar, devuelve la ruta
        if ($this->persona && $this->persona->avatar) {
            return asset($this->persona->avatar->path_picture);
        }

        // Fallback por si falta persona o avatar
        return asset('images/avatar/avatar-hombre.png'); // o avatar-mujer.png según lógica adicional
    }

}
