<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slides extends Model
{
    
	protected $table = 'slides';


    protected $fillable = [
        'testo', 'descricao', 'slide', 'estado', 
    ];

}