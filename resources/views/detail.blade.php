@extends('base')

@section('moreCss')
    <link rel="stylesheet" href="{{asset('assets/vendor/slick/slick.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/vendor/slick/slick-theme.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.css')}}"
          type="text/css">
@endsection


@section('content')

    <div style="height: 8em"></div>
    <section class="container">
        <div class="slider-nav mb-2">
            <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
            <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
            <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
            <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
            <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
            <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
            <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">

        </div>

        <div class="slider-for">
            <a target="_blank" href="{{asset('assets/img/foto/sukmatrip1.png')}}"><img
                    src="{{asset('assets/img/foto/sukmatrip1.png')}}"></a>
            <a target="_blank" href="{{asset('assets/img/foto/sukmatrip1.png')}}"><img
                    src="{{asset('assets/img/foto/sukmatrip1.png')}}"></a>
            <a target="_blank" href="{{asset('assets/img/foto/sukmatrip1.png')}}"><img
                    src="{{asset('assets/img/foto/sukmatrip1.png')}}"></a>
            <a target="_blank" href="{{asset('assets/img/foto/sukmatrip1.png')}}"><img
                    src="{{asset('assets/img/foto/sukmatrip1.png')}}"></a>
            <a target="_blank" href="{{asset('assets/img/foto/sukmatrip1.png')}}"><img
                    src="{{asset('assets/img/foto/sukmatrip1.png')}}"></a>
            <a target="_blank" href="{{asset('assets/img/foto/sukmatrip1.png')}}"><img
                    src="{{asset('assets/img/foto/sukmatrip1.png')}}"></a>
            <a target="_blank" href="{{asset('assets/img/foto/sukmatrip1.png')}}"><img
                    src="{{asset('assets/img/foto/sukmatrip1.png')}}"></a>

        </div>
    </section>

    {{--    OUR PACKAGE--}}
    <section class="container-fluid">
        <div class="text-center mt-4">
            <p style="font-weight: 500" class="text-center f22">{{ $product->nama }}</p>
            <div class="d-flex justify-content-center align-items-center"
                 style="margin-top: -1em; color: var(--primaryColor)">
                <i data-feather="map-pin" class="mr-2"></i>
                <p class="mb-0 mr-4">{{ $product->lokasi }}, {{ $product->destinasi->nama }}</p>
                <i data-feather="clock" class="mr-2"></i>
                <p class="mb-0">{{ $product->duration->name }}</p>
            </div>
            <hr class="mb-2" style="z-index: 3; width: 5rem; border-top: 1px solid var(--accentColor);">
        </div>
    </section>

    <section class="container">
        <div class="text-center mt-5 mb-5">
            <p class="text-center f26">Pilih {{ $product->duration->qty_trip }} tour di bawah <a
                    class="t-accent">ini:</a></p>
        </div>

        <div class="row">
            @foreach($tours as $v)
                <div class="col-md-3 col-sm-12">
                    <input form="form-submit" class="checkbox-gambar" type="checkbox" name="tour[]"
                           id="opt-{{ $v->id }}"
                           value="{{ $v->id }}"
                    />
                    <label class="w-100" for="opt-{{ $v->id }}">
                        <div class="gen-card-produk">
                            <img src="{{asset('assets/img/foto/sukmatrip1.png')}}">
                            <div class="cover-black-bottom"></div>
                            <div class="content">
                                <p class="text-white f18">{{ $v->nama }}</p>
                            </div>
                        </div>
                        <i data-feather="check-square" class="chec"></i>
                    </label>
                </div>
            @endforeach
        </div>
    </section>

    <section class="mt-5 container-fluid d-flex justify-content-center align-items-center flex-column"
             style="height: 60em; position:relative;">
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
                        <div class="offset-md-3 col-md-6 offset-sm-2 col-sm-8 offset-xs-2 col-xs-8 ">
                            <div class="form-group">
                                <label for="tanggalCheckIn">Tanggal Check In</label>
                                <input type="text" class="form-control form-data-input datepicker" id="tanggalCheckIn"
                                       aria-describedby="tanggalHelp" placeholder="Tanggal CheckIn*" name="check_in"
                                       required>
                            </div>
                        </div>

                        <div class="offset-3 col-6">
                            <div class="form-group mb-0 mr-2 flex-grow-1">
                                <label for="jumlahOrang">Jumlah Orang</label>
                                <div class="d-flex align-items-stretch mb-3 ">
                                    <input type="number" class="form-control form-data-input mr-2" id="jumlahOrang"
                                           aria-describedby="jumlahOrangHelp" placeholder="Jumlah Orang*" value="1"
                                           name="qty"
                                           style="border-radius: 0px;">
                                    <div class="d-flex flex-row">
                                        <a style="color: white; background: var(--primaryColor); padding: 1em"
                                           id="buttonMinus"
                                           class="bt-primary f08 mr-2"><i data-feather="minus-circle"></i></a>

                                        <a style="color: white; background: var(--primaryColor); padding: 1em"
                                           id="buttonPlus"
                                           class="bt-primary f08 "><i data-feather="plus-circle"></i></a>
                                    </div>
                                </div>
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
                            <div class="offset-3 col-6">
                                <div class="form-group">
                                    <label for="totalHarga">Total Harga</label>
                                    <input type="text" readonly class="form-control form-data-input" id="totalHarga"
                                           aria-describedby="emailHelp" placeholder="Total Harga*">
                                </div>
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
        var duration = '{{ $product->duration->duration }}';

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
            let tourAvailable = '{{ $product->duration->qty_trip }}';
            $('.checkbox-gambar').on('click', function (e) {
                let tourEl = document.getElementsByName('tour[]');
                let tour = [];
                tourEl.forEach(el => {
                    if (el.checked) {
                        tour.push(el.value);
                    }
                });
                if (tour.length > parseInt(tourAvailable)) {
                    alert('Maksimal Jumlah Tour Yang Di pilih = ' + tourAvailable);
                    e.preventDefault();
                    e.stopPropagation();
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
                    url: '/transaction-submit',
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
                let total = qty * harga;

                let checkInString = checkIn.toLocaleString('id-ID', {day: '2-digit', month: 'long', year: 'numeric'});
                let checkOutString = checkOut.toLocaleString('id-ID', {day: '2-digit', month: 'long', year: 'numeric'});
                $('#str-chekcin').html(checkInString);
                $('#str-chekout').html(checkOutString);
                $('#str-qty').html(qty + ' Orang');
                $('#str-total').html('Rp' + formatUang(total));
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
