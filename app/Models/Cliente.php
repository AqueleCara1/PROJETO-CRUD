<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'codigo',
        'nome',
        'fantasia',
        'documento',
        'endereco',  
    ];
}
