<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Autentic Persona - Construa seu Futuro aqui">

    <!-- ========== Page Title ========== -->
    <title>Autentic Personal - Carreira dos seus sonhos</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{asset('assets/img/APazul.png')}}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{asset('assets/style/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/style/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/style/themify-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/style/flaticon-set.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/style/magnific-popup.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/style/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/style/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/style/animate.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/style/bootsnav.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/style/responsive.css')}}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <script src="{{asset('assets/js/html5/html5shiv.min.js')}}"></script>
    <script src="{{asset('assets/js/html5/respond.min.js')}}"></script>

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">

</head>

<body>

@include('layout.header')

<div class="banner-area bottom-shape bg-gradient-dark video-info">
    <div class="container">
        @yield('content')
    </div>
</div>

@include('layout.footer')

<!-- jQuery Frameworks
============================================= -->
<script src="{{ asset('assets/js/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/equal-height.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
<script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/modernizr.custom.13711.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/progress-bar.min.js') }}"></script>
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/count-to.js') }}"></script>
<script src="{{ asset('assets/js/YTPlayer.min.js') }}"></script>
<script src="{{ asset('assets/js/circle-progress.js') }}"></script>
<script src="{{ asset('assets/js/bootsnav.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>


</body>
</html>
