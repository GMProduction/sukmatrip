@extends('base')

@section('moreCss')
    <link rel="stylesheet" href="{{asset('assets/vendor/slick/slick.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/vendor/slick/slick-theme.css')}}" type="text/css">
@endsection

@section('content')

    {{--    BIG IMAGE--}}
    <section>
        <div class="gambar-depan" style="background-image: url({{asset('assets/img/foto/sukmatrip1.png')}})">
            <div class="gradien-putih"></div>
            <div class="transparent-hitam"></div>

            <div class="d-flex justify-content-center align-items-center h-100 flex-column">
                <p class="sukmatrip mb-0">SUKMATRIP</p>
                <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
                <p style="font-size: 4rem; color: white; z-index: 3">CARI TOUR IMPIAN ANDA</p>
                <div class="container-fluid w-50" style="z-index: 3">
                    <div class="row mt-5">
                        <div class="col-lg-4 col-md-12">
                            <label for="destinasi" class="text-white">Destinasi</label>
                            <select class="sukmatrip-form-control" id="destinasi" name="destinasi">
                                <option class="sukmatrip-dropdown-item" value="all">Semua Destinasi</option>
                                @foreach($destinations as $v)
                                    <option class="sukmatrip-dropdown-item" value="{{ $v->id }}">{{ $v->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <label for="tipePenginapan" class="text-white">Kategori</label>
                            <select class="sukmatrip-form-control" id="tipePenginapan" name="tipePenginapan">
                                <option class="dropdown-item" value="all">Semua Kategori</option>
                                <option class="dropdown-item" value="Hotel">Hotel</option>
                                <option class="dropdown-item" value="Vila">Villa</option>
                            </select>
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <label for="durasi" class="text-white">Durasi</label>
                            <select class="sukmatrip-form-control" id="durasi" name="durasi">
                                @foreach($durations as $duration)
                                    <option class="dropdown-item"
                                            value="{{ $duration->id }}">{{ $duration->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="offset-lg-4 col-lg-4 col-md-12">
                            <a id="btn-search" class="d-block text-center" href="#">
                                <div class="bt-search">
                                    <i data-feather="search" class="mr-2" style="width: 1.3rem; height: 1.3rem"></i>
                                    <p class="mb-0">Cari</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--    OUR PACKAGE--}}
    <section class="container-fluid">
        <div class="text-center mb-5" style="margin-top: 7rem">
            <a class="sukmatrip" style="color: black">SUKMATRIP</a>
            <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
        </div>
        <p class="text-center f26">Honeymoon Bareng <a class="t-accent">Sukmatrip</a></p>
        <p style="font-weight: 300; color: #636363;" class="text-center f14 container">Sukmatrip mempunyai banyak pilihan paket honeymoon, atau kamu bisa pilih sendiri paket honeymoon, hotel dan trip sesuai seleramu!</p>

    </section>

    <section class="container">
        <div class="text-center mt-5 mb-5">
            <a class="sukmatrip" style="color: black">PAKET HONEYMOON KAMI</a>
            <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
        </div>

        <div class="row">
            @foreach($pakets as $paket)
                <div class="col-md-3 col-sm-12">
                    <a class="gen-card-produk">
                        <img src="{{ $paket->getImage[0]->image->url }}">
                        <div class="cover-black-bottom"></div>
                        <div class="content">
                            <p class="t-accent f08">{{ $paket->nama }}</p>
                            <hr style="width: 3em; border-color: white;" class="mb-2">
                            <p class="text-white f18">Rp. {{ number_format($paket->harga, 0, ',', '.') }}</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <i data-feather="clock" class="icons"></i>
                                <p style="font-weight: 300;"
                                   class="text-white f10 mb-0">{{ $paket->penginapan->duration->name }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </section>

    <section class="mt-5 container-fluid" style="height: 35em; position:relative;">
        <img class="image-as-bg" src="{{asset('assets/img/foto/sukmatrip2.jpg')}}">
        <div class="cover-black-all"></div>
        <div class="d-flex justify-content-center align-items-center h-100 flex-column front">
            <p class="sukmatrip mb-0">SUKMATRIP</p>
            <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
            <p class="text-center text-white f36 mt-2">Yuk Trip dengan <a class="t-accent">Skumatrip</a></p>
            <p style="font-weight: 300" class="text-white text-center f14 container">Enjoy, Travel, <a class="t-accent">Relax</a></p>
        </div>
    </section>

    <section class="container mt-5 text-center">
        <div style="margin-top: 7em;" class="text-center mb-5">
            <a class="sukmatrip" style="color: black">Artikel</a>
            <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">

        </div>
        <p class="text-center f26 mb-5">Artikel  <a class="t-accent">Terbaru</a></p>

        <div class="row">
{{--            <div class="col-sm-12 col-md-3">--}}
{{--                <a class="gen-card-article">--}}
{{--                    <img src="{{asset('assets/img/foto/konten2.jpg')}}">--}}
{{--                    <p class="judul mt-2">INI TEXT</p>--}}
{{--                    <p style="margin-top: -0.5em" class="sumber">Sumbernya</p>--}}
{{--                </a>--}}
{{--            </div>--}}

            <p style="font-weight: 300" class="text-center f14 container">Belum ada artikel</p>

        </div>

    </section>
    <hr style="border-color: var(--accentColor); margin-top: 7em;" class="container">

    <section class="container mt-5 text-center">
        <div class="text-center mb-4" style="margin-top: 7rem">
            <a class="sukmatrip" style="color: black">Testimoni</a>
            <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
        </div>
        <p class="text-center f26 mb-3">Testimoni dari  <a class="t-accent">klien kami:</a></p>

        <div class="slick-fade">
            <div class="ulasan mt-0 d-flex flex-column align-items-center justify-content-center">
                <img src="{{asset('assets/img/foto/user1.jpg')}}" style="border-radius: 50%; width: 7em; height: 7em">
                <p style="color: #636363; font-weight: 300" class="mt-3 f14">Sangat menyenanggkan sekali honeymoon bersama sukmatrip.</p>
                <p style="color: black;" class="f12">Bagus Yanuar.</p>
            </div>

            <div class="ulasan mt-0 d-flex flex-column align-items-center justify-content-center">
                <img src="{{asset('assets/img/foto/user1.jpg')}}" style="border-radius: 50%; width: 7em; height: 7em">
                <p style="color: #636363; font-weight: 300" class="mt-3 f14">Harga sangat terjangkau, terima kasih sukmatrip.</p>
                <p style="color: black;" class="f12">Taufik Muhajir.</p>
            </div>


        </div>
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

        $(document).ready(function () {
            $('#btn-search').on('click', function (e) {
                e.preventDefault();
                let destionationId = $('#destinasi').val();
                let type = $('#tipePenginapan').val();
                let durationId = $('#durasi').val();
                window.location.href = '/pencarian?destination=' + destionationId + '&type=' + type + '&duration=' + durationId;
            });
        })
    </script>
@endsection
