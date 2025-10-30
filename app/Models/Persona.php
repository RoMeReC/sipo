<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Persona extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'personas';
    protected $primaryKey = 'id_persona';
    protected $fillable = [
        'nombres',
        'primer_apellido',
        'segundo_apellido',
        'carnet_identidad',
        'fecha_nacimiento',
        'celular',
        'avatar_id',
        'condicion_id',
        'genero_id',
        'usuario_id',
        'municipio_id',
    ];

    //Referencias
    public function avatar()
    {
        return $this->belongsTo(Avatar::class, 'avatar_id', 'id_avatar');
    }

    public function condicion()
    {
        return $this->belongsTo(Condicion::class, 'condicion_id', 'id_condicion');
    }

    public function genero()
    {
        return $this->belongsTo(Genero::class, 'genero_id', 'id_genero');
    }

    public function municipio()
    {
        return $this->belongsTo(Municipio::class, 'municipio_id', 'id_municipio');
    }

}
