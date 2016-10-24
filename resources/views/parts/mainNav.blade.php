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
							<li><a class="btn btn-success" href="#"><i class="fa fa-sign-in"></i> Logar</a></li>
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