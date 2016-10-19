<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Input;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
    	
    }

    public function index()
    {
    	return view('admin.index');
    }

    public function login()
    {
    	return view('auth.login-admin');
    }

    public function postLogin(Request $request)
    {
    	$rules = array(
			'email' => 'required|min:3|max:100',
			'password' => 'required|min:3|max:100',
		);
    
    	$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
				return redirect('/admin/login')
						->withErrors($validator)
						->withInput();
		}

        $credenciais = ['email'=>$request->get('email'),'password'=>$request->get('password')];

        if (auth()->guard('admin')->attempt($credenciais)) {
            return redirect('/admin');
        }else {
            return redirect('/admin/login')
                    ->withErrors(['errors'=>'Login Inválido'])
                    ->withInput();
        }
    	
    }

}
