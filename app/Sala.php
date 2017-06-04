<?php

namespace App;

use illuminate\Database\Eloquent\Model;

class Sala extends Model{
    protected $fillable = [
        'codigo',
        'situacao',
        'nomepersonal',
        'horario'
    ];

}