@extends('layouts.adm')

@section('content')
		
		<div class="container body">
			
			<div class="main_container">
				@include('admin.admin_left')

				@include('admin.admin_top')
				
				{{-- todas as paginas devem ser appresentada aabixo. --}}
				<div class="right_col" role="main" style="min-height: 1684px;">
				<div class="x_panel">
                  <div class="x_title">
                    <h2> <i class="fa fa-music"></i> Formulario de Música</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    {!! Form::open(['url' => '/admin/AddMusicas', 'method'=>'POST', 'enctype'=>'multipart/form-data', 'files' => true]) !!}

                      <label for="nome_sli">Nome da Música</label>
                      <input type="text" id="music_name" class="form-control" name="music_name" required="">
                      
                      <label for="slid_pict">Musica</label>
                      <input type="file" id="slid_pict" class="form-control" name="musicIN" data-parsley-trigger="change" required="">
                      <br>
                      <button class="btn btn-primary" type="submit" type="button">ENVIAR <i class="fa fa-send"></i></button>
                    {{-- </form> --}}
                    {!! Form::close() !!}

                  </div>
                </div>	
                </div>
				{{-- fim todas as paginas devem ser appresentada aabixo. --}}

				@include('admin.admin_footer')
			</div>

		</div>

@endsection