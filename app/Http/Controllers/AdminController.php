<?php

namespace App\Http\Controllers;

use App\Slides;
use App\SobreMim;
use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Input;
use Image;
use Auth;
use DB;

class AdminController extends Controller
{
    public function __construct()
    {
    	
    }

    public function index()
    {
        $ContUser = DB::table('users')->count();
        $ContSlide = DB::table('slides')->count();

    	return view('admin.index', compact('ContUser', 'ContSlide'));
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

    /*******************Slides**********************/
    public function sendSlide(Request $request)
    {

        $file = Input::file('slid_pict');
        $altura = image::make($file)->height();
        $largura = image::make($file)->width();

        $destinationPath = public_path().'/uploads/slides'; // upload path

            if($file){
                $extension = $file->getClientOriginalExtension(); 
                $fileName  = time() . '.' .$file->getClientOriginalName(); 

                $validator = validator::make($request->all(), [
                    'slid_pict'=>'image|max:2000'
                ]);
                
                if ($altura < 780 || $largura < 1500) {
                    $messImgSlid = 'O Tamanho da imagem para SLIDE deve ser  MAIOR que 780px de Altura e MAIOR que 1500px de Largura.';
                    notify()->flash($messImgSlid, 'warning');
                    return redirect('/admin/Slide')
                            ->with('message', $this->format_message($messImgSlid,'danger'));
                }
                
                if($validator->fails()) {
                    return redirect('/admin/Slide')
                        ->withErrors($validator->errors());
                }

                $file->move($destinationPath, $fileName); //add img in the path and her name recursively

                $imgFinal = $destinationPath.'/'.$fileName;

                $intImage = Image::make($imgFinal);
                $intImage->fit(1614, 788);
                $intImage->save($imgFinal);
            }
            
            // estado pode ser
            // P -> Postado -- enserido na Base de Dados
            // I -> inativo -- Inativo para Aparecer no site
            // A -> ativo   -- Activo para Aparecer no site

            $slide = new Slides();
            $slide->testo = $request['nome_sli'];
            $slide->descricao = $request['desc_sli'];
            $slide->slide = $fileName;
            $slide->estado = "P";
            $slide->save();

          notify()->flash('[Slide] - Adicionado com sucesso !', 'success');
          return redirect('/admin/Slide');
    }
    public function listSlide()
    {
        $slide = new Slides();
        $recs = $slide->all();
        return view('admin.admin_page_home_listSlide', compact('recs'));
    }


    public function updateSlide($id, Request $request)
    {
        // dd($id);
        $slide = Slides::find($id);
        $slideIn = $request->all();
        // dd($slideIn);

        $slide->fill($slideIn)->save();

        notify()->flash('[Slide] - Alterado com sucesso !', 'success');
        return redirect('/admin/ListSlide');
    }
  /*******************Final Slides**********************/

    public function formSobreMim()
    {
       return view('admin.admin_page_home_sobremim');
    }
    public function listSobreMim()
    {
        $sm = new SobreMim();
        $sobm = $sm->all();
        return view('admin.admin_page_home_listSobreMin', compact('sobm'));
    }
    public function sendSobreMim(Request $req)
    {
        $sbm = new SobreMim();
        $sbm->nome = $req['nomeSobreMin'];
        $sbm->descricao = $req['descSobreMin'];
        $sbm->estado = "P";
        $sbm->save();
        
        notify()->flash('[Sobre Mim] - Adicionado com sucesso !', 'success');
        return redirect('/admin/SobreMim');
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
    public function addMusicas()
    {
        dd('enviado de mp3');     
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

    public function format_message($message,$type)
    {
         return '<p class="alert alert-'.$type.'">'.$message.'</p>';
    }

}
