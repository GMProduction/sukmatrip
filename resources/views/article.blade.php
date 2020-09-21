@extends('base')

@section('moreCss')
    <link rel="stylesheet" href="{{asset('assets/vendor/slick/slick.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/vendor/slick/slick-theme.css')}}" type="text/css">
@endsection

@section('content')

    {{--    BIG IMAGE--}}
    <section class="container-fluid" style="height: 24em; position:relative; margin-top: 4em;">
        <img class="image-as-bg" src="{{asset('assets/img/foto/sukmatrip2.jpg')}}">
        <div class="cover-black-all"></div>
        <div class="d-flex justify-content-center align-items-center h-100 flex-column front">
            <p class="sukmatrip mb-0">SUKMATRIP</p>
            <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
            <p class="text-center text-white f36 mt-2"><a class="t-accent">ARTICLE</a></p>
        </div>
    </section>

    {{--    OUR PACKAGE--}}
    <section class="container mt-5 text-center">
        <div style="margin-top: 7em;" class="text-center mb-5">
            <a class="sukmatrip" style="color: black">ARTICLE</a>
            <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">

        </div>
        <p class="text-center f26 mb-5">Lastest from the <a class="t-accent">Article</a></p>

        <div class="row">
            <div class="col-sm-12 col-md-6">
                <a class="gen-card-article-page">
                    <img src="{{asset('assets/img/foto/konten2.jpg')}}">
                    <p class="judul mt-2">JELAJAHI PULAU BALI</p>
                    <p class="sumber">Sumbernya</p>
                </a>
            </div>
            <div class="col-sm-12 col-md-6">
                <a class="gen-card-article-page">
                    <img src="{{asset('assets/img/foto/konten2.jpg')}}">
                    <p class="judul mt-2">JELAJAHI PULAU BALI</p>
                    <p class="sumber">Sumbernya</p>
                </a>
            </div>

            <div class="col-sm-12 col-md-6">
                <a class="gen-card-article-page">
                    <img src="{{asset('assets/img/foto/konten2.jpg')}}">
                    <p class="judul mt-2">JELAJAHI PULAU BALI</p>
                    <p class="sumber">Sumbernya</p>
                </a>
            </div>
            <div class="col-sm-12 col-md-6">
                <a class="gen-card-article-page">
                    <img src="{{asset('assets/img/foto/konten2.jpg')}}">
                    <p class="judul mt-2">JELAJAHI PULAU BALI</p>
                    <p class="sumber">Sumbernya</p>
                </a>
            </div>
        </div>

    </section>

    <section class="container-fluid">
        <hr style="border-color: var(--accentColor); margin-top: 7em;" class="container">

        <div class="text-center mb-5" style="margin-top: 7rem">
            <a class="sukmatrip" style="color: black">SUKMATRIP</a>
            <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
        </div>
        <p class="text-center f26">Terms and <a class="t-accent">Conditions</a></p>
        <p style="font-weight: 300; color: #636363;" class="text-center f14 container">Take a look at the most exclusive
            & most visited locations in the world - hand-picked just for you.
            Start traveling the world today!</p>

    </section>

@endsection

@section('script')

    <script src="{{asset('assets/vendor/slick/slick.js')}}"></script>

    <script>
        $('.slick-fade').slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear'
        });
    </script>
@endsection
