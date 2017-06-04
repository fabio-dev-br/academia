<?php

namespace App;

use illuminate\Database\Eloquent\Model;

class Usuario extends Model{
    protected $fillable = [
        'nome',
        'senha'
    ];

}