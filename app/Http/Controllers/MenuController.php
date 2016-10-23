<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

class MenuController extends Controller
{	
	public function __construct()
    {
    	
    }
    public function principal()
    {
    	return view('welcome');	
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
