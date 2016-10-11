@extends('layouts.core')

@section('title')
    Core-Portifolio 
@stop


@section('content')
    <div class="container body">
        <div class="main_container">
            
            @include('parts/leftMenuCore')

            @include('parts/mainMenuCore')

            <!-- page content -->
            <div class="right_col" role="main" style="min-height: 895px;">
              <div class="">
                <div class="page-title">
                  <div class="title_left">
                    <h3>Menu Navegação</h3>
                  </div>

                </div>
                
                <div class="clearfix"></div>

                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">

                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Menu <small>Adicionar Menu Principal</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                    
                          </li>
                        </ul>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                     
                        <form class="form-horizontal form-label-left input_mask">

                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Nome do menu">
                            <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                          </div>

                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control" id="inputSuccess3" placeholder="Icone menu">
                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                          </div>

                          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" id="inputSuccess4" placeholder="Link menu">
                            <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                          </div>

                          {{-- <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control" id="inputSuccess5" placeholder="Phone">
                            <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                          </div> --}}

                          <div class="form-group pull-right">
                            <div class="col-md-12 col-sm-12 ">
                              <button type="submit" class="btn btn-primary">Cancelar</button>
                              <button type="submit" class="btn btn-success">Enviar ...</button>
                            </div>
                          </div>

                        </form>
                      </div>
                    </div>

                  </div>
                </div>

              </div>
            </div>
            <!-- /page content -->

            
        </div>
    </div>
@endsection
