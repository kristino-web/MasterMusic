<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SobreMim extends Model
{
    protected $table = 'sobre_mims';

    protected $fillable = [
        'nome', 'descricao', 'estado', 
    ];

 	public static function getSobreMin()
    {
    	return SobreMim::where('estado', 'A')
						->get();
    }

    public static function SetPostedState()
    {

		return SobreMim::where('estado', 'A')
			           ->update(['estado' => 'P']);
    }


}
