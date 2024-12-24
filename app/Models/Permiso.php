<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Permiso extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'permisos';
    protected $primaryKey = 'id_permiso';
    protected $fillable = [
        'permiso',
    ];
}
