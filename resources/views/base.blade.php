<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sukmatrip honeymoon trip for couple.">
    <meta name="author" content="Genossys">
    <title>Sukmatrip - Honeymoon & Trip</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/bootstrap.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/sukmatripuser.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome-4.7.0/css/font-awesome.min.css') }}"
        type="text/css">
    <link rel="icon" href="{{ asset('assets/img/common/logosukma.ico') }}" type="image/png">

    @yield('moreCss')
    <!-- Favicon -->
    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
</head>

<body>



    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-transparent" style="height: 4em">
        <div class="givebgmobile">
            <div class="container">
                <a class="navbar-brand text-xl text-primary" href="/" style=" font-weight: bold"><img
                        style="height: 2em" src="{{ asset('assets/img/common/logo.png') }}"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="text-sm ml-5  f08 navitem" href="/">HOME<span
                                class="sr-only">(current)</span></a>
                        <a class=" text-sm ml-5  f08 navitem" href="/gallery">GALLERY</a>
                        <a class=" text-sm ml-5  f08 navitem" href="/article">ARTICLE</a>
                        <a class=" text-sm ml-5  f08 navitem" href="/contact">CONTACT</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="sideFixDiv d-flex flex-column align-items-center justify-content-center">
        <a href="https://api.whatsapp.com/send?phone=6283865442740&text=Hallo%21%20Sukmatrip"><img
                src="{{ asset('assets/img/icons/common/wa.png') }}" style="width: 2.5em"></a>
        <div style="height: 0.5em"></div>
        <a href="tel:6283865442740"><img src="{{ asset('assets/img/icons/common/call1.png') }}"
                style="width: 2.5em"></a>
    </div>

    <div class="content-wrapper">
        @yield('content')
    </div>


    <footer class="container-fluid" style="height: 18em; position:relative; margin-top: 7em;">
        <img class="image-as-bg" src="{{ asset('assets/img/foto/sukmatrip3.jpg') }}">
        <div class="cover-black-all"></div>
        <div class="d-flex justify-content-center align-items-center h-100 flex-column front">
            <a class="sukmatrip mt-4" style="color: white">STAY CONNECTED</a>
            <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
            <div class="d-flex mt-4">
                <a class="d-block"
                    href="https://www.facebook.com/pages/category/Product-Service/SUKMATRIP-794165044301310/"> <i
                        class="fa fa-facebook-square fa-lg facebookbutton"></i></a>
                <a class="d-block" href="https://www.instagram.com/sukmatrip_/"> <i
                        class="fa fa-instagram  fa-lg instagrambutton"></i></a>
            </div>
            <div class="d-flex mt-5">
                <a style="color: white" href="/" class="mr-3 ml-3 f08">HOME</a>
                <a style="color: white" href="/gallery" class="mr-3 ml-3 f08">GALLERY</a>
                <a style="color: white" href="/article" class="mr-3 ml-3 f08">ARTICLE</a>
                <a style="color: white" href="/contact" class="mr-3 ml-3 f08">CONTACT</a>

            </div>
            <p style="color: #C8C8C8; font-weight: 300" class="mt-4 f08">2020 - All rights reserved to ©Sukmatrip</p>
        </div>
    </footer>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>

    <script src="{{ asset('assets/js/etc/feather.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/page/global.js') }}"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace()
    </script>
    @yield('script')


</body>

</html>
