@extends('base')

@section('moreCss')
    <link rel="stylesheet" href="{{asset('assets/vendor/slick/slick.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/vendor/slick/slick-theme.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.css')}}"
          type="text/css">
@endsection


@section('content')

    <div style="height: 8em"></div>
    <section class="container w-100">
        @foreach($article->getImage as $img)
            <img src={{$img->image->url}}>
        @endforeach
    </section>

{{--    --}}{{--    OUR PACKAGE--}}
{{--    <section class="container-fluid">--}}
{{--        <div class="text-center mt-4">--}}
{{--            <p style="font-weight: 500" class="text-center f22 mb-4">{{ $product->nama }}</p>--}}
{{--            <div class="d-flex justify-content-center align-items-center"--}}
{{--                 style="margin-top: -1em; color: var(--primaryColor)">--}}
{{--                <i data-feather="map-pin" class="mr-2"></i>--}}
{{--                <p class="mb-0 mr-4">{{ $product->penginapan->destinasi->nama}}</p>--}}
{{--                <i data-feather="clock" class="mr-2"></i>--}}
{{--                <p class="mb-0">{{ $product }}</p>--}}
{{--            </div>--}}
{{--            <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">--}}
{{--        </div>--}}
{{--    </section>--}}

    <section class="container mt-5 ">
        <p class="text-center font-weight-bold f14">{!!  $article->judul !!}</p>
        <p >{!!  $article->konten !!}</p>
    </section>


@endsection

@section('script')

    <script type="text/javascript" src="{{asset('assets/vendor/slick/slick.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>




@endsection
