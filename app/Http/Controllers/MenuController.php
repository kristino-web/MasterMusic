<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\SobreMim;
use App\Slides;
use DB;

class MenuController extends Controller
{	
	public function __construct()
    {
    	
    }
    public function principal()
    {
      $slides = Slides::getSlides();
      $sobremim = SobreMim::getSobreMin();
      // dd($sobremim);
    	return view('welcome', compact('slides', 'sobremim'));	
    }

    public function musicas()
   	{
   		return view('musicasPage');
   	}

   	public function videos()
   	{
   		return view('videoPage');
   	}

   	public function galerias()
   	{
   		return view('galeriaPage');
   	}

   	public function contato()
   	{
   		return view('contatoPage');
   	}
}
