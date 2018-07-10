<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- link -->
        <base href="{{ asset('') }}">
        <link rel="stylesheet" type="text/css" href="source/assets/lib/bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="source/assets/lib/font-awesome/css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="source/assets/lib/select2/css/select2.min.css"/>
        <link rel="stylesheet" type="text/css" href="source/assets/lib/jquery.bxslider/jquery.bxslider.css"/>
        <link rel="stylesheet" type="text/css" href="source/assets/lib/owl.carousel/owl.carousel.css"/>
        <link rel="stylesheet" type="text/css" href="source/assets/lib/jquery-ui/jquery-ui.css"/>
        <link rel="stylesheet" type="text/css" href="source/assets/css/animate.css"/>
        <link rel="stylesheet" type="text/css" href="source/assets/css/reset.css"/>
        <link rel="stylesheet" type="text/css" href="source/assets/css/style.css"/>
        <link rel="stylesheet" type="text/css" href="source/assets/css/responsive.css"/>
        <link rel="stylesheet" type="text/css" href="source/assets/css/option2.css"/>
    
        <title>Kute shop - themelot.net Option 2</title>
    </head>
    <body class="home option2">

        @include('layout.header')

        @section('content')
            @include('layout.content')
        @endsection
        @yield('content')

        @include('layout.footer')

        <!-- Script-->
        <script type="text/javascript" src="source/assets/lib/jquery/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="source/assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="source/assets/lib/select2/js/select2.min.js"></script>
        <script type="text/javascript" src="source/assets/lib/jquery.bxslider/jquery.bxslider.min.js"></script>
        <script type="text/javascript" src="source/assets/lib/owl.carousel/owl.carousel.min.js"></script>
        @yield('custom_scripts')
        <!-- COUNTDOWN -->
        <script type="text/javascript" src="source/assets/lib/countdown/jquery.plugin.js"></script>
        <script type="text/javascript" src="source/assets/lib/countdown/jquery.countdown.js"></script>
        <!-- ./COUNTDOWN -->
        <script type="text/javascript" src="source/assets/js/jquery.actual.min.js"></script>
        <script type="text/javascript" src="source/assets/js/theme-script.js"></script>
    
    </body>
</html>