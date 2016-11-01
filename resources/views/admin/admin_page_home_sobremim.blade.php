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
                    <h2><i class="fa fa-user"></i> Formulario Sobre Mim</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        {{-- <ul class="dropdown-menu" role="menu">
                          <li><a href="#">*****</a>
                          </li>
                          <li><a href="#">*****</a>
                          </li>
                        </ul> --}}
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- start form -->
                    {!! Form::open(['route' => ['admin_Send_sobreMim'], 'method'=>'POST']) !!}
                      <label for="nome_sli">Nome:</label>
                      <input type="text" id="nomeSobreMin" placeholder="Adicione nome para a descriacao aki" class="form-control" name="nomeSobreMin" required="">

                      <label for="message">Descricao:</label>
                      <textarea id="message" required="required" class="form-control" name="descSobreMin" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" placeholder="Adicione a descricao aqui.." data-parsley-validation-threshold="10"></textarea>

                      <br>
                      <button class="btn btn-primary" type="submit">ENVIAR <i class="fa fa-send"></i></button>
					          {!! Form::close() !!}
                    <!-- end form -->

                  </div>
                </div>	
                </div>
				{{-- fim todas as paginas devem ser appresentada aabixo. --}}

				@include('admin.admin_footer')
			</div>

		</div>

@endsection