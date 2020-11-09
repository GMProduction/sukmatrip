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
        @foreach($product->getImage as $v)
            <img src="{{ $v->image->url }}" style="object-fit: cover; width: 100%">
        @endforeach
    </section>

    {{--    OUR PACKAGE--}}
    <section class="container-fluid">
        <div class="text-center mt-4">
            <p style="font-weight: 500" class="text-center f22 mb-4">{{ $product->nama }}</p>
            <div class="d-flex justify-content-center align-items-center"
                 style="margin-top: -1em; color: var(--primaryColor)">
                <i data-feather="map-pin" class="mr-2"></i>
                <p class="mb-0 mr-4">{{ $product->penginapan->destinasi->nama}}</p>
                <i data-feather="clock" class="mr-2"></i>
                <p class="mb-0">{{ $product->penginapan->duration->name }}</p>
            </div>
            <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
        </div>
    </section>

    <section class="container mt-5 text-center">
        {!!  $product->deskripsi !!}
    </section>


    <section class="container mt-5">

        <p style="font-weight: 500" class="text-center f22">{{ $product->penginapan->tipe }}</p>
        <hr class="mb-4" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">

        <div class="slider-for">
            @foreach($product->penginapan->getImage as $img)
                <img src="">
                <a target="_blank" href="{{$img->image->url}}"><img
                        src="{{$img->image->url}}"></a>
            @endforeach
        </div>

        <div class="slider-nav mb-2">
            @foreach($product->penginapan->getImage as $img)
                <img src="{{$img->image->url}}">

            @endforeach
        </div>
    </section>

    <section class="container mt-5 text-center">
{{--        {{$product->penginapan}}--}}
        <div class="d-flex justify-content-center align-items-center mb-3"
             style="margin-top: -1em; color: var(--primaryColor)">
            <i data-feather="send" class="mr-2"></i>
            <p class="mb-0 mr-4">{{ $product->penginapan->nama}}</p>
            <i data-feather="map-pin" class="mr-2"></i>
            <p class="mb-0">{{ $product->penginapan->lokasi }}</p>
        </div>
        <div class="mt-5 text-center">        {!!  $product->penginapan->deskripsi !!}
        </div>
    </section>

    <section class="container " style="margin-top: 100px">
    <p style="font-weight: 500" class="text-center f22">Tour</p>
    <hr class="mb-4" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
{{--        {{$product}}--}}
    </section>

    <section class="mt-5 container-fluid d-flex justify-content-center align-items-center flex-column"
             style="height: 50em; position:relative;">
        <img class="image-as-bg" src="{{asset('assets/img/foto/sukmatrip4.jpg')}}">
        <div class="cover-black-all"></div>
        <div class="d-flex justify-content-center align-items-center cover-white flex-column front">
            <div class="d-flex justify-content-center align-items-center flex-column front"
                 style="width: 100%; padding: 5em 0">
                <p class="sukmatrip mb-0" style="color: black">FORM DATA</p>
                <hr class="mb-5" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
                <form id="form-submit" method="post">
                    <div class="row">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" id="jumlahOrang" name="qty" value="2">
                        <div class="offset-md-3 col-md-6 offset-sm-2 col-sm-8 offset-xs-2 col-xs-8 ">
                            <div class="form-group">
                                <label for="tanggalCheckIn">Tanggal Check In</label>
                                <input type="text" class="form-control form-data-input datepicker" id="tanggalCheckIn"
                                       aria-describedby="tanggalHelp" placeholder="Tanggal CheckIn*" name="check_in"
                                       required>
                            </div>
                        </div>

                        <div class="offset-3 col-6">
                            <div class="form-group">
                                <label for="nama">Nama Pemesan</label>
                                <input type="text" class="form-control form-data-input" id="nama"
                                       aria-describedby="namaHelp" placeholder="Nama*" name="pemesan" required>
                            </div>
                        </div>

                        <div class="offset-3 col-6">
                            <div class="form-group">
                                <label for="totalHarga">Harga Penginapan @</label>
                                <input type="text" readonly class="form-control form-data-input" id="totalHarga"
                                       aria-describedby="emailHelp" placeholder="Total Harga*" name="harga"
                                       value="{{ $product->harga }}">
                            </div>
                        </div>
                    </div>
                </form>


                <div class="text-center mt-4 mb-5">
                    <a id="btn-book" style="color: white; background: #4A4A4A; letter-spacing: .5rem;"
                       class="bt-primary f08">BOOK
                        NOW</a>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalKonfirmasi" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Pesanan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img src="{{asset('assets/img/foto/sukmatrip4.jpg')}}"
                             style="height: 10em; width: 100%; object-fit: cover">

                        <div class="text-center">
                            <p class="f12 bold text-primary mb-0 mt-2">Hotel Sri Wijaya</p>
                            <p class="f12 bold t-accent">3 Days 2 Night</p>
                            <div style="width: 10em" class="ml-auto mr-auto">
                                <hr>
                            </div>
                        </div>

                        <div class="d-flex justify-content-around">


                            <div class="text-center">
                                <p class="f10 mb-0">Check In</p>
                                <p class="f12 bold" id="str-chekcin">20 September 2020</p>


                                <p class="f10 mb-0">Untuk</p>
                                <p class="f12 bold" id="str-qty">2 Orang</p>


                            </div>

                            <div class="text-center">
                                <p class="f10 mb-0">Check Out</p>
                                <p class="f12 bold" id="str-chekout">23 September 2020 </p>

                                <p class="f10 mb-0">Total Harga</p>
                                <p class="f12 bold" id="str-total">Rp 5.000.000</p>
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <a type="button" class="btn btn-secondary" href="#" data-dismiss="modal">Batal</a>
                        <a type="button" id="btn-order" class="btn btn-primary"
                           href="https://wa.me/62838652740">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid">
        <div class="text-center mb-5" style="margin-top: 7rem">
            <a class="sukmatrip" style="color: black">SUKMATRIP</a>
            <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
        </div>
        <p class="text-center f26">Terms and <a class="t-accent">Conditions</a></p>
        <p style="font-weight: 300; color: #636363;" class="text-center f14 container">Take a look at the most exclusive
            & most visited locations in the world - hand-picked just for you.
            Start traveling the world today!</p>

    </section>



