@extends('base')

@section('moreCss')
    <link rel="stylesheet" href="{{ asset('assets/vendor/slick/slick.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/slick/slick-theme.css') }}" type="text/css">
@endsection

@section('content')
    {{-- BIG IMAGE --}}

    <style >
        html { scroll-behavior: smooth; }
    </style>


    <style>
        .btnc {
            cursor: pointer;
            position: relative;
            color: white;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: white 1px 0 10px;
            height: 60px;
            width: 60px;
            border: solid 1px white;
            border-radius: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .btnc:before {
            content: '';
            position: absolute;
            background: #fff4;
            width: 0;
            height: 0;
            z-index: -1;
            border-radius: 60px;
            box-shadow: 0px 0px 24px 1px rgba(224, 199, 224, 0.2);
            transition: all 300ms cubic-bezier(1.000, -0.195, 0.000, 1.330);
            transition-timing-function: cubic-bezier(1.000, -0.195, 0.000, 1.330);
        }

        .btnc:hover:before {
            width: 85%;
            height: 85%;
        }

        .btnc:active:before,
        .btnc:focus:before {
            width: 100%;
            height: 100%;
        }
    </style>
    <section>
        <div class="gambar-depan">

            <p class="w-100"
                style="position: absolute; bottom: 150px; z-index: 100; text-align: center; font-size: 2rem; color: white">
                Cek PAKET HONEYMOON kami</p>
            <div class="w-100" style=" z-index: 100; position: absolute; bottom: 100px; text-align: center">
                <a class="btnc ml-auto mr-auto" href="#paket-honeymoon"> <i data-feather="chevron-down" style="color: white" class="icons"></i></a>
            </div>

            <div class="imagesContainer">
                <img class="image-as-bg" src="{{ asset('assets/img/foto/bg1.jpg') }}">
                <img class="image-as-bg fadeInClass" src="{{ asset('assets/img/foto/bg2.jpg') }}">
            </div>
            <div class="gradien-putih"></div>
            <div class="transparent-hitam"></div>

            <div class="d-flex justify-content-center align-items-center h-100 flex-column">
                {{-- <p class="sukmatrip mb-0">SUKMATRIP</p> --}}
                {{-- <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);"> --}}
                {{-- <p class="title-home" >CARI DESTINASI IMPIAN ANDA</p> --}}
                {{-- <div class="container-fluid w-50" style="z-index: 3"> --}}
                {{-- <div class="row mt-5 margin-title"> --}}
                {{-- <div class="col-lg-4 col-md-12"> --}}
                {{-- <label for="destinasi" class="text-white">Destinasi</label> --}}
                {{-- <select class="sukmatrip-form-control" id="destinasi" name="destinasi"> --}}
                {{-- <option class="sukmatrip-dropdown-item" value="all">Semua Destinasi</option> --}}
                {{-- @foreach ($destinations as $v) --}}
                {{-- <option class="sukmatrip-dropdown-item" value="{{ $v->id }}">{{ $v->nama }}</option> --}}
                {{-- @endforeach --}}
                {{-- </select> --}}
                {{-- </div> --}}

                {{-- <div class="col-lg-4 col-md-12"> --}}
                {{-- <label for="tipePenginapan" class="text-white">Kategori</label> --}}
                {{-- <select class="sukmatrip-form-control" id="tipePenginapan" name="tipePenginapan"> --}}
                {{-- <option class="dropdown-item" value="all">Semua Kategori</option> --}}
                {{-- <option class="dropdown-item" value="Hotel">Hotel</option> --}}
                {{-- <option class="dropdown-item" value="Vila">Villa</option> --}}
                {{-- </select> --}}
                {{-- </div> --}}

                {{-- <div class="col-lg-4 col-md-12"> --}}
                {{-- <label for="durasi" class="text-white">Durasi</label> --}}
                {{-- <select class="sukmatrip-form-control" id="durasi" name="durasi"> --}}
                {{-- @foreach ($durations as $duration) --}}
                {{-- <option class="dropdown-item" --}}
                {{-- value="{{ $duration->id }}">{{ $duration->name }}</option> --}}
                {{-- @endforeach --}}
                {{-- </select> --}}
                {{-- </div> --}}
                {{-- </div> --}}
                {{-- <div class="row mt-5"> --}}
                {{-- <div class="offset-lg-4 col-lg-4 col-md-12"> --}}
                {{-- <a id="btn-search" class="d-block text-center" href="#"> --}}
                {{-- <div class="bt-search"> --}}
                {{-- <i data-feather="search" class="mr-2" style="width: 1.3rem; height: 1.3rem"></i> --}}
                {{-- <p class="mb-0">Cari</p> --}}
                {{-- </div> --}}
                {{-- </a> --}}
                {{-- </div> --}}
                {{-- </div> --}}
                {{-- </div> --}}
            </div>
        </div>
    </section>

    {{-- OUR PACKAGE --}}
    <section class="container-fluid" id="paket-honeymoon">
        <div class="text-center mb-5" style="margin-top: 7rem">
            <a class="sukmatrip" style="color: black">SUKMATRIP</a>
            <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
        </div>
        <p class="text-center f26">Honeymoon Bareng <a class="t-accent">Sukmatrip</a></p>
        <p style="font-weight: 300; color: #636363;" class="text-center f14 container">Sukmatrip mempunyai banyak
            pilihan paket honeymoon, atau kamu bisa pilih sendiri paket honeymoon, hotel dan trip sesuai seleramu!</p>

    </section>

    <section class="container" >
        <div class="text-center mt-5 mb-5">
            <a class="sukmatrip" style="color: black">PAKET HONEYMOON KAMI</a>
            <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
        </div>

        <div class="row">
            @foreach ($pakets as $paket)
                <div class="col-md-3 col-sm-12">
                    <a class="gen-card-produk" href="/detail-paket/{{ $paket->id }}">
                        <img src="{{ $paket->getImage[0]->image->url }}">
                        <div class="cover-black-bottom"></div>
                        <div class="content">
                            <p class="t-accent f08 text-center">{{ $paket->nama }}</p>
                            <hr style="width: 3em; border-color: white;" class="mb-2">
                            <p class="text-white f18 mb-0">Rp. {{ number_format($paket->harga, 0, ',', '.') }}</p>
                            <p style="font-weight: 300;" class="text-white f10 mb-1">per couple</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <i data-feather="clock" class="icons"></i>
                                <p style="font-weight: 300;" class="text-white f10 mb-0">
                                    {{ $paket->duration->name ?? '' }}</p>


                            </div>
                            <br>
                            <button class=" t-accent "
                                style="z-index: 10000; background-color: rgba(201, 76, 76, 0.0); border: 1px solid #FDD100;">Lihat
                                Detail</button>


                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </section>

    <section class="mt-5 container-fluid" style="height: 35em; position:relative;">
        <img class="image-as-bg" src="{{ asset('assets/img/foto/sukmatrip2.jpg') }}">
        <div class="cover-black-all"></div>
        <div class="d-flex justify-content-center align-items-center h-100 flex-column front">
            <p class="sukmatrip mb-0">SUKMATRIP</p>
            <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
            <p class="text-center text-white f36 mt-2">Yuk Trip dengan <a class="t-accent">Sukmatrip</a></p>
            <p style="font-weight: 300" class="text-white text-center f14 container">Enjoy, Travel, <a
                    class="t-accent">Relax</a>
            </p>
        </div>
    </section>

    <section class="container mt-5 text-center">
        <div style="margin-top: 7em;" class="text-center mb-5">
            <a class="sukmatrip" style="color: black">Artikel</a>
            <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">

        </div>
        <p class="text-center f26 mb-5">Artikel <a class="t-accent">Terbaru</a></p>

        <div class="row">
            @foreach ($articles as $a)
                <div class="col-sm-12 col-md-4">
                    <a class="gen-card-article-page d-block" href="/article/{{ $a->id }}">
                        @foreach ($a->getImage as $img)
                            <img src={{ $img->image->url }}>
                        @endforeach

                        <p class="judul mt-2">{{ $a->judul }}</p>
                        {{-- <p class="sumber">Artikel Dari</p> --}}
                    </a>
                </div>
            @endforeach

        </div>

    </section>
    <hr style="border-color: var(--accentColor); margin-top: 7em;" class="container">

    <section class="container mt-5 text-center">
        <div class="text-center mb-4" style="margin-top: 7rem">
            <a class="sukmatrip" style="color: black">Testimoni</a>
            <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
        </div>
        <p class="text-center f26 mb-3">Testimoni dari <a class="t-accent">klien kami:</a></p>

        <div class="slick-fade">
            <div class="ulasan mt-0 d-flex flex-column align-items-center justify-content-center">
                <img src="{{ asset('assets/img/foto/1.png') }}" style="border-radius: 50%; width: 7em; height: 7em">
                <p style="color: #636363; font-weight: 300" class="mt-3 f14">Sangat menyenanggkan sekali honeymoon
                    bersama sukmatrip.</p>
                <p style="color: black;" class="f12">.</p>
            </div>

            <div class="ulasan mt-0 d-flex flex-column align-items-center justify-content-center">
                <img src="{{ asset('assets/img/foto/2.png') }}" style="border-radius: 50%; width: 7em; height: 7em">
                <p style="color: #636363; font-weight: 300" class="mt-3 f14">Tidak bisa di lupakan honeymoon bersama
                    sukmatrip, terima kasih sukmatrip.</p>
                <p style="color: black;" class="f12">.</p>
            </div>


        </div>
    </section>
@endsection

@section('script')
    <script src="{{ asset('assets/vendor/slick/slick.js') }}"></script>

    <script>
        $('.slick-fade').slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear'
        });

        $(document).ready(function() {
            $('#btn-search').on('click', function(e) {
                e.preventDefault();
                let destionationId = $('#destinasi').val();
                let type = $('#tipePenginapan').val();
                let durationId = $('#durasi').val();
                window.location.href = '/pencarian?destination=' + destionationId + '&type=' + type +
                    '&duration=' + durationId;
            });
        })
    </script>
@endsection
