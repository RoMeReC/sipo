<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Container\Attributes\Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\alert;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'persona_id',
        'rol_id',
        'profile_photo_path',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    // protected $appends = [
    //     'profile_photo_path', // Si no está en la base de datos, asegúrate de calcularlo
    // ];
    
    public function getProfilePhotoUrlAttribute()
    {
        // Definir una URL predeterminada o usar una de la base de datos
        //return $this->profile_photo ? url('storage/' . $this->profile_photo) : url('images/default-avatar.png');
        return 'nada';
    }
    
    public function adminlte_image()
    {
        // Usar el accesor para la imagen
        // return $this->profile_photo_path;
        return 'https://picsum.photos/300/300';
    }
    
    public function adminlte_profile_url()
    {
        // Retorna la URL del perfil del usuario
        return url('profile/perfil');
    }
    public function adminlte_desc()
    {
        // Devuelve una descripción del usuario. Puedes modificarlo según lo que necesites.
        //$user = Illuminate\Support\Facades\Auth::user()->rol_id;
        $rol = DB::table('roles')->where('id_rol', $this->rol_id)->firstOrFail()->rol;
        return $rol; // O, por ejemplo: return $this->email;
    }
}
