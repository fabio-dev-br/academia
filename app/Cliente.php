<?php

namespace App;

use illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nome',
        'cpf',
        'rg',
        'endereço',
        'telefone',
        'sexo'
    ];

}