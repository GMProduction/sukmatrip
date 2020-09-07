<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sukmatrip honeymoon trip for couple.">
    <meta name="author" content="Genossys">
    <title>Sukmatrip - Honeymoon & Trip</title>

    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/sukmatripuser.css')}}" type="text/css">
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
        <a class="navbar-brand text-xl text-primary" href="#" style=" font-weight: bold"><img style="height: 2em"
                                                                                              src="{{asset('assets/img/common/logo.png')}}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link text-sm ml-5 active" href="/">HOME<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link text-sm ml-5 active" href="/gallery">GALLERY</a>
                <a class="nav-item nav-link text-sm ml-5 active " href="/contact">CONTACT</a>
                <a class="nav-item nav-link text-sm ml-5 active" href="/article">ARTICLE</a>
            </div>
        </div>
    </div>
</nav>

<div class="content-wrapper">
    @yield('content')
</div>


<footer class="mt-5 container-fluid" style="height: 15em; position:relative;">
    <img class="image-as-bg" src="{{asset('assets/img/foto/sukmatrip1.png')}}">
    <div class="cover-black-all"></div>
    <div class="d-flex justify-content-center align-items-center h-100 flex-column front">
        <a class="sukmatrip" style="color: white">STAY CONNECTED</a>
        <div class="d-flex mt-4">
            <i class="gen-card-icon mr-2 ml-2 fa fa-facebook-f text-dark"></i>
            <i class="gen-card-icon mr-2 ml-2 fa fa-facebook-f text-dark"></i>
        </div>
        <div class="d-flex mt-4">
            <a style="color: white" class="mr-2 ml-2">HOME</a>
            <a style="color: white" class="mr-2 ml-2">CONTACT</a>
            <a style="color: white" class="mr-2 ml-2">ARTICLE</a>
            <a style="color: white" class="mr-2 ml-2">GALLERY</a>
        </div>
        <p class="text-white mt-3">2019 - All rights reserved to ©Sukmatrip</p>
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
