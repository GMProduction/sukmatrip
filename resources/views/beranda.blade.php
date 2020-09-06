@extends('base')
@section('content')

{{--    BIG IMAGE--}}
    <section >
        <div class="gambar-depan" style="background-image: url({{asset('assets/img/foto/sukmatrip1.png')}})">
            <div class="gradien-putih">
            </div>

            <div class="d-flex justify-content-center align-items-center h-100 flex-column">
                <p class="sukmatrip">SUKMATRIP</p>
                <p style="font-size: 3rem; color: white; z-index: 3">CARI TOUR IMPIAN ANDA</p>
                <div class="container-fluid w-50" style="z-index: 3">
                    <div class="row " >
                    <div class="col-lg-4 col-md-12">
                        <label for="destinasi" class="text-white">Destination</label>
                        <select class="sukmatrip-form-control" id="destinasi" name="destinasi">
                            <option class="dropdown-item" value="hotel">All Destination</option>
                            <option class="dropdown-item"  value="hotel">Bali</option>
                            <option class="dropdown-item"  value="villa">Lombok</option>
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
        <p class="text-center f10 text-black-50">Take a look at the most exclusive & most visited locations in the world - hand-picked just for you.
            Start traveling the world today!</p>

        <div class="text-center mt-5 mb-5">
            <a class="sukmatrip" style="color: black">OUR HOTEL</a>

        </div>
    </section>

@endsection

@section('script')


@endsection
