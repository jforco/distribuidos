<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'edad', 'sexo', 'descripcion', 'fecha_desaparicion', 'lugar_desaparicion', 'anuncio_activo',
    ];
}
