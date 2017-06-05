<?php

namespace App;

use illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'tipo',
        'descrição',
        'valor',
        'data de vencimento',
        'telefone',
        'sexo'
    ];

}