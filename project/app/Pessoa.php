<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = [
        'nome',
        'endereco',
        'telefone',
        'cep',
        'cpf'
    ];
}
