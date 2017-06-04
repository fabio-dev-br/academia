<?php

namespace App;

use illuminate\Database\Eloquent\Model;

class Funcionario extends Model{
    protected $fillable = [
        'nome',
        'cpf',
        'numerocarteira',
        'cargo',
        'datanascimento',
        'endereço',
        'telefone',
        'telefonecelular',
        'email',
        'sexo',
        'carga',
    ];

}