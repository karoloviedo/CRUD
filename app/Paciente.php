<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
    protected $table = 'paciente';

    protected $fillable = [

        'numero_registro',
        'nombres',
        'apellidos',
        'servicios'

    ];
}
