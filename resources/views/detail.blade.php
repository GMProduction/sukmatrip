@extends('base')

@section('moreCss')
    <link rel="stylesheet" href="{{asset('assets/vendor/slick/slick.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/vendor/slick/slick-theme.css')}}" type="text/css">
@endsection


@section('content')

    <div style="height: 8em"></div>
    <section class="container">
        <div class="slider-nav mb-2">
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
        <div class="text-center mt-4">
            <p style="font-weight: 500" class="text-center f22">PAKET SINI VIE VILLA</p>
            <div class="d-flex justify-content-center align-items-center" style="margin-top: -1.5em; color: var(--primaryColor)">
                <img src="{{asset('assets/img/icons/feather/map-pin.svg')}}" class="mr-2" style="height: 1.2em; width: auto;">
                <p class="mb-0 mr-4">Seminyak Bali</p>
                <img src="{{asset('assets/img/icons/feather/clock.svg')}} " class="mr-2" style="height: 1.2em; width: auto;">
                <p class="mb-0">3 Days 2 Nights</p>
            </div>
            <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
        </div>
    </section>

    <section class="container">
        <div class="text-center mt-5 mb-5">
            <p class="text-center f26">Pilih 1 tour di bawah <a class="t-accent">ini:</a></p>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-12">
                <a class="gen-card-produk">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <div class="cover-black-bottom"></div>
                    <div class="content">
                        <p class="t-accent f08">PAKET SINI VIE VILLA</p>
                        <hr style="width: 3em; border-color: white;" class="mb-2">
                        <p class="text-white f18">Rp. 1.987.600</p>
                        <p style="font-weight: 300; margin-top: -0.6em" class="text-white f10">3 Day 2 Night</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-12">
                <a class="gen-card-produk">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <div class="cover-black-bottom"></div>
                    <div class="content">
                        <p class="t-accent f08">PAKET SINI VIE VILLA</p>
                        <hr style="width: 3em; border-color: white;" class="mb-2">
                        <p class="text-white f18">Rp. 1.987.600</p>
                        <p style="font-weight: 300; margin-top: -0.6em" class="text-white f10">3 Day 2 Night</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-12">
                <a class="gen-card-produk">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <div class="cover-black-bottom"></div>
                    <div class="content">
                        <p class="t-accent f08">PAKET SINI VIE VILLA</p>
                        <hr style="width: 3em; border-color: white;" class="mb-2">
                        <p class="text-white f18">Rp. 1.987.600</p>
                        <p style="font-weight: 300; margin-top: -0.6em" class="text-white f10">3 Day 2 Night</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-12">
                <a class="gen-card-produk">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <div class="cover-black-bottom"></div>
                    <div class="content">
                        <p class="t-accent f08">PAKET SINI VIE VILLA</p>
                        <hr style="width: 3em; border-color: white;" class="mb-2">
                        <p class="text-white f18">Rp. 1.987.600</p>
                        <p style="font-weight: 300; margin-top: -0.6em" class="text-white f10">3 Day 2 Night</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="mt-5 container-fluid d-flex justify-content-center align-items-center flex-column" style="height: 50em; position:relative;">
        <img class="image-as-bg" src="{{asset('assets/img/foto/sukmatrip4.jpg')}}">
        <div class="cover-black-all"></div>
        <div class="d-flex justify-content-center align-items-center cover-white flex-column front">
            <div class="d-flex justify-content-center align-items-center flex-column front" style="width: 100%; height: 100%;">
                <p class="sukmatrip mb-0" style="color: black">FORM DATA</p>
                <hr class="mb-5" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
                <div class="form-group">
                    <input type="email" class="form-control form-data-input" id="nama" aria-describedby="emailHelp" placeholder="Nama*">
                </div>

                <div class="form-group">
                    <input type="email" class="form-control form-data-input" id="totalHarga" aria-describedby="emailHelp" placeholder="Total Harga*">
                </div>

                <div class="d-flex align-items-stretch mb-3">
                    <a style="color: white; background: var(--primaryColor); letter-spacing: .5rem; border-radius: 5px 0px 0px 5px" class="bt-primary f08 ">-</a>
                    <div class="form-group mb-0 h-100">
                        <input type="email" class="form-control form-data-input h-100" id="totalHarga" aria-describedby="emailHelp" placeholder="Total Harga*" style="border-radius: 0px;">
                    </div>
                    <a style="color: white; background: var(--primaryColor); letter-spacing: .5rem; border-radius: 0px 5px 5px 0px" class="bt-primary f08 ">+</a>

                </div>

                <div class="text-center mt-4 mb-5">
                    <a style="color: white; background: #4A4A4A; letter-spacing: .5rem; " class="bt-primary f08">BOOK NOW</a>
                </div>
            </div>
        </div>

    </section>

    <section class="container-fluid">
        <div class="text-center mb-5" style="margin-top: 7rem">
            <a class="sukmatrip" style="color: black">SUKMATRIP</a>
            <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
        </div>
        <p class="text-center f26">Terms and <a class="t-accent">Conditions</a></p>
        <p style="font-weight: 300; color: #636363;" class="text-center f14 container">Take a look at the most exclusive & most visited locations in the world - hand-picked just for you.
            Start traveling the world today!</p>

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
