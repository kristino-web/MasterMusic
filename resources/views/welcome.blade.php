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

        <!-- Social -->
        <div class="social-hub">
            <div class="container">

                <!-- Default heading -->
                <div class="default-heading heading-two">
                    <!-- Heading -->
                    <h2>Redes Sociais</h2>
                    <hr />
                    <h3>Podemos nos encontrar tambem nas Redes Sociais.</h3>
                </div>

                <!-- Social Hub Content -->
                <div class="hub-content">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-6">
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
                        <div class="col-md-3 col-sm-4 col-xs-6">
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
                        <div class="col-md-3 col-sm-4 col-xs-6">
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
                        <div class="col-md-3 col-sm-4 col-xs-6">
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
                        {{--  --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- fim Social -->
        
        <!-- Subscribe-->
        <div class="subscribe" style="position: relative;top: 39px;">
            <div class="container">
                <!-- Subscribe form content -->
                <div class="s-form-content">
                    <!-- Heading -->
                    <h3>Quer se manter informado com as novidades do site?</h3>
                    <br />
                    <h4>Queremos te manter atualizado. Subscreva para novidades ou hang com as nossas Midias sociais.</h4>
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
        

        @include('parts/footer');
    </div>

    <!-- Mainbar End -->
    <div class="clearfix"></div>
    <span class="totop"><a href="#.home"> <i class="fa fa-chevron-up"></i> </a></span>

@endsection
