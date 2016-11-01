<!-- ==============================================
		MAIN NAV
		=============================================== -->
		<!-- Wrapper Start -->
		<div class="wrapper" id="home">
			<!-- Mainbar Start -->
			<div class="wrapper-alt">
				<!-- navbar start -->
				<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#"><h1>MMusic</h1></a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
							<li><a class="scroll-link" href="{{ route('menu.principal') }}"><i class="fa fa-home"></i> Home</a></li>
							<li><a class="scroll-link" href="{{ route('menu.musicas') }}"><i class="fa fa-music"></i> Musicas</a></li>
							<li><a class="scroll-link" href="{{ route('menu.videos') }}"><i class="fa fa-film"></i> Videos</a></li>
							<li><a class="scroll-link" href="{{ route('menu.galerias') }}"><i class="fa fa-image"></i> Galerias</a></li>
							<li><a class="scroll-link" href="{{ route('menu.contato') }}"><i class="fa fa-fax"></i> Contacto</a></li>
							

								<style>
									a#perfilP:hover, a#perfilP:focus {
									    background-color: rgba(38, 38, 39, 0.46);
									}
								</style>
							@if (!Auth::guest())
							
							<li class="">
						      <a href="javascript:;" id="perfilP" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="true" style="background-color: rgba(0, 0, 0, 0.71);border-radius: 3px; position: relative; padding-left:50px;">
						      <img src="{{ asset('/uploads/avatar/'.Auth::user()->avatar) }}" style="width: 32; height: 32px; position: absolute; top: 10px; left: 10px; border-radius:50%">
						        {{ Auth::user()->name }}
						        <span class=" fa fa-angle-down"></span>
						      </a>
						      <ul class="dropdown-menu dropdown-usermenu pull-right">
						        <li><a href="{{ url('/home') }}"> Perfil</a></li>
						        {{-- <li>
						          <a href="javascript:;" desabled>
						            <span class="badge bg-red pull-right">50%</span>
						            <span>Gerenciar</span>
						          </a>
						        </li>
						        <li><a href="javascript:;">Ajuda</a></li> --}}
						        <li><a href="{{ url('logout') }}"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>
						      </ul>
						    </li>
						@else
							<li>
								<a class=""  data-toggle="modal" href='#modalRegistrar' title="Enviar Mensagem!" style="color: #09fb41;">
								<i class="fa fa-users"></i>
								Registrar
								</a>
							</li>
							<li>
								<a class=""  data-toggle="modal" href='#modalFriend' title="Enviar Mensagem!" style="color: #332924;">
								<i class="fa fa-sign-in"></i> 
								Logar
								</a>
							</li> 
						@endif
						</ul>
						</div>
					</div>
				</nav>
		
				<!-- Slider -->

					@if (Request::path() == 'inicio' || Request::path() =='/')
						@include('parts.slide')
					@else
						
					@endif
				<!-- fim do slide -->
			</div>
				<!-- Main area content block -->
		</div>



		<div class="modal fade" id="modalFriend" role="dialog">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      
		        <div class="modal-header primary">
		          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		          <h5 class="modal-title">Login do Usuário</h5>
		        </div>

		        <div class="modal-body">
		        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Lembrar Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Esqueceu a senha ?</a>
                            </div>
                        </div>
                    </form>

                    <a class="btn btn-success"  data-toggle="modal" href='#modalRegistrar'  id="registaR" title="Enviar Mensagem!">
					registar
					</a>
		        </div>		        
		    </div>
		  </div>
		</div>




		<div class="modal fade" id="modalRegistrar" role="dialog">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      
		        <div class="modal-header primary">
		          <button type="button" class="close" id="botFic" data-dismiss="modal" aria-hidden="true">&times;</button>
		          <h5 class="modal-title">Registarar Usuário</h5>
		        </div>

		        <div class="modal-body">
		        	<form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar senha</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                    
		        </div>		        
		    </div>
		  </div>
		</div>



		