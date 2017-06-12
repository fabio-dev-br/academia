<?php

namespace App;

use illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $fillable = [
        'personaltrainer',
        'horarioinicio',
        'horariofim',
        'tipotreino',
        'unidade'
    ];

}