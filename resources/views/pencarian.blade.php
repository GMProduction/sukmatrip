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
        <p style="font-weight: 300; color: #636363;" class="text-center f14 container" id="search">Take a look at the
            most exclusive & most visited locations in the world
            - hand-picked just for you. Start traveling the world today!</p>

    </section>

    <section class="container" id="ourProperty">
        <div class="text-center mt-5 mb-5">
            <a class="sukmatrip" style="color: black">OUR HOTEL</a>
            <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
        </div>

        <div class="row" id="panel-product">
            @foreach($products as $v)
            <div class="col-md-3 col-sm-12">
                <a class="gen-card-produk" href="/detail/{{ $v->id }}">
                    <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                    <div class="cover-black-bottom"></div>
                    <div class="content">
                        <p class="text-white f12">{{ $v->nama }}</p>
                        <hr style="width: 3em; border-color: white;" class="mb-2">
                    </div>
                </a>
            </div>
            @endforeach
        </div>

{{--        <div class="text-center mt-4 mb-5">--}}
{{--            <a class="bt-outline-primary f10" href="#">LOAD MORE</a>--}}
{{--        </div>--}}
    </section>


@endsection

@section('script')
    <script>
        async function getProducts(destination, type, duration) {
            let el = $('#panel-product');
            let param = {destination, type, duration};
            el.empty();
            el.append('<div class="spinner-border text-info" role="status">\n' +
                '  <span class="sr-only">Loading...</span>\n' +
                '</div>')
            let response = await $.get('/ajax-search-products', param);
            if (response['status'] === 200) {
                el.empty();
                $.each(response['payload'], function (k, v) {
                    let {nama, id} = v;
                    let content = '<div class="col-md-3 col-sm-12 panel-target" >' +
                        '<a class="gen-card-produk" data-id="' + id + '">' +
                        '<img src="assets/img/foto/sukmatrip1.png">' +
                        '<div class="cover-black-bottom"></div>' +
                        '<div class="content">' +
                        '<p class="text-white f12">' + nama + '</p>' +
                        '<hr style="width: 3em; border-color: white;" class="mb-2">' +
                        '</div>' +
                        '</a>' +
                        '</div>';
                    el.append(
                        content
                    )
                })
                $('.gen-card-produk').on('click', function () {
                    let id = this.dataset.id;
                    window.location.href = '/detail/' + id;
                })

            } else {
                alert('Failed To Load Products!')
            }
            console.log(response);
        }

        $(document).ready(function () {
            {{--let destination = '{{ request()->get('destination') }}';--}}
            {{--let type = '{{ request()->get('type') }}';--}}
            {{--let duration = '{{ request()->get('duration') }}';--}}
            {{--getProducts(destination, type, duration);--}}
        });
    </script>

@endsection
