<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Image;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


	public function perfil()
	{	
		// dd(Auth::user());
		
		return view('home', array('user' => Auth::user()) );
	}

	public function update_avatar(Request $request)
	{
		if ($request->hasFile('avatar')) {
			$avatar = $request->file('avatar');
			$filename = time() . '.' . $avatar->getClientOriginalExtension();
			Image::make($avatar)->resize(300, 300)->save( public_path('uploads/avatar/' . $filename ));

			$user = Auth::user();
			$user->avatar = $filename;
			$user->save();
		}

		return view('home', array('user' =>Auth::user()));
	}



}
