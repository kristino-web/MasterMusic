@extends('layouts.adm')

@section('content')
		
		<div class="container body">
			
			<div class="main_container">
				@include('admin.admin_left')

				@include('admin.admin_top')
				
				{{-- todas as paginas devem ser appresentada aabixo. --}}
				<div class="right_col" role="main" style="min-height: 1684px;">
         
          @include('parts.communjs')

          <div class="row">
                <div class="col-md-12">
                  <a href="{{ route('admin_sobremin') }}" class="btn btn-default pull-left"><i class="fa fa-mail-reply"></i> Voltar</a>
                </div>
          </div>
			    <div class="x_panel">
              <div class="x_title">
                <h2><i class="fa fa-align-left"></i> Lista Slides </h2>
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

                <!-- start accordion -->
                

                <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel">
                      <div class="panel-body">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th>Nome</th>
                              <th>Descrição</th>
                             
                              <th>Status</th>
                              <th>Açao</th>
                            </tr>
                          </thead>
                          <tbody>
                            
                            @foreach ($sobm as $sob)
                            <tr>
                              <td>{{$sob->nome}}</td>
                              <td>{{$sob->descricao}}</td>
                              <td>{{$sob->estado}}</td>
                              <td>
                                <a data-toggle="modal" href='#editSobMin{{$sob->id}}' class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                <div class="modal fade" id="editSobMin{{$sob->id}}">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Editar Slide</h4>
                                      </div>
                                      <div class="modal-body">
                                        {{-- {!! Form::model($rec, ['url' => '/admin/UpdateSlide', 'method'=>'PUT']) !!} --}}

                                        {!! Form::model($sob, ['method' => 'PUT','route' => ['admin_update_sobreMim', $sob->id]]) !!}
                                          <label for="nome_sli">Nome:</label>
                                          {{-- <input type="text" id="nome_sli" class="form-control" name="nome_sli" required=""> --}}
                                          {!! Form::text('nome', null, ['class' => 'form-control', 'id' => 'nome_SobMup']) !!}


                                          <label for="desc_sli">Descricao:</label>
                                          {!! Form::text('descricao', null, ['class' => 'form-control', 'id' => 'desc_SobMup']) !!}
                                          {{-- <input type="text" id="desc_sli" class="form-control" name="descricao" required=""> --}}

                                          <label for="statdo">Estado:</label>
                                          {!! Form::text('estado', null, ['class' => 'form-control', 'id' => 'estado_SobM']) !!}
                                          {{-- <input type="text" id="slid_pict" class="form-control" name="statdo_sli" required=""> --}}
                                          <br>

                                          <button class="btn btn-primary" type="submit">ENVIAR <i class="fa fa-send"></i></button>
                                       
                                        {!! Form::close() !!}
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                  </div>
                </div>
                <!-- end of accordion -->
              </div>
          </div>
        </div>
				{{-- fim todas as paginas devem ser appresentada aabixo. --}}

				@include('admin.admin_footer')
			</div>

		</div>

@endsection