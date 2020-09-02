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
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body style="background-color: #eeeeee">
<!-- Main content -->
<div class="main-content" id="panel">
    <!-- As a link -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-transparent" style="height: 4em">
        <div class="container">
        <a class="navbar-brand text-xl text-primary" href="#" style=" font-weight: bold"><img style="height: 2em" src="{{asset('assets/img/common/logo.png')}}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link text-sm ml-3 active" href="/">HOME<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link text-sm ml-3" href="/gallery">GALLERY</a>
                <a class="nav-item nav-link text-sm ml-3" href="/contact">CONTACT</a>
                <a class="nav-item nav-link text-sm ml-3" href="/article">ARTICLE</a>
            </div>
        </div>
        </div>
    </nav>


    <div class="content-wrapper" >
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About</h6>
                    <p class="text-justify">Notaris PPAT Candra Wahyu Nugroho, S.H.,M.Kn</p>
                    <p class="text-justify">Alamat: Jl. Adi Sucipto No.53, Gatak, Gajahan, Kec. Colomadu, Kabupaten Karanganyar, Jawa Tengah 57174
                        </p>
                    <p>Telepon: (0271) 7088153</p>
                    <a href="https://wa.me/6281393966667?text=Halo%20notaris%20PPAT%20Candra%20Wahyu%20Nugroho" style="font-size: 14px; " class="text-white mb-0" >081393966667 (Whatsapp)</a>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="/">Home</a></li>
                        <li><a href="/kontak">Contact Us</a></li>

                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by
                        <a href="#"></a>.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href=""><i class="fab fa-facebook"></i></a></li>
                        <li><a class="dribbble" href=""><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script>
    feather.replace()
</script>
@yield('script')


</body>

</html>
