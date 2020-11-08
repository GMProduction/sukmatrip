@extends('admin.base')
@section('morecss')
    <link rel="stylesheet" href="{{asset('assets/css/etc/basic.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/etc/dropzone.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/etc/select2.min.css')}}" type="text/css">
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
                        <h6 class="h2 text-white d-inline-block mb-0">Tambah Data Durasi</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/admin/durasi">Data Durasi</a></li>
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
                        <form method="POST">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">Data</h6>
                            <div class="pl-lg-4">
                                <div class="row">

                                    <div class="col-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="namaPaket">Nama Durasi</label>
                                            <input type="text" id="namaDurasi" required name="namaDurasi" placeholder="3 Hari 2 Malam"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label  for="tebal">Durasi (Hari)</label>
                                            <input type="number" id="durasi" name="durasi" required placeholder="3"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label  for="tebal">Jumlah Trip / Tour</label>
                                            <input type="number" id="qty_trip" name="qty_trip" required placeholder="3"
                                                   class="form-control">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Description -->
                            <div class="col-12 mt-1 text-right"id="myId">
                                <a href="/admin/durasi" type="submit" class="btn btn-lg btn-danger">Cancel</a>
                                <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
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
    <script src="{{asset('assets/js/etc/dropzone-amd-module.min.js')}}"></script>
    <script src="{{asset('assets/js/etc/select2.min.js')}}"></script>
    <script>


    </script>
@endsection
