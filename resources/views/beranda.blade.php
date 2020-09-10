@extends('base')
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
                            <label for="destinasi" class="text-white">Destination</label>
                            <select class="sukmatrip-form-control" id="destinasi" name="destinasi">
                                <option class="dropdown-item" value="hotel">All Destination</option>
                                <option class="dropdown-item" value="hotel">Bali</option>
                                <option class="dropdown-item" value="villa">Lombok</option>
                            </select>
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <label for="tipePenginapan" class="text-white">Category</label>
                            <select class="sukmatrip-form-control" id="tipePenginapan" name="tipePenginapan">
                                <option class="dropdown-item" value="hotel">All Category</option>
                                <option class="dropdown-item" value="hotel">Hotel</option>
                                <option class="dropdown-item" value="villa">Villa</option>
                            </select>
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <label for="durasi" class="text-white">Duration</label>
                            <select class="sukmatrip-form-control" id="durasi" name="durasi">
                                <option class="dropdown-item" value="hotel">All Duration</option>
                                <option class="dropdown-item" value="villa">3 Days 2 Nights</option>
                                <option class="dropdown-item" value="villa">4 Days 3 Nights</option>
                                <option class="dropdown-item" value="villa">5 Days 4 Nights</option>
                            </select>
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
        <p class="text-center f26">It's Time to <a class="t-accent">Travel</a></p>
        <p style="font-weight: 300; color: #636363;" class="text-center f14 container">Take a look at the most exclusive & most visited locations in the world
            - hand-picked just for you. Start traveling the world today!</p>

    </section>

    <section class="container">
        <div class="text-center mt-5 mb-5">
            <a class="sukmatrip" style="color: black">OUR HOTEL</a>
            <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
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
        </div>

    </section>

    <section class="mt-5 container-fluid" style="height: 35em; position:relative;">
       <img class="image-as-bg" src="{{asset('assets/img/foto/sukmatrip2.jpg')}}">
        <div class="cover-black-all"></div>
        <div class="d-flex justify-content-center align-items-center h-100 flex-column front">
            <p class="sukmatrip mb-0">SUKMATRIP</p>
            <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
            <p class="text-center text-white f36 mt-2">About <a class="t-accent">us</a></p>
            <p style="font-weight: 300" class="text-white text-center f14 container">Passionate about travel
                and sharing the world's wonders on the leisure travel side. We provide corporate travelers hitouch services to
                facilitate their business travel needs. Named each year as one of the <a class="t-accent">"Best Places To Work"</a> in New York.</p>
        </div>
    </section>

    <section class="container mt-5 text-center">
        <div style="margin-top: 7em;" class="text-center mb-5">
            <a class="sukmatrip" style="color: black">ARTICLE</a>
            <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">

        </div>
        <p class="text-center f26 mb-5">Lastest from the <a class="t-accent">Article</a></p>

        <div class="row">
            <div class="col-sm-12 col-md-3">
                <a class="gen-card-article">
                    <img src="{{asset('assets/img/foto/konten2.jpg')}}">
                    <p class="judul mt-2">INI TEXT</p>
                    <p style="margin-top: -0.5em" class="sumber">Sumbernya</p>
                </a>
            </div>
            <div class="col-sm-12 col-md-3">
                <a class="gen-card-article">
                    <img src="{{asset('assets/img/foto/konten2.jpg')}}">
                    <p class="judul mt-2">INI TEXT</p>
                    <p style="margin-top: -0.5em" class="sumber">Sumbernya</p>
                </a>
            </div>
            <div class="col-sm-12 col-md-3">
                <a class="gen-card-article">
                    <img src="{{asset('assets/img/foto/konten2.jpg')}}">
                    <p class="judul mt-2">INI TEXT</p>
                    <p style="margin-top: -0.5em" class="sumber">Sumbernya</p>
                </a>
            </div>
            <div class="col-sm-12 col-md-3">
                <a class="gen-card-article">
                    <img src="{{asset('assets/img/foto/konten2.jpg')}}">
                    <p class="judul mt-2">INI TEXT</p>
                    <p style="margin-top: -0.5em" class="sumber">Sumbernya</p>
                </a>
            </div>
        </div>

    </section>
    <hr style="border-color: var(--accentColor); margin-top: 7em;" class="container">

    <section class="container mt-5 text-center">
        <div class="text-center mb-4" style="margin-top: 7rem">
            <a class="sukmatrip" style="color: black">TESTIMONIALS</a>
            <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
        </div>
        <p class="text-center f26 mb-3">Our client <a class="t-accent">says:</a></p>
        <div class="ulasan mt-0 " style="display: flex; flex-direction: column; align-items: center">
            <img src="{{asset('assets/img/foto/user1.jpg')}}" style="border-radius: 50%; width: 7em; height: 7em">
            <p style="color: #636363; font-weight: 300" class="mt-3 f14">Extremelly flexible and easy to use. Code is clean and all files well organized. Great job guys.</p>
            <p style="color: black;" class="f12">JOHN E. PERRY.</p>
        </div>
    </section>



@endsection

@section('script')


@endsection
