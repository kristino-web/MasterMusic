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
                    <h2> <i class="fa fa-image"></i> Formulario de Galleria</h2>
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
                      <label for="slid_pict">Image Mini:</label>
                      <input type="file" id="imgMin" class="form-control" name="imgMin" data-parsley-trigger="change" required="">
                      
                      <label for="slid_pict">Imagem Original:</label>
                      <input type="file" id="imgORIG" class="form-control" name="imgORIG" data-parsley-trigger="change" required="">
                     
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