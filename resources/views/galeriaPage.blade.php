@extends('layouts.app')

@section('title')
    MM - Master Music
@endsection

@section('mainNav')
    @include('parts.mainNav')
@endsection

@section('content')

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


@include('parts/footer')

@endsection