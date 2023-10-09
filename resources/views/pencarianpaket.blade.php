@extends('base')

@section('moreCss')
    <link rel="stylesheet" href="{{ asset('assets/vendor/slick/slick.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/slick/slick-theme.css') }}" type="text/css">
@endsection

@section('content')
    {{-- BIG IMAGE --}}

    <style>
        html {
            scroll-behavior: smooth;
        }
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
            height: 75px;
            width: 75px;
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


    <section class="container">
        <div class="text-center mt-5 mb-5">
            <a class="sukmatrip" style="color: black">PAKET HONEYMOON KAMI</a>
            <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
        </div>


        <div class="d-flex mb-5 mt-3">
            <div class="mr-3 flex-fill">
                <label>Durasi Trip</label>
                <select class="custom-select">
                    <option selected>Semua Durasi</option>
                    <option value="1">2 Hari 1 Malam</option>
                    <option value="2">3 Hari 2 Malam</option>
                    <option value="3">4 Hari 3 Malam</option>
                </select>
            </div>
            <div class="mr-3 flex-fill">
                <label>Urutkan Berdasar</label>
                <select class="custom-select">
                    <option selected>Pilih Urutan</option>
                    <option value="1">Durasi</option>
                    <option value="2">Harga</option>
                </select>
            </div>

            <div>
                <a class="d-block btn btn-warning  mt-3 text-center p-3 cursor" style="width: 100%; ">Terapkan
                    Pencarian</a>
            </div>
        </div>


        <div class="row">
            @foreach ($pakets ?? '' as $paket)
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
