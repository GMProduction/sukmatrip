@extends('base')
@section('content')

    {{--    BIG IMAGE--}}
    <section>
        <div class="gambar-depan" style="background-image: url({{asset('assets/img/foto/sukmatrip1.png')}})">
            <div class="gradien-putih">
            </div>

            <div class="d-flex justify-content-center align-items-center h-100 flex-column">
                <p class="sukmatrip">SUKMATRIP</p>
                <p style="font-size: 3rem; color: white; z-index: 3">CARI TOUR IMPIAN ANDA</p>
                <div class="container-fluid w-50" style="z-index: 3">
                    <div class="row ">
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
        <div class="text-center mt-5 mb-5">
            <a class="sukmatrip" style="color: black">SUKMATRIP</a>

        </div>
        <p class="text-center f18">It.s Time to Travel</p>
        <p class="text-center f10 text-black-50">Take a look at the most exclusive & most visited locations in the world
            - hand-picked just for you.
            Start traveling the world today!</p>

    </section>

    <section class="container">
        <div class="text-center mt-5 mb-5">
            <a class="sukmatrip" style="color: black">OUR HOTEL</a>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-12">
                <a class="gen-card-produk">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <div class="cover-black-bottom"></div>
                    <div class="content">
                        <p class="t-accent">PAKET SINI VIE VILLA</p>
                        <hr style="width: 3em; border-color: var(--accentColor)">
                        <p class="text-white f18 font-weight-600">Rp. 1.987.600</p>
                        <p class="text-white f12">3 Day 2 Night</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-12">
                <a class="gen-card-produk">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <div class="cover-black-bottom"></div>
                    <div class="content">
                        <p class="t-accent">PAKET SINI VIE VILLA</p>
                        <hr style="width: 3em; border-color: var(--accentColor)">
                        <p class="text-white f18 font-weight-600">Rp. 1.987.600</p>
                        <p class="text-white f12">3 Day 2 Night</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-12">
                <a class="gen-card-produk">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <div class="cover-black-bottom"></div>
                    <div class="content">
                        <p class="t-accent">PAKET SINI VIE VILLA</p>
                        <hr style="width: 3em; border-color: var(--accentColor)">
                        <p class="text-white f18 font-weight-600">Rp. 1.987.600</p>
                        <p class="text-white f12">3 Day 2 Night</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-12">
                <a class="gen-card-produk">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <div class="cover-black-bottom"></div>
                    <div class="content">
                        <p class="t-accent">PAKET SINI VIE VILLA</p>
                        <hr style="width: 3em; border-color: var(--accentColor)">
                        <p class="text-white f18 font-weight-600">Rp. 1.987.600</p>
                        <p class="text-white f12">3 Day 2 Night</p>
                    </div>
                </a>
            </div>

            <div class="col-md-3 col-sm-12">
                <a class="gen-card-produk">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <div class="cover-black-bottom"></div>
                    <div class="content">
                        <p class="t-accent">PAKET SINI VIE VILLA</p>
                        <hr style="width: 3em; border-color: var(--accentColor)">
                        <p class="text-white f18 font-weight-600">Rp. 1.987.600</p>
                        <p class="text-white f12">3 Day 2 Night</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-12">
                <a class="gen-card-produk">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <div class="cover-black-bottom"></div>
                    <div class="content">
                        <p class="t-accent">PAKET SINI VIE VILLA</p>
                        <hr style="width: 3em; border-color: var(--accentColor)">
                        <p class="text-white f18 font-weight-600">Rp. 1.987.600</p>
                        <p class="text-white f12">3 Day 2 Night</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-12">
                <a class="gen-card-produk">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <div class="cover-black-bottom"></div>
                    <div class="content">
                        <p class="t-accent">PAKET SINI VIE VILLA</p>
                        <hr style="width: 3em; border-color: var(--accentColor)">
                        <p class="text-white f18 font-weight-600">Rp. 1.987.600</p>
                        <p class="text-white f12">3 Day 2 Night</p>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-12">
                <a class="gen-card-produk">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <div class="cover-black-bottom"></div>
                    <div class="content">
                        <p class="t-accent">PAKET SINI VIE VILLA</p>
                        <hr style="width: 3em; border-color: var(--accentColor)">
                        <p class="text-white f18 font-weight-600">Rp. 1.987.600</p>
                        <p class="text-white f12">3 Day 2 Night</p>
                    </div>
                </a>
            </div>
        </div>

    </section>

    <section class="mt-5 container-fluid" style="height: 30em; position:relative;">
       <img class="image-as-bg" src="{{asset('assets/img/foto/sukmatrip1.png')}}">
        <div class="cover-black-all"></div>
        <div class="d-flex justify-content-center align-items-center h-100 flex-column front">
            <p class="sukmatrip">SUKMATRIP</p>
            <p class="f18 font-weight-bold text-white">About us</p>
            <p class="f10 text-white text-center text-tengah">Passionate about travel and sharing the world's wonders on the leisure travel side. We provide corporate travelers hi-touch services to facilitate their business travel needs. Named each year as one of the "Best Places To Work" in New York.</p>
        </div>
    </section>

    <section class="container mt-5 text-center">
        <div class="text-center mt-5 mb-5">
            <a class="sukmatrip" style="color: black">ARTICLE</a>
        </div>
        <p class="f14 font-weight-bold">Lastest from the Article</p>

        <div class="row">
            <div class="col-sm-12 col-md-3">
                <a class="gen-card-article">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <p class="judul">INI TEXT</p>
                    <p class="sumber">Sumbernya</p>
                </a>
            </div>
            <div class="col-sm-12 col-md-3">
                <a class="gen-card-article">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <p class="judul">INI TEXT</p>
                    <p class="sumber">Sumbernya</p>
                </a>
            </div>
            <div class="col-sm-12 col-md-3">
                <a class="gen-card-article">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <p class="judul">INI TEXT</p>
                    <p class="sumber">Sumbernya</p>
                </a>
            </div>
            <div class="col-sm-12 col-md-3">
                <a class="gen-card-article">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <p class="judul">INI TEXT</p>
                    <p class="sumber">Sumbernya</p>
                </a>
            </div>
        </div>

    </section>
    <hr style="border-color: var(--accentColor)" class="container">

    <section class="container mt-5 text-center">
        <div class="text-center mt-5 mb-5">
            <a class="sukmatrip" style="color: black">TESTIMONIALS</a>
        </div>
        <p class="f14 font-weight-bold">Our client says:</p>
        <div class="ulasan mt-3 " style="display: flex; flex-direction: column; align-items: center">
            <img src="{{asset('assets/img/foto/sukmatrip1.png')}}" style="border-radius: 50%; width: 7em; height: 7em">
            <p style="color: grey" class="mt-3">Extremelly flexible and easy to use. Code is clean and all files well organized. Great job guys.</p>
            <p style="color: black; font-weight: bold">JOHN E. PERRY.</p>
        </div>
    </section>



@endsection

@section('script')


@endsection
