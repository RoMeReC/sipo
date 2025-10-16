<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class PUsuario extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'p_usuarios';
    protected $primaryKey = 'id_p_usuario';
    protected $fillable = [
        'usuario_id',
        'permiso_id',
        'auth_user',
        'activo',
    ];

}
