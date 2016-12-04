<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700"> --}}
    <!-- ==============================================
    CSS
    =============================================== -->  

    {!!Html::style('css/bootstrap.min.css')!!} 
    {!!Html::style('css/animate.min.css')!!}
    {!!Html::style('css/magnific-popup.css')!!}
    {!!Html::style('css/flexslider.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
    {!!Html::style('css/less-style.css')!!}
    {!!Html::style('css/style.css')!!}
    {!!Html::style('css/green.css')!!}
    {!!Html::style('css/style-blue.css')!!}
    {!!Html::style('css/style-switcher.css')!!}
    {!!Html::style('css/blueimp-gallery.min.css')!!}

</head>

<body id="app-layout">
    
    @yield('mainNav')


    @yield('content')

    
    {!!Html::script('js/jquery.min.js')!!}
    <script>window.jQuery || document.write('<script src="assets/js/libs/jquery-1.9.1.min.js">\x3C/script>')</script>
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/isotope.js')!!}
    {{-- {!!Html::script('//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js')!!} --}}
    {!!Html::script('js/jquery.magnific-popup.min.js')!!}
    {!!Html::script('js/waypoints.min.js')!!}
    {!!Html::script('js/jquery.flexslider-min.js')!!}
    {!!Html::script('js/SmoothScroll.js')!!}
    {!!Html::script('js/jquery.blueimp-gallery.min.js')!!}
    {!!Html::script('js/respond.min.js')!!}
    {!!Html::script('js/html5shiv.js')!!}
    {!!Html::script('js/custom.js')!!}
    {!!Html::script('js/client.js')!!}
    

    <script>
        // loads the audio player
        audioPlayer();
    </script>
    
</body>
</html>

