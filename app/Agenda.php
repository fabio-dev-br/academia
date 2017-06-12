<?php

namespace App;

use illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = [
        'personaltrainer',
        'data',
        'horarioinicio',
        'horariofim',
        'tipotreino',
        'unidade'
    ];

}