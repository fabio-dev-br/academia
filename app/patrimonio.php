<?php

namespace App;

use illuminate\Database\Eloquent\Model;

class Patrimonio extends Model
{
    protected $fillable = [
        'nome',
        'numero',
        'quantidade'
    ];
}