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
						      <a href="javascript:;" id="perfilP" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="true" style="background-color: rgba(0, 0, 0, 0.71);border-radius: 3px;"> <i class="fa fa-user"></i>
						        {{ Auth::user()->name }}
						        <span class=" fa fa-angle-down"></span>
						      </a>
						      <ul class="dropdown-menu dropdown-usermenu pull-right">
						        <li><a href="javascript:;"> Perfil</a></li>
						        <li>
						          <a href="javascript:;">
						            <span class="badge bg-red pull-right">50%</span>
						            <span>Gerenciar</span>
						          </a>
						        </li>
						        <li><a href="javascript:;">Ajuda</a></li>
						        <li><a href="{{ url('logout') }}"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>
						      </ul>
						    </li>
						@else
							<li>
								<a class="btn btn-success"  data-toggle="modal" href='#modalFriend' title="Enviar Mensagem!">
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
		      
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		          <h5 class="modal-title">Enviar Mensagem</h5>
		        </div>

		        <div class="modal-body">
		        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

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
                            <label for="password" class="col-md-4 control-label">Password</label>

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
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
		        </div>		        
		    </div>
		  </div>
		</div>