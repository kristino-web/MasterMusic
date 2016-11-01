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
                    <h2>MEU PERFIL</h2>
                </div>
    
                <!-- Service Contents -->
                <div class="service-content">
                    <div class="row">
                        <div class="col-md-12 col-sm-6">
                            <!-- Service Content Item -->
                            <div class="service-item animated opacity delay-one">
                               <img src="{{ asset('/uploads/avatar/'.$user->avatar) }}" style="width: 150px; height:150px; float: left; border-radius: 50%; margin-right:25px;">
                               <div style="color: aliceblue;">
                                   <h3 style="color: aliceblue;"> {{$user->name}}</h3>
                                   <h5 style="color: aliceblue;">{{$user->email}}</h5>
                                   <form enctype="multipart/form-data" action="/perfilAtualiza" method="POST">
                                        <label>Atualize a imagem do perfil</label>
                                        <input type="file" name="avatar">
                                        <input type="hidden" name="_token" value="{{csrf_token() }}">
                                        <input type="submit" name="" class="btn btn-success pull-right">
                                    </form>
                               </div>
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
                    <h2>Atividades do Usuário</h2>
                    <hr />
                    {{-- <h3>Podemos nos encontrar tambem nas Redes Sociais.</h3> --}}
                </div>

                <!-- Social Hub Content -->
               
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
