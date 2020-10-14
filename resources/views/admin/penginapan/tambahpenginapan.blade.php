@extends('admin.base')
@section('morecss')
    <link rel="stylesheet" href="{{asset('assets/css/etc/basic.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/etc/dropzone.min.css')}}" type="text/css">
@endsection
@section('content')
    @if(\Illuminate\Support\Facades\Session::has('success'))
        <script>
            Swal.fire({
                title: 'Success',
                text: 'Berhasil Menyimpan Data',
                icon: 'success',
                confirmButtonText: 'Ok'
            })
        </script>
    @endif
    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Tambah Data Penginapan</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/admin/penginapan">Data Penginapan</a></li>
                                <li class="breadcrumb-item"><a href="#">Tambah Data</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-5 text-right">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">

                    <div class="card-body">
                        <form action="" id="formData" method="POST" onsubmit="return cekData()">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">Data</h6>
                            <div class="pl-lg-4">

                                <div class="row">

                                    <div class="col-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="namaPenginapan">Nama Penginapan</label>
                                            <input type="text" id="namaPenginapan" name="namaPenginapan"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group col-6 col-md-6 col-sm-12">
                                        <label for="bahanPenginapan">Tipe Penginapan</label>
                                        <select class="form-control" id="tipePenginapan" name="tipePenginapan">
                                            <option value="Hotel">Hotel</option>
                                            <option value="Vila">Villa</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-3 col-md-3 col-sm-12">
                                        <label for="bahanPenginapan">Durasi</label>
                                        <select class="form-control" id="durasi" name="durasi">
                                            <option value="">Pilih Durasi</option>
                                            @foreach($durasi as $p)
                                                <option value="{{ $p->id }}">{{ $p->name }} ({{$p->qty_trip }} Tour)</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-3 col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label for="tebal">Harga /malam</label>
                                            <input type="text" id="hargaPenginapan" name="hargaPenginapan"
                                                   class="form-control price">
                                        </div>
                                    </div>

                                    <div class="form-group col-6 col-md-6 col-sm-12">
                                        <label for="bahanPenginapan">Destinasi</label>
                                        <select class="form-control" id="destinasi" name="destinasi">
                                            <option value="">Pilih Destinasi</option>
                                            @foreach($destinasi as $p)
                                                <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Lokasi</label>
                                            <textarea class="form-control" name="lokasi" id="lokasi" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Deskripsi</label>
                                            <textarea class="form-control" name="deskripsiPenginapan" id="deskripsiPenginapan" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <!-- Description -->
                            <div class="col-12 text-right" id="myId">
                                <a href="/admin/penginapan" type="submit" class="btn btn-lg btn-danger">Cancel</a>
                                <button type="submit" onclick="addImg()" class="btn btn-lg btn-primary">Simpan</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')
    <script src="{{asset('assets/js/etc/dropzone.min.js')}}"></script>
    {{--    <script src="{{asset('assets/js/etc/dropzone-amd-module.min.js')}}"></script>--}}

    <script type="text/javascript">
        currencyClass('price');
        function cekData() {
            Swal.fire({
                title: 'Apakah data yang anda masukkan sudah benar ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak'
            }).then(async (result) => {
                if (result.value) {
                    document.getElementById('formData').submit();
                }
            });
            return false;
        }

    </script>
@endsection
