<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Input;
use Image;
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

    /************* Pagina Home ****************/
    public function formSlide()
    {
       return view('admin.admin_page_home_slide');
    }

    public function sendSlide(Request $request)
    {
        $file = Input::file('slid_pict');
        $altura = image::make($file)->height();
        $largura = image::make($file)->width();

        // $width = Input::file('slid_pict')->width();
        
        $destinationPath = public_path().'/uploads/slides'; // upload path

            if($file){
                $extension = $file->getClientOriginalExtension(); // getting image extension
                $fileName  = $file->getClientOriginalName(); // getting file name.extension

        // dd($fileName);
                $validator = validator::make($request->all(), [
                    'slid_pict'=>'image|max:2000'
                ]);

                // dd($altura);
                // dd($largura);

                if ($altura < 780 || $largura < 1500) {
                    $messImgSlid = 'o modelo de imagem deve ser no tamanho de > 780px de Altura e > 1500px de Largura sendo imagem para Slide';
                    notify()->flash($messImgSlid, 'success');
                    return redirect('/admin/Slide');

                }
                // continua alki ------>

                if($validator->fails()) {
                    return redirect('/admin/Slide')
                        ->withErrors($validator->errors());
                }

                    $file->move($destinationPath, $fileName); //add img in the path and her name recursively

                $imgFinal = $destinationPath.'/'.$fileName;
                $height = image::make($imgFinal)->height();
                // $height = $file->height();

                dd("Finalmente passou".$imgFinal );

                $intImage = Image::make($imgFinal);
                $intImage->fit(1614, 788);
                $intImage->save($imgFinal);
            }
              //dd($file->getClientOriginalName());
          $autor->nome      = Input::get('nome');
          $autor->biografia = Input::get('biografia');
          $autor->picture   = $file->getClientOriginalName();
          $autor->save();   // save in dataBase.

          notify()->flash('Autor adicionado com sucesso !', 'success');
          return redirect::to('/admin/Slide');
    }



    public function formSobreMim()
    {
       return view('admin.admin_page_home_sobremim');
    }

    public function formSubscrever()
    {
       return view('admin.admin_page_home_subscrever');
    } 

    /************* Pagina Musicas ****************/
    public function formMusicas()
    {
       return view('admin.admin_page_musica_addmusic');
    } 
    
    /************* Pagina Videos ****************/   
    public function formVideos()
    {
       return view('admin.admin_page_video_addvideos');
    } 

    /************* Pagina Galleria ****************/   
    public function formGalleria()
    {
       return view('admin.admin_page_galleria_addgalleria');
    } 


    // ******************************** logout *************************
    public function getLogout()
    {
        auth()->guard('admin')->logout();

        return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');
    }

}
