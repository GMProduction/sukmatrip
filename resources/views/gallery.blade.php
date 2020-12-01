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
            <p class="text-center text-white f36 mt-2"><a class="t-accent">GALLERY</a></p>
        </div>
    </section>

    <section class="container mt-5" id="ourProperty">
        {{--        <div class="text-center mt-5 mb-5">--}}
        {{--            <a class="sukmatrip" style="color: black">OUR GALLERY</a>--}}
        {{--            <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">--}}
        {{--        </div>--}}

        <p class="text-center f26">Gallery <a class="t-accent">Sukmatrip</a></p>


        <div class="row">
            @foreach($gallery as $v)
                @foreach($v->image as $img)
                    <div class="col-md-3 col-sm-12">
                        <a class="gen-card-produk" href="{{ $img->url }}">
                            <img src="{{ $img->url }}">
                            <div class="cover-black-bottom"></div>
                            <div class="content">
{{--                                <p class="text-white f12">{{$v->judul}}</p>--}}
                                <hr style="width: 3em; border-color: white;" class="mb-2">
                            </div>
                        </a>
                    </div>
                @endforeach
            @endforeach


        </div>

        {{--        <div class="text-center mt-4 mb-5">--}}
        {{--            <a  class="bt-outline-primary f10" href="#">LOAD MORE</a>--}}
        {{--        </div>--}}
    </section>


    {{--    OUR PACKAGE--}}
    <section class="container-fluid">
        <div class="text-center mb-5" style="margin-top: 7rem">
            <a class="sukmatrip" style="color: black">SUKMATRIP</a>
            <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
            <div class="d-flex flex-wrap justify-content-center">
                @for ($i = 1; $i < 16; $i++)
                    @if($i == 14)
                        <img src="{{asset('assets/img/logo/a'.$i.'.png')}}" class="logoimg"
                             style="background-color: #ccc; border-radius: 30px"/>
                    @else
                        <img src="{{asset('assets/img/logo/a'.$i.'.png')}}" class="logoimg"/>
                    @endif
                @endfor
            </div>
        </div>
        {{--        <p style="font-weight: 300; color: #636363;" class="text-center f14 container">Take a look at the most exclusive--}}
        {{--            & most visited locations in the world--}}
        {{--            - hand-picked just for you. Start traveling the world today!</p>--}}

    </section>


    <section class="container-fluid">
        <hr style="border-color: var(--accentColor); margin-top: 7em;" class="container">

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
