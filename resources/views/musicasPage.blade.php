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
                                    <li class="current-song"><a href="{{ asset('/audio/ExitthePremises.mp3')}}"><i class="fa fa-play-circle-o text-success" aria-hidden="true"></i> Exit the Premises</a></li>
                                    <li><a href="{{ asset('/audio/ExitthePremises.mp3')}}"><i class="fa fa-play-circle-o text-success" aria-hidden="true"></i> Severe Tire Damage</a></li>
                                    <li><a href="{{ asset('/audio/BrokenReality.mp3')}}"><i class="fa fa-play-circle-o text-success" aria-hidden="true"></i> Broken Reality</a></li>
                                    <li><a href="{{ asset('/audio/ExitthePremises.mp3')}}"><i class="fa fa-play-circle-o text-success" aria-hidden="true"></i> Agnus day</a></li>
                                    <li><a href="{{ asset('/audio/BrokenReality.mp3')}}"> <i class="fa fa-play-circle-o text-success" aria-hidden="true"></i> Arcadea</a></li>
                                </ul>
                                <br>
                                {{-- <a class="btn btn-theme" href="#">Peça o seu CD</a> --}}
                                <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Peça o seu CD</a>
                                @if (!Auth::guest())
                                    <a class="btn btn-success" href="#"><i class="fa fa-download" aria-hidden="true"></i></a>
                                @endif
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
                                <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Peça o seu CD</a>
                                @if (!Auth::guest())
                                    <a class="btn btn-success" href="#"><i class="fa fa-download" aria-hidden="true"></i></a>
                                @endif
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
                                <a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Peça o seu CD</a>
                                @if (!Auth::guest())
                                    <a class="btn btn-success" href="#" data-toggle="tooltip" data-placement="top" data-original-title="Fazer download do CD"><i class="fa fa-download" aria-hidden="true"></i></a>
                                @endif
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


<div class="modal fade" id="modal-id">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Formulario de Pedido de Compra</h4>
            </div>
            <div class="modal-body">
                <div class="x_panel">
                 
                  <div class="x_content">

                    <!-- start form for validation -->
                    <form id="demo-form" data-parsley-validate="" novalidate="">
                      <label for="fullname">Nome * :</label>
                      <input type="text" id="fullname" class="form-control" name="fullname" required="">

                      <label for="email">Email * :</label>
                      <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required="">

                      <label>Genero *:</label>
                      <p>
                        M:
                        <div class="iradio_flat-green checked" style="position: relative;"><input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required="" data-parsley-multiple="gender" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> F:
                        <div class="iradio_flat-green" style="position: relative;"><input type="radio" class="flat" name="gender" id="genderF" value="F" data-parsley-multiple="gender" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                      </p>

                      <p>

                          <label for="heard">Escolha a entrega *:</label>
                          <select id="heard" class="form-control" required="">
                            <option value="">Escolha..</option>
                            <option value="press">Os Correios</option>
                            <option value="net">Internet</option>
                          </select>

                          
                    </p></form>
                    <!-- end form for validations -->

                  </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </div>
</div>