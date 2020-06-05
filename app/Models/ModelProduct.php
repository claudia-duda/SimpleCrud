<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelProduct extends Model
{
    protected $table= 'produtos';
    protected $fillable=['nome','codigo_estoque','tipo_item','preco_compra','preco_venda'];
}
