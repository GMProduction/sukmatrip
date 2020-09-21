@extends('base')

@section('moreCss')
    <link rel="stylesheet" href="{{asset('assets/vendor/slick/slick.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/vendor/slick/slick-theme.css')}}" type="text/css">
@endsection

@section('content')

    {{--    BIG MAP--}}
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.468876962558!2d110.43053231477376!3d-7.07150929489277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708eb6acb5b2b9%3A0xa272b7a0fef12bc6!2sJl.%20Sawunggaling%20Sel.%20No.28%2C%20Padangsari%2C%20Kec.%20Banyumanik%2C%20Kota%20Semarang%2C%20Jawa%20Tengah%2050267!5e0!3m2!1sen!2sid!4v1600676171837!5m2!1sen!2sid"frameborder="0"
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
                <img src="{{asset('assets/img/foto/user1.jpg')}}" style="border-radius: 50%; width: 7em; height: 7em">
                <p style="color: #636363; font-weight: 300" class="mt-3 f14">Jl. Sawunggaling Sel. No.28, Padangsari, Kec. Banyumanik, Kota Semarang,
                    Jawa Tengah 50267</p>
            </div>
        </div>
        <div class="row ">
            <div class="col-4">
                <p style="color: var(--primaryColor);" class="f18 mb-0">Instagram</p>
                <p style="color: black;" class="f12 mb-0">@sukmatrip_</p>
            </div>
            <div class="col-4">
                <p style="color: var(--primaryColor);" class="f18 mb-0">Phone numbers</p>
                <p style="color: black;" class="f12 mb-0">+62 83865442740</p>
                <p style="color: black;" class="f12 mb-0">+62 83865442740</p>
            </div>
            <div class="col-4">
                <p style="color: var(--primaryColor);" class="f18 mb-0">Facebook</p>
                <p style="color: black;" class="f12 mb-0">SUKMATRIP</p>
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
            <p style="font-weight: 300" class="text-white text-center f14 container">Passionate about travel
                and sharing the world's wonders on the leisure travel side. We provide corporate travelers hitouch
                services to
                facilitate their business travel needs. Named each year as one of the <a class="t-accent">"Best Places
                    To Work"</a> in New York.</p>
        </div>
    </section>


    <section class="container-fluid">

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
