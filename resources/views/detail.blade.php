@extends('base')

@section('moreCss')
    <link rel="stylesheet" href="{{asset('assets/vendor/slick/slick.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/vendor/slick/slick-theme.css')}}" type="text/css">
@endsection


@section('content')

    <div style="height: 8em"></div>
    <section class="container">
        <div class="slider-nav mb-1">
            <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
            <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
            <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
            <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
            <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
            <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
            <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">

        </div>

        <div class="slider-for">
            <a target="_blank" href="{{asset('assets/img/foto/sukmatrip1.png')}}" ><img src="{{asset('assets/img/foto/sukmatrip1.png')}}"></a>
            <a target="_blank" href="{{asset('assets/img/foto/sukmatrip1.png')}}" ><img src="{{asset('assets/img/foto/sukmatrip1.png')}}"></a>
            <a target="_blank" href="{{asset('assets/img/foto/sukmatrip1.png')}}" ><img src="{{asset('assets/img/foto/sukmatrip1.png')}}"></a>
            <a target="_blank" href="{{asset('assets/img/foto/sukmatrip1.png')}}" ><img src="{{asset('assets/img/foto/sukmatrip1.png')}}"></a>
            <a target="_blank" href="{{asset('assets/img/foto/sukmatrip1.png')}}" ><img src="{{asset('assets/img/foto/sukmatrip1.png')}}"></a>
            <a target="_blank" href="{{asset('assets/img/foto/sukmatrip1.png')}}" ><img src="{{asset('assets/img/foto/sukmatrip1.png')}}"></a>
            <a target="_blank" href="{{asset('assets/img/foto/sukmatrip1.png')}}" ><img src="{{asset('assets/img/foto/sukmatrip1.png')}}"></a>


        </div>
    </section>

    {{--    OUR PACKAGE--}}
    <section class="container-fluid">
        <div class="text-center mt-5 mb-5">

        </div>
        <p class="text-center f18">PAKET SINI VIE VILLA</p>
        <div class="d-flex justify-content-center align-items-center">
                    <img src="{{asset('assets/img/icons/feather/map-pin.svg')}}" class="mr-2">
            <p class="mb-0 mr-4">Seminyak Bali</p>

            <img src="{{asset('assets/img/icons/feather/clock.svg')}} " class="mr-2">
            <p class="mb-0">3 Days 2 Nights</p>
        </div>

    </section>

    <section class="container">
        <div class="text-center mt-5 mb-5">
            <a class="sukmatrip" style="color: black">OUR HOTEL</a>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-12">
                <a class="gen-card-produk">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <div class="cover-black-bottom"></div>
                    <div class="content">
                        <p class="t-accent">PAKET SINI VIE VILLA</p>
                        <hr style="width: 3em; border-color: var(--accentColor)">
                        <p class="text-white f18 font-weight-600">Rp. 1.987.600</p>
                        <p class="text-white f12">3 Day 2 Night</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-12">
                <a class="gen-card-produk">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <div class="cover-black-bottom"></div>
                    <div class="content">
                        <p class="t-accent">PAKET SINI VIE VILLA</p>
                        <hr style="width: 3em; border-color: var(--accentColor)">
                        <p class="text-white f18 font-weight-600">Rp. 1.987.600</p>
                        <p class="text-white f12">3 Day 2 Night</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-12">
                <a class="gen-card-produk">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <div class="cover-black-bottom"></div>
                    <div class="content">
                        <p class="t-accent">PAKET SINI VIE VILLA</p>
                        <hr style="width: 3em; border-color: var(--accentColor)">
                        <p class="text-white f18 font-weight-600">Rp. 1.987.600</p>
                        <p class="text-white f12">3 Day 2 Night</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-12">
                <a class="gen-card-produk">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <div class="cover-black-bottom"></div>
                    <div class="content">
                        <p class="t-accent">PAKET SINI VIE VILLA</p>
                        <hr style="width: 3em; border-color: var(--accentColor)">
                        <p class="text-white f18 font-weight-600">Rp. 1.987.600</p>
                        <p class="text-white f12">3 Day 2 Night</p>
                    </div>
                </a>
            </div>

            <div class="col-md-3 col-sm-12">
                <a class="gen-card-produk">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <div class="cover-black-bottom"></div>
                    <div class="content">
                        <p class="t-accent">PAKET SINI VIE VILLA</p>
                        <hr style="width: 3em; border-color: var(--accentColor)">
                        <p class="text-white f18 font-weight-600">Rp. 1.987.600</p>
                        <p class="text-white f12">3 Day 2 Night</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-12">
                <a class="gen-card-produk">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <div class="cover-black-bottom"></div>
                    <div class="content">
                        <p class="t-accent">PAKET SINI VIE VILLA</p>
                        <hr style="width: 3em; border-color: var(--accentColor)">
                        <p class="text-white f18 font-weight-600">Rp. 1.987.600</p>
                        <p class="text-white f12">3 Day 2 Night</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-12">
                <a class="gen-card-produk">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <div class="cover-black-bottom"></div>
                    <div class="content">
                        <p class="t-accent">PAKET SINI VIE VILLA</p>
                        <hr style="width: 3em; border-color: var(--accentColor)">
                        <p class="text-white f18 font-weight-600">Rp. 1.987.600</p>
                        <p class="text-white f12">3 Day 2 Night</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-12">
                <a class="gen-card-produk">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <div class="cover-black-bottom"></div>
                    <div class="content">
                        <p class="t-accent">PAKET SINI VIE VILLA</p>
                        <hr style="width: 3em; border-color: var(--accentColor)">
                        <p class="text-white f18 font-weight-600">Rp. 1.987.600</p>
                        <p class="text-white f12">3 Day 2 Night</p>
                    </div>
                </a>
            </div>
        </div>

    </section>

    <section class="mt-5 container-fluid" style="height: 30em; position:relative;">
        <img class="image-as-bg" src="{{asset('assets/img/foto/sukmatrip1.png')}}">
        <div class="cover-black-all"></div>
        <div class="d-flex justify-content-center align-items-center h-100 flex-column front">
            <p class="sukmatrip">SUKMATRIP</p>
            <p class="f18 font-weight-bold text-white">About us</p>
            <p class="f10 text-white text-center text-tengah">Passionate about travel and sharing the world's wonders on
                the leisure travel side. We provide corporate travelers hi-touch services to facilitate their business
                travel needs. Named each year as one of the "Best Places To Work" in New York.</p>
        </div>
    </section>

    <section class="container mt-5 text-center">
        <div class="text-center mt-5 mb-5">
            <a class="sukmatrip" style="color: black">ARTICLE</a>
        </div>
        <p class="f14 font-weight-bold">Lastest from the Article</p>

        <div class="row">
            <div class="col-sm-12 col-md-3">
                <a class="gen-card-article">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <p class="judul">INI TEXT</p>
                    <p class="sumber">Sumbernya</p>
                </a>
            </div>
            <div class="col-sm-12 col-md-3">
                <a class="gen-card-article">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <p class="judul">INI TEXT</p>
                    <p class="sumber">Sumbernya</p>
                </a>
            </div>
            <div class="col-sm-12 col-md-3">
                <a class="gen-card-article">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <p class="judul">INI TEXT</p>
                    <p class="sumber">Sumbernya</p>
                </a>
            </div>
            <div class="col-sm-12 col-md-3">
                <a class="gen-card-article">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <p class="judul">INI TEXT</p>
                    <p class="sumber">Sumbernya</p>
                </a>
            </div>
        </div>

    </section>
    <hr style="border-color: var(--accentColor)" class="container">

    <section class="container mt-5 text-center">
        <div class="text-center mt-5 mb-5">
            <a class="sukmatrip" style="color: black">TESTIMONIALS</a>
        </div>
        <p class="f14 font-weight-bold">Our client says:</p>
        <div class="ulasan mt-3 " style="display: flex; flex-direction: column; align-items: center">
            <img src="{{asset('assets/img/foto/sukmatrip1.png')}}" style="border-radius: 50%; width: 7em; height: 7em">
            <p style="color: grey" class="mt-3">Extremelly flexible and easy to use. Code is clean and all files well
                organized. Great job guys.</p>
            <p style="color: black; font-weight: bold">JOHN E. PERRY.</p>
        </div>
    </section>



@endsection

@section('script')

    <script type="text/javascript" src="{{asset('assets/vendor/slick/slick.js')}}"></script>

    <script>
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            centerMode: false,
            focusOnSelect: true
        });
    </script>
@endsection
