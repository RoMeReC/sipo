<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class TipoDocumento extends Model
{
        use HasFactory, Notifiable;
    protected $table = 'tipo_documentos';
    protected $primaryKey = 'id_tipo_documento';
    protected $fillable = [
        'tipo_documento',
        'descripcion',
        'activo',
        'auth_user'
    ];
}
