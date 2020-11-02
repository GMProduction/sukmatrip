@extends('base')

@section('moreCss')
    <link rel="stylesheet" href="{{asset('assets/vendor/slick/slick.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/vendor/slick/slick-theme.css')}}" type="text/css">
@endsection

@section('content')

    {{--    BIG MAP--}}
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d988.8154676581357!2d110.7329121291782!3d-7.546395899659835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a14bdd2214c4f%3A0xc8d1a3719f9d6585!2sGriya%20Calista%2C%20Wirogunan!5e0!3m2!1sid!2sid!4v1604336790552!5m2!1sid!2sid"frameborder="0"
            style="height: 24em; width: 100%; position:relative; margin-top: 4em; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    {{--    OUR PACKAGE--}}
    <section class="container  mt-5 text-center">
        <div class="text-center mb-4" style="margin-top: 7rem">
            <a class="sukmatrip" style="color: black">CONTACT</a>
            <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
        </div>
        <p class="text-center f26 mb-3">Contact <a class="t-accent">us:</a></p>

        <div class="slick-fade">
            <div class="ulasan mt-0 d-flex flex-column align-items-center justify-content-center">
                <img src="{{asset('assets/img/common/logo.png')}}" style=" width: 9em">
                <p style="color: #636363; font-weight: 300" class="mt-5 f14">SUKMATRIP office</p>
                   <p> GRIYA CALISTA B8
                    kel Wirogunan, Kec. Kartasura, Kabupaten Sukoharjo, Jawa Tengah</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-4">
                <p style="color: var(--primaryColor);" class="f18 mb-0">Instagram</p>
                <a style="color: black;" class="f12 mb-0" href="https://www.instagram.com/sukmatrip_/">@sukmatrip_</a>
            </div>
            <div class="col-4">
                <p style="color: var(--primaryColor);" class="f18 mb-0">Phone numbers</p>
                <a style="color: black;" href="tel:6283865442740" class="f12 mb-0">+62 83865442740</a>
            </div>
            <div class="col-4">
                <p style="color: var(--primaryColor);" class="f18 mb-0">Facebook</p>
                <a style="color: black;" class="f12 mb-0" href="https://www.facebook.com/pages/category/Product-Service/SUKMATRIP-794165044301310/">SUKMATRIP</a>
            </div>
        </div>
    </section>

    <section class="container-fluid" style="height: 35em ;margin-top: 7rem; position:relative;">
        <img class="image-as-bg" src="{{asset('assets/img/foto/sukmatrip2.jpg')}}">
        <div class="cover-black-all"></div>
        <div class="d-flex justify-content-center align-items-center h-100 flex-column front">
            <p class="sukmatrip mb-0">SUKMATRIP</p>
            <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
            <p class="text-center text-white f36 mt-2">About <a class="t-accent">us</a></p>
            <p style="font-weight: 300" class="text-white text-center f14 container">Kami adalah agen travel <a class="t-accent">"Profesional"</a> .</p>
        </div>
    </section>


    <section class="container-fluid">

        <div class="text-center mb-5" style="margin-top: 7rem">
            <a class="sukmatrip" style="color: black">SUKMATRIP</a>
            <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
        </div>
        <p class="text-center f26">Enjoy, Travel, <a class="t-accent">Relax</a></p>
{{--        <p style="font-weight: 300; color: #636363;" class="text-center f14 container">Take a look at the most exclusive--}}
{{--            & most visited locations in the world - hand-picked just for you.--}}
{{--            Start traveling the world today!</p>--}}

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
