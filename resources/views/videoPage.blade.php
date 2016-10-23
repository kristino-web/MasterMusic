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

                <h2><i class="fa fa-film"></i> Videos</h2>
                <hr />
                <h3>Nos queremos lhe entregar o melhor da Musica.</h3>
            </div>

            <!-- About us content area -->
            <div class="about-content">
              
                <div class="about-skill">

                <div class="row" data-scrollreveal="enter bottom over 1s" data-sr-init="true" data-sr-complete="true">
                    <div class="col-sm-4 portfolio-item">
                        <a href="https://www.youtube.com/watch?v=9d8wWcJLnFI" class="portfolio-link popup-youtube">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-play-circle-o fa-3x"></i>
                                </div>
                            </div>
                            <img src=" {{ asset('img/videoIMG/1.jpg') }} " class="img-centered" alt="">
                        </a>
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        <a href="http://vimeo.com/87701971" class="portfolio-link popup-vimeo">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-play-circle-o fa-3x"></i>
                                </div>
                            </div>
                            <img src="{{ asset('img/videoIMG/2.jpg') }}" class="img-centered" alt="">
                        </a>
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        <a href="https://www.youtube.com/watch?v=9d8wWcJLnFI" class="portfolio-link popup-youtube">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-play-circle-o fa-3x"></i>
                                </div>
                            </div>
                            <img src="{{ asset('img/videoIMG/3.jpg') }}" class="img-centered" alt="">
                        </a>
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        <a href="http://vimeo.com/87701971" class="portfolio-link popup-vimeo">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-play-circle-o fa-3x"></i>
                                </div>
                            </div>
                            <img src="{{ asset('img/videoIMG/4.jpg') }}" class="img-centered" alt="">
                        </a>
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        <a href="https://www.youtube.com/watch?v=9d8wWcJLnFI" class="portfolio-link popup-youtube">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-play-circle-o fa-3x"></i>
                                </div>
                            </div>
                            <img src="{{ asset('img/videoIMG/5.jpg') }}" class="img-centered" alt="">
                        </a>
                    </div>
                    <div class="col-sm-4 portfolio-item">
                        <a href="http://vimeo.com/87701971" class="portfolio-link popup-vimeo">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-play-circle-o fa-3x"></i>
                                </div>
                            </div>
                            <img src="{{ asset('img/videoIMG/6.jpg') }}" class="img-centered" alt="">
                        </a>
                    </div>
                </div>

                </div>


            </div>

        </div>
    </div>
    <!-- About Us End -->

    @include('parts/footer')

@endsection