<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SobreMim extends Model
{
    protected $table = 'sobre_mims';

    protected $fillable = [
        'nome', 'descricao', 'estado', 
    ];
}
