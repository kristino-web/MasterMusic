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
                    <h2> <i class="fa fa-film"></i> Formulario de Videos</h2>
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

                    <!-- start form for validation -->
                    <form id="demo-form" data-parsley-validate="" novalidate="">
                      <label for="slid_pict">Imagem:</label>
                      <input type="file" id="imgVid" class="form-control" name="imgVid" data-parsley-trigger="change" required="" placeholder="Adicione uma imagem para o Video">

                      <label for="slid_pict">Videos:</label>
                      <input type="text" id="videoPg" class="form-control" name="videoPg" data-parsley-trigger="change" required="" placeholder="Adicione o link do video">
                      <br>
                      <button class="btn btn-primary" type="button">ENVIAR <i class="fa fa-send"></i></button>
					          </form>
                    <!-- end form for validations -->

                  </div>
                </div>	
                </div>
				{{-- fim todas as paginas devem ser appresentada aabixo. --}}

				@include('admin.admin_footer')
			</div>

		</div>

@endsection