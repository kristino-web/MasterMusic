<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slides extends Model
{
    
	protected $table = 'slides';


    protected $fillable = [
        'testo', 'descricao', 'slide', 'estado', 
    ];

    public static function getSlides()
    {
    	return Slides::where('estado', 'A')
						->get();
    }

}