<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
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
      // dd($slide);
    	return view('welcome', compact('slides'));	
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
