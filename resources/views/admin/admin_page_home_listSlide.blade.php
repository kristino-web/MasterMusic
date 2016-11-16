@extends('layouts.adm')

@section('content')
		
	<div class="container body">
		
		<div class="main_container">
			@include('admin.admin_left')

			@include('admin.admin_top')
			
			{{-- todas as paginas devem ser appresentada aabixo. --}}
			<div class="right_col" role="main" style="min-height: 1684px;">

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
                <a href="{{ route('admin_slide') }}" class="btn btn-default pull-left"><i class="fa fa-mail-reply"></i> Voltar</a>
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
                            <th>Slide</th>
                            <th>Status</th>
                            <th>Açao</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          @foreach ($recs as $rec)
                          <tr>
                            <td>{{$rec->testo}}</td>
                            <td>{{$rec->descricao}}</td>
                            <td>{{$rec->slide}}</td>
                            <td>{{$rec->estado}}</td>
                            <td>
                              <a data-toggle="modal" href='#editSlide{{$rec->id}}' class="btn btn-warning"><i class="fa fa-pencil"></i></a>

                              <div class="modal fade" id="editSlide{{$rec->id}}">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      <h4 class="modal-title">Editar Slide</h4>
                                    </div>
                                    <div class="modal-body">
                                      {{-- {!! Form::model($rec, ['url' => '/admin/UpdateSlide', 'method'=>'PUT']) !!} --}}

                                      {!! Form::model($rec, ['method' => 'PUT','route' => ['admin_update_slide', $rec->id]]) !!}
                                        <label for="nome_sli">Nome:</label>
                                        {{-- <input type="text" id="nome_sli" class="form-control" name="nome_sli" required=""> --}}
                                        {!! Form::text('testo', null, ['class' => 'form-control', 'id' => 'nome_sliup']) !!}


                                        <label for="desc_sli">Descricao:</label>
                                        {!! Form::text('descricao', null, ['class' => 'form-control', 'id' => 'desc_sliup']) !!}
                                        {{-- <input type="text" id="desc_sli" class="form-control" name="descricao" required=""> --}}

                                        <label for="statdo">Estado:</label>
                                        {!! Form::text('estado', null, ['class' => 'form-control', 'id' => 'nome_sli']) !!}
                                        {{-- <input type="text" id="slid_pict" class="form-control" name="statdo_sli" required=""> --}}
                                        <br>

                                        <button class="btn btn-primary" type="submit">ENVIAR <i class="fa fa-send"></i></button>
                                     
                                      {!! Form::close() !!}
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                      <button type="button" class="btn btn-primary">Salvar</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                              <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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