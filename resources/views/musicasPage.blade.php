@extends('layouts.app')

@section('title')
    MM - Master Music
@endsection

@section('mainNav')
    @include('parts.mainNav')
@endsection

@section('content')

<!-- About Us Section Start -->
    <div class="about pricing" id="about">
        <div class="container">

            <!-- Default heading -->
            <div class="default-heading heading">
                <!-- Heading -->

                <h2><i class="fa fa-music"></i> Musicas</h2>
                <hr />
                <h3>Agora poderá escutar as musicas aqui mesmo.</h3>
            </div>

            <!-- About us content area -->
            <div class="about-content">
                              
                <!-- About us skills -->
                <div class="about-skill">

                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                           
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <audio src="" controls id="audioPlayer">
                                O seu browser não suporta audio html5...
                            </audio>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-4 col-sm-6">
                            <div class="pricing-item animated opacity delay-one animation fadeInUp">
                                <h4>CD 1</h4>
                                <ul id="playlist">
                                    <li class="current-song"><a href="{{ asset('/audio/ExitthePremises.mp3')}}"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Exit the Premises</a></li>
                                    <li><a href="{{ asset('/audio/ExitthePremises.mp3')}}"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Severe Tire Damage</a></li>
                                    <li><a href="{{ asset('/audio/BrokenReality.mp3')}}"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Broken Reality</a></li>
                                    <li><a href="{{ asset('/audio/ExitthePremises.mp3')}}"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Agnus day</a></li>
                                    <li><a href="{{ asset('/audio/BrokenReality.mp3')}}"> <i class="fa fa-play-circle-o" aria-hidden="true"></i> Arcadea</a></li>
                                </ul>
                                <br>
                                <a class="btn btn-theme" href="#">Peça o seu CD</a>
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-sm-6">
                            <div class="pricing-item animated opacity delay-one animation fadeInUp">
                                <h4>CD 2</h4>
                                <ul id="playlist">
                                    <li class="current-song"><a href="https://incompetech.com/music/royalty-free/mp3-royaltyfree/Exit%20the%20Premises.mp3"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Exit the Premises</a></li>
                                    <li><a href="https://incompetech.com/music/royalty-free/mp3-royaltyfree/Severe%20Tire%20Damage.mp3"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Severe Tire Damage</a></li>
                                    <li><a href="https://incompetech.com/music/royalty-free/mp3-royaltyfree/Broken%20Reality.mp3"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Broken Reality</a></li>
                                    <li><a href="https://incompetech.com/music/royalty-free/mp3-preview2/Agnus%20Dei%20X.mp3"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Agnus day</a></li>
                                    <li><a href="https://incompetech.com/music/royalty-free/mp3-preview2/Arcadia.mp3"> <i class="fa fa-play-circle-o" aria-hidden="true"></i> Arcadea</a></li>
                                </ul>
                                <br>
                                <a class="btn btn-theme" href="#">Peça o seu CD</a>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="pricing-item animated opacity delay-one animation fadeInUp">
                                <h4>CD 3</h4>
                                <ul id="playlist">
                                    <li class="current-song"><a href="https://incompetech.com/music/royalty-free/mp3-royaltyfree/Exit%20the%20Premises.mp3"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Exit the Premises</a></li>
                                    <li><a href="https://incompetech.com/music/royalty-free/mp3-royaltyfree/Severe%20Tire%20Damage.mp3"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Severe Tire Damage</a></li>
                                    <li><a href="https://incompetech.com/music/royalty-free/mp3-royaltyfree/Broken%20Reality.mp3"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Broken Reality</a></li>
                                    <li><a href="https://incompetech.com/music/royalty-free/mp3-preview2/Agnus%20Dei%20X.mp3"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Agnus day</a></li>
                                    <li><a href="https://incompetech.com/music/royalty-free/mp3-preview2/Arcadia.mp3"> <i class="fa fa-play-circle-o" aria-hidden="true"></i> Arcadea</a></li>
                                </ul>
                                <br>
                                <a class="btn btn-theme" href="#">Peça o seu CD</a>
                            </div>
                        </div>

                    </div>
                </div>


            </div>

        </div>
    </div>
    <!-- About Us End -->

    @include('parts/footer')

@endsection