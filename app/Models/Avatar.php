<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Avatar extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'avatares';
    protected $primaryKey = 'id_avatar';
    protected $fillable = [
        'picture',
        'path_picture',
        'auth_user',

    ];
}
