@extends('admin.base')
@section('morecss')
    <style>
        .select2-container .select2-selection--single {
                height: 46px !important;
        }
    </style>

    <link rel="stylesheet" href="{{asset('assets/css/etc/basic.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/etc/dropzone.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/etc/select2.min.css')}}" type="text/css">
    @endsection
@section('content')

    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Detail Data Paket</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/mitra/paket">Data Paket</a></li>
                                <li class="breadcrumb-item"><a href="#">Detail Data</a></li>
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
                        <form action="/mitra/paket/store" method="POST">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">Data</h6>
                            <div class="pl-lg-4">
                                <div class="row">

                                    <div class="col-lg-12 mb-4">
                                        <a class="d-block">Foto</a>
                                        <img style="height: auto; width: 20em" src="{{asset('assets/img/siniVieVilla/1.jpg')}}">
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="namaPaket">Nama Paket</label>
                                            <input readonly type="text" id="namaPaket" name="namaPaket"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <label  for="tebal">Harga</label>
                                            <input readonly type="number" id="hargaPaket" name="hargaPaket"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group col-4">
                                        <label for="bahanPaket">Durasi</label>
                                        <input readonly type="text" id="durasiPaket" name="durasiPaket"
                                               class="form-control">
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Deskripsi</label>
                                            <textarea readonly class="form-control" id="deskripsiPaket" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mt-4">
                                        <div class="form-group ">
                                            <label for="namaPenginapan">Pilih Penginapan</label>
                                            <div class="d-flex justify-content-center">
                                                <input readonly type="number" id="hargaPaket" name="hargaPaket"
                                                       class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mt-4">
                                        <div class="form-group ">
                                            <label for="namaPenginapan">Pilih Tour</label>
                                            <div class="d-flex justify-content-center">
                                                <div class="table-responsive">
                                                    <table class="table align-items-center table-flush">
                                                        <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col" class="sort" data-sort="name">#</th>
                                                            <th scope="col" class="sort" data-sort="budget">Nama Tour</th>
                                                            <th scope="col" class="sort" data-sort="budget">Harga /hari</th>
                                                            <th scope="col" class="sort" data-sort="status">Foto</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody class="list">
                                                        <tr>

                                                            <td class="budget">
                                                                1
                                                            </td>

                                                            <td class="budget">
                                                                <p>Sini Vie Villa</p>
                                                            </td>

                                                            <td class="budget">
                                                                <p>Rp 1.987.600</p>
                                                            </td>

                                                            <td class="budget">

                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Description -->
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
    <script>$(document).ready(function() {
            $('.js-example-basic-single').select2();
        });</script>
    <script>$(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });</script>
@endsection
