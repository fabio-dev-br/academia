<?php

namespace App;

use illuminate\Database\Eloquent\Model;

class Despesa extends Model
{
    protected $fillable = [
        'tipo',
        'descrição',
        'valor',
        'data de vencimento',
    ];

}