<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelClient extends Model
{
    protected $table= 'clientes';
    protected $fillable=[
        'nome_fantasia',
        'razao_social',
        'tipo',
        'identificacao',
        'pais',
        'estado',
        'cidade',
        'bairro',
        'rua',
        'CEP',
        'numero'
    ];
}
