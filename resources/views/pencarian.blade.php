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
                                <option class="sukmatrip-dropdown-item" value="hotel">All Destination</option>
                                <option class="sukmatrip-dropdown-item" value="hotel">Bali</option>
                                <option class="sukmatrip-dropdown-item" value="villa">Lombok</option>
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
                    <div class="row mt-5">
                        <div class="offset-lg-4 col-lg-4 col-md-12">
                            <a class="d-block text-center">
                                <div class="bt-search">
                                    <i data-feather="search" class="mr-2" style="width: 1.3rem; height: 1.3rem"></i>
                                    <p class="mb-0">Search</p>
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
        <p class="text-center f26">It's Time to <a class="t-accent">Travel</a></p>
        <p style="font-weight: 300; color: #636363;" class="text-center f14 container" id="search">Take a look at the most exclusive & most visited locations in the world
            - hand-picked just for you. Start traveling the world today!</p>

    </section>

    <section class="container" id="ourProperty">
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
                        <p class="text-white f12">SINI VIE VILLA</p>
                        <hr style="width: 3em; border-color: white;" class="mb-2">
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-12">
                <a class="gen-card-produk">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <div class="cover-black-bottom"></div>
                    <div class="content">
                        <p class="text-white f12">SINI VIE VILLA</p>
                        <hr style="width: 3em; border-color: white;" class="mb-2">
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-12">
                <a class="gen-card-produk">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <div class="cover-black-bottom"></div>
                    <div class="content">
                        <p class="text-white f12">SINI VIE VILLA</p>
                        <hr style="width: 3em; border-color: white;" class="mb-2">
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-12">
                <a class="gen-card-produk">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <div class="cover-black-bottom"></div>
                    <div class="content">
                        <p class="text-white f12">SINI VIE VILLA</p>
                        <hr style="width: 3em; border-color: white;" class="mb-2">
                    </div>
                </a>
            </div>
        </div>

        <div class="text-center mt-4 mb-5">
            <a  class="bt-outline-primary f10" href="#">LOAD MORE</a>
        </div>
    </section>


@endsection

@section('script')


@endsection
