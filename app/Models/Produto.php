<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'codigo',
        'descricao',
        'codigo_barras',
        'valor_venda',
        'peso_bruto',
        'peso_liquido',
    ];
}
