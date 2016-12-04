@extends('layouts.app')

@section('title')
    MM - Master Music
@endsection

@section('mainNav')
    @include('parts.mainNav')
@endsection

@section('content')

    <!-- Contact -->
        <div class="contact" id="contact">



            <!-- Contact Information -->
            <div class="about pricing">
                <div class="container">

                    <!-- Default heading -->
                    <div class="default-heading heading">
                        <!-- Heading -->
                        <h2><i class="fa fa-fax"></i> Contate-nos</h2>
                        <hr />
                    </div>

                    <div class="row">
                        <div class="col-md-7 col-sm-7">
                            <!-- Contact form -->
                            <form role="form" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Nome..." value="" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email..." value="" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefone..." value="">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" rows="6" placeholder="Escreva a sua Mensagem..." required></textarea>
                                </div>
                                <button type="submit" id="submit" name="submit" class="btn btn-theme">Enviar Mensagem</button> &nbsp;<button type="reset" class="btn btn-default">Resetar</button>
                            </form>
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <!-- Contact Information like Address, Phone, Email etc.. -->
                            <div class="address">
                                <!-- Heading -->
                                <h4>Informções de Contato</h4>
                                <!-- Icon -->
                                <i class="fa fa-map-marker"></i>
                                <!-- Address -->
                                <p>Bairro universitário,<br>
                                Engenheiro Coelho,<br />
                                Chacra Primavera - 56</p>
                                <div class="clearfix"></div>
                                <br />
                                <!-- Icon -->
                                <i class="fa fa-phone"></i>
                                <!-- Phone -->
                                <p>+55 (19)98183-7722</p>
                                <div class="clearfix"></div>
                                <br />
                                <!-- Icon -->
                                <i class="fa fa-envelope-o"></i>
                                <!-- Email -->
                                <p><a href="#">master.music@site.com</a></p>
                                <div class="clearfix"></div>
                            </div>
                            <h5>Redes Sociais</h5>
                            <!-- Social Media Links -->
                            <div class="social">
                                <a href="#" class="facebook" ><i class="fa fa-facebook"></i></a>
                                <a href="#" class="google-plus" ><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="linkedin" ><i class="fa fa-linkedin"></i></a>
                                <a href="#" class="pinterest" ><i class="fa fa-pinterest"></i></a>
                                <a href="#" class="twitter" ><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fim Contact -->

@include('parts/footer')

@endsection