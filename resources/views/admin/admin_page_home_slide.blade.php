@extends('layouts.adm')

@section('content')
		
		<div class="container body">
			
			<div class="main_container">
				@include('admin.admin_left')

				@include('admin.admin_top')
				
				{{-- todas as paginas devem ser appresentada aabixo. --}}
				<div class="right_col" role="main" style="min-height: 1684px;">
          
          {{-- @if(Session::has('message'))
              {!!Session::get('message')!!}
          @endif --}}

          <script>
            @if (notify()->ready())
                    swal({
                          title: "{{ notify()->message() }}",
                          type: "{{ notify()->type() }}"
                    });
            @endif
          </script>
          <div class="row">
            <div class="col-md-12">
              <a class="btn btn-success pull-right" href="{{ route('admin_List_slide') }}" ><i class="fa fa-align-left"></i> Listar</a>   
            </div> 
          </div>
				<div class="x_panel">
                  <div class="x_title">
                    <h2>Formulario de Slide</h2>
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
                    {!! Form::open(['url' => '/admin/SendSlide', 'method'=>'POST', 'enctype'=>'multipart/form-data', 'files' => true]) !!}

                      <label for="nome_sli">Nome:</label>
                      <input type="text" id="nome_sli" class="form-control" name="nome_sli" required="">

                      <label for="desc_sli">Descricao:</label>
                      <input type="text" id="desc_sli" class="form-control" name="desc_sli" required="">

                      <label for="slid_pict">Slide:</label>
                      <input type="file" id="slid_pict" class="form-control" name="slid_pict" required="">
                      <br>

                      <button class="btn btn-primary" type="submit">ENVIAR <i class="fa fa-send"></i></button>
					         
                    {!! Form::close() !!}
                    <!-- end form for validations -->

                  </div>
                </div>	
                </div>
				{{-- fim todas as paginas devem ser appresentada aabixo. --}}

				@include('admin.admin_footer')
			</div>

		</div>

@endsection