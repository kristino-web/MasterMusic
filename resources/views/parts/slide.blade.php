<!-- Slider -->
	<div class="slider">
		<div id="carousel-banner" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-banner" data-slide-to="0" class="active"></li>
			<?php $cont=count($slides); ?>
			@for ($i = 0; $i < count($slides); $i++)
				<li data-target="#carousel-banner" data-slide-to="{{ $i }}"></li>
			@endfor
		</ol>
		<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="img/slider/1.jpg" alt="...">
						<div class="carousel-caption">
							<h2 class="animated fadeInLeftBig">Excelencia no Trabalho</h2>
							<p class="animated fadeInRightBig">Sonho de musica de qualidade, <strong></strong> Preparando o caminho para o sucesso... </p>
						</div>
					</div>
					@foreach ($slides as $slide)
						<div class="item">
							<img src="{{ asset('/uploads/slides/'.$slide->slide) }}" alt="...">
							<div class="carousel-caption">
								<h2 class="animated fadeInLeftBig">{{$slide->testo}}</h2>
								<p class="animated fadeInRightBig">{{$slide->descricao}} </p>
							</div>
						</div>
					@endforeach
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-banner" role="button" data-slide="prev">
			<span class="fa fa-chevron-left"></span>
		</a>
		<a class="right carousel-control" href="#carousel-banner" role="button" data-slide="next">
			<span class="fa fa-chevron-right"></span>
		</a>
	</div>
<!-- fim do slide -->