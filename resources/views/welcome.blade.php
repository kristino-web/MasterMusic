@extends('layouts.app')

@section('title')
    MM - Master Music
@endsection

@section('mainNav')
    @include('parts.mainNav')
@endsection

@section('content')
    <style>
        #playlist{
            list-style: none;
        }
        #playlist li a{
            color:black;
            text-decoration: none;
        }
        #playlist .current-song a{
            color:blue;
        }
    </style>
    {{-- http://premium.indioweb.in/grov/theme/index-alt.html --}}
    <div class="main-content">
        
        {{-- @include("parts/musicas_page") --}}

        <!-- sobre min -->
        <div class="service padd" id="service">
            <div class="container">

                <!-- Default heading -->
                <div class="default-heading heading-two white">
                    <!-- Heading -->
                    <h2>Sobre Mim</h2>
                </div>
    
                <!-- Service Contents -->
                <div class="service-content">
                    <div class="row">
                        <div class="col-md-12 col-sm-6">
                            <!-- Service Content Item -->
                            <div class="service-item animated opacity delay-one">
                                <!-- Icon -->
                                <i class="fa fa-user"></i>
                                <h4>Master o feticeiro</h4>
                                <!-- Paragraph -->
                                <p>Músico, compositor e Estudante Univeristário de Sistemas para internet.</p>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fim sobre min -->

        <!-- Galleria -->
        <div class="blog" id="galeria">
            <div class="container">

                <!-- Default heading -->
                <div class="default-heading">
                    <!-- Heading -->
                    <h2>Galleria de Fotos</h2>
                    <hr />
                    <h3>Blog are now available here in three columns.</h3>
                </div>

                <!-- Blog entries area -->
                <div class="blog-post">
                    <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
                    <div id="blueimp-gallery" class="blueimp-gallery">
                        <!-- The container for the modal slides -->
                        <div class="slides"></div>
                        <!-- Controls for the borderless lightbox -->
                        <h3 class="title"></h3>
                        <a class="prev">‹</a>
                        <a class="next">›</a>
                        <a class="close">×</a>
                        <a class="play-pause"></a>
                        <ol class="indicator"></ol>
                        <!-- The modal dialog, which will be used to wrap the lightbox content -->
                        <div class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title"></h4>
                                    </div>
                                    <div class="modal-body next"></div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-left prev">
                                            <i class="glyphicon glyphicon-chevron-left"></i>
                                            Previous
                                        </button>
                                        <button type="button" class="btn btn-primary next">
                                            Next
                                            <i class="glyphicon glyphicon-chevron-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="links">
                        <a href="img/banana.jpg" title="Banana" data-gallery>
                            <img src="img/thumbnails/banana.jpg" alt="Banana">
                        </a>
                        <a href="img/apple.jpg" title="Apple" data-gallery>
                            <img src="img/thumbnails/apple.jpg" alt="Apple">
                        </a>
                        <a href="img/orange.jpg" title="Orange" data-gallery>
                            <img src="img/thumbnails/orange.jpg" alt="Orange">
                        </a>
                    </div>

                    <!-- More view button -->
                    <!-- <div class="text-center blog-btn">
                        <a class="btn btn-default" href="#">View More</a>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- fim Galleria -->



        <!-- Subscribe-->
        <div class="subscribe">
            <div class="container">
                <!-- Subscribe form content -->
                <div class="s-form-content">
                    <!-- Heading -->
                    <h3>Quer se manter informado com as novidades do site?</h3>
                    <br />
                    <h4>Queremos te manter atualizado. Subscreva para novidades ou hang com as nossas midias sociais.</h4>
                    <!-- Subscribe form -->
                    <form role="form">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Digite o seu email...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Subscreva</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- fim Subscribe -->

        <!-- Social -->
        <div class="social-hub">
            <div class="container">

                <!-- Default heading -->
                <div class="default-heading heading-two">
                    <!-- Heading -->
                    <h2>Redes Sociais</h2>
                    <hr />
                    <h3>Social Section 1.10.32 of "de Finibus Bonorum et Malorum.</h3>
                </div>

                <!-- Social Hub Content -->
                <div class="hub-content">
                    <div class="row">
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <!-- Hub content Item -->
                            <div class="hub-item animated opacity delay-one">
                                <!-- Media Icon -->
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <!-- Heading -->
                                <h4><a href="#">Facebook</a></h4>
                                <!-- Information text -->
                                <span class="info-text">28,879 Likes</span>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <!-- Hub content Item -->
                            <div class="hub-item animated opacity delay-one">
                                <!-- Media Icon -->
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <!-- Heading -->
                                <h4><a href="#">Google+</a></h4>
                                <!-- Information text -->
                                <span class="info-text">5089 Groups</span>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <!-- Hub content Item -->
                            <div class="hub-item animated opacity delay-one">
                                <!-- Media Icon -->
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <!-- Heading -->
                                <h4><a href="#">Twitter</a></h4>
                                <!-- Information text -->
                                <span class="info-text">4000+ Followers</span>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <!-- Hub content Item -->
                            <div class="hub-item animated opacity delay-one">
                                <!-- Media Icon -->
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <!-- Heading -->
                                <h4><a href="#">LinkedIn</a></h4>
                                <!-- Information text -->
                                <span class="info-text">2000+ Members</span>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <!-- Hub content Item -->
                            <div class="hub-item animated opacity delay-one">
                                <!-- Media Icon -->
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <!-- Heading -->
                                <h4><a href="#">Pinterest</a></h4>
                                <!-- Information text -->
                                <span class="info-text">20 Gallery</span>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6">
                            <!-- Hub content Item -->
                            <div class="hub-item animated opacity delay-one">
                                <!-- Media Icon -->
                                <a href="#"><i class="fa fa-github"></i></a>
                                <!-- Heading -->
                                <h4><a href="#">Github</a></h4>
                                <!-- Information text -->
                                <span class="info-text">New Plugins</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fim Social -->

        

        @include('parts/footer');
    </div>

    <!-- Mainbar End -->
    <div class="clearfix"></div>
    <span class="totop"><a href="#.home"> <i class="fa fa-chevron-up"></i> </a></span>

@endsection
