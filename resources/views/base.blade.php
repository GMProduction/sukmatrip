<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="{{asset('assets/css/etc/font-awesome.min.css')}}" type="text/css">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sukmatrip honeymoon trip for couple.">
    <meta name="author" content="Genossys">
    <title>Sukmatrip - Honeymoon & Trip</title>

    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/sukmatripuser.css')}}" type="text/css">
    @yield('moreCss')
    <!-- Favicon -->
{{--    <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">--}}
<!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>

<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-transparent" style="height: 4em">
    <div class="container">
        <a class="navbar-brand text-xl text-primary" href="#" style=" font-weight: bold"><img style="height: 2em" src="{{asset('assets/img/common/logo.png')}}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a style="color: #4A4A4A; font-weight: 500;" class="nav-item nav-link text-sm ml-5 active f08" href="/">HOME<span class="sr-only">(current)</span></a>
                <a style="color: #4A4A4A; font-weight: 500;" class="nav-item nav-link text-sm ml-5 active f08" href="/gallery">GALLERY</a>
                <a style="color: #4A4A4A; font-weight: 500;" class="nav-item nav-link text-sm ml-5 active f08" href="/contact">CONTACT</a>
                <a style="color: #4A4A4A; font-weight: 500;" class="nav-item nav-link text-sm ml-5 active f08" href="/article">ARTICLE</a>
            </div>
        </div>
    </div>
</nav>

<div class="content-wrapper">
    @yield('content')
</div>


<footer class="container-fluid" style="height: 18em; position:relative; margin-top: 7em;">
    <img class="image-as-bg" src="{{asset('assets/img/foto/sukmatrip3.jpg')}}">
    <div class="cover-black-all"></div>
    <div class="d-flex justify-content-center align-items-center h-100 flex-column front">
        <a class="sukmatrip mt-4" style="color: white">STAY CONNECTED</a>
        <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
        <div class="d-flex mt-4">
            <i class="gen-card-icon mr-2 ml-2 fa fa-user-circle-o text-dark"></i>
            <i class="gen-card-icon mr-2 ml-2 fa fa-facebook-f text-dark"></i>
        </div>
        <div class="d-flex mt-5">
            <a style="color: white" class="mr-3 ml-3 f08">HOME</a>
            <a style="color: white" class="mr-3 ml-3 f08">CONTACT</a>
            <a style="color: white" class="mr-3 ml-3 f08">ARTICLE</a>
            <a style="color: white" class="mr-3 ml-3 f08">GALLERY</a>
        </div>
        <p style="color: #C8C8C8; font-weight: 300" class="mt-4 f08">2019 - All rights reserved to ©Sukmatrip</p>
    </div>
</footer>
<!-- Argon Scripts -->
<!-- Core -->
<script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/page/global.js')}}"></script>
<script>
    feather.replace()
</script>
@yield('script')


</body>

</html>
