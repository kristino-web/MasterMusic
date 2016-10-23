@extends('layouts.adm')

@section('content')
<div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
                 <form role="form" method="POST" action="{{ url('/admin/login') }}">
                        {{ csrf_field() }}
                
                    <div>
                  <h1><i class="fa fa-lock"></i> Administrador</h1>
                </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                           
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                           
                        </div>

                        <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>
                        </div>
                      <div class="clearfix"></div>
                      <div class="separator">
                        <div>
                      
                          <p>© <?=date('Y');?> Todos os Direitos Reservados. MasterMusic é uma Plataforma de Música. Privacidade e Termos de Uso.</p>
                        </div>
                        <div class="clearfix"></div>
                        <br />

                      </div>

            </form>
        
@endsection
