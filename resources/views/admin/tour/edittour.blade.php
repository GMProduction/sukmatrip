@extends('admin.base')
@section('morecss')
    <link rel="stylesheet" href="{{asset('assets/css/etc/basic.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/etc/dropzone.css')}}" type="text/css">
@endsection
@section('content')

    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Edit Data Tour</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/mitra/tour">Data Tour</a></li>
                                <li class="breadcrumb-item"><a href="#">Edit Data</a></li>
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
                        <form action="/mitra/tour/store" method="POST">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">Data</h6>
                            <div class="pl-lg-4">
                                <div class="row">

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="namaTour">Nama Tour</label>
                                            <input type="text" id="namaTour" name="namaTour"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label  for="tebal">Harga /hari</label>
                                            <input type="number" id="hargaTour" name="hargaTour"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Deskripsi</label>
                                            <textarea class="form-control" id="deskripsiTour" rows="3"></textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Description -->
                            <div class="col-12 text-right">
                                <button type="button" class="btn btn-lg btn-danger" data-toggle="modal" data-target=".bd-example-modal-lg">Unggah Foto</button>
                                <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
                            </div>
                        </form>

                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Upload Foto</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/assets/upload/tour" class="dropzone"></form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <button type="button" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">

                    <div class="card-body">
                        <form action="/mitra/tour/store" method="POST">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">Foto</h6>
                            <div class="pl-lg-4">

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
@endsection
