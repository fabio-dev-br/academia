<?php

namespace App;

use illuminate\Database\Eloquent\Model;

class Treino extends Model{
    protected $fillable = [
        'nomedoaluno',
        'tipo',
        'exercicio',
        'repeticao',
        'frequencia',
        'personalresponsavel',
    ];

}