@endsection

@section('script')

    <script type="text/javascript" src="{{asset('assets/vendor/slick/slick.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>


    <script>

        $('.datepicker').datepicker({
            format: 'dd/mm/yyyy',
            startDate: '3d'
        });

        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            centerMode: false,
            focusOnSelect: true
        });
    </script>

    <script>
        var tgl = '', nama = '', qty = 0, harga = 0;
        var duration = '{{ $product->penginapan->duration->duration }}';

        function stringToDate(_date, _format, _delimiter) {
            var formatLowerCase = _format.toLowerCase();
            var formatItems = formatLowerCase.split(_delimiter);
            var dateItems = _date.split(_delimiter);
            var monthIndex = formatItems.indexOf("mm");
            var dayIndex = formatItems.indexOf("dd");
            var yearIndex = formatItems.indexOf("yyyy");
            var month = parseInt(dateItems[monthIndex]);
            month -= 1;
            var formatedDate = new Date(dateItems[yearIndex], month, dateItems[dayIndex]);
            return formatedDate;
        }

        function addDays(theDate, days) {
            return new Date(theDate.getTime() + days * 24 * 60 * 60 * 1000);
        }

        function formatUang(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        $(document).ready(function () {

            $(".checkbox-gambar").on("click", function (e) {
                var checkbox = $(this);
                if (!checkbox.is(":checked")) {
                    e.preventDefault();
                    return false;
                }
            });

            $('#btn-book').on('click', function () {
                tgl = $('#tanggalCheckIn').val();
                nama = $('#nama').val();
                qty = $('#jumlahOrang').val();
                harga = $('#totalHarga').val();
                if (tgl === '' || nama === '') {
                    alert('Mohon Periksa Kelengkapan Form Data!');
                } else {
                    $('#modalKonfirmasi').modal('show');
                }
            });

            $('#form-submit').submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: '/transaction-package-submit',
                    data: $(this).serialize(),
                    type: 'post',
                    success: function (data) {
                        if (data['status'] === 200) {
                            alert('Pesanan Anda Sudah Kami Terima. Mohon Konfirmasi Ke Admin!')
                            window.location.href = 'https://wa.me/62838652740';
                        } else {
                            alert(data['payload']);
                        }
                    },
                    error: function (data) {
                        alert('Maaf Terjadi Kesalahan Sistem, Periksa Kelengkapan Form Data.\n Jika Masih Mengalami Kendala Silahkan Menghubungi Admin Kami!');
                    }
                })
            });


            $('#btn-order').on('click', function (e) {
                e.preventDefault();
                $('#form-submit').submit();
            })

            $('#modalKonfirmasi').on('show.bs.modal', function (e) {
                let checkIn = stringToDate(tgl, 'dd/mm/yyyy', '/');
                let checkOut = addDays(checkIn, parseInt(duration));
                let checkInString = checkIn.toLocaleString('id-ID', {day: '2-digit', month: 'long', year: 'numeric'});
                let checkOutString = checkOut.toLocaleString('id-ID', {day: '2-digit', month: 'long', year: 'numeric'});
                $('#str-chekcin').html(checkInString);
                $('#str-chekout').html(checkOutString);
                $('#str-qty').html(qty + ' Orang');
                $('#str-total').html('Rp' + formatUang(harga));
            })
        });


        $("#buttonPlus").click(function () {
            if ($('#jumlahOrang').val() < 10) {
                var a = parseInt($('#jumlahOrang').val());
                a = isNaN(a) ? 0 : a;
                a++;
                $('#jumlahOrang').val(a);

            }
        });

        $("#buttonMinus").click(function () {
            if ($('#jumlahOrang').val() > 1) {
                var a = parseInt($('#jumlahOrang').val());
                a = isNaN(a) ? 0 : a;
                a--;
                $('#jumlahOrang').val(a);
            }
        });


    </script>
@endsection
