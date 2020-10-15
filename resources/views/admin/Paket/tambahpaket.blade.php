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
                        <h6 class="h2 text-white d-inline-block mb-0">Tambah Data Paket</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/admin/paket">Data Paket</a></li>
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

                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="namaPaket">Nama Paket</label>
                                            <input type="text" id="namaPaket" name="namaPaket"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <label  for="tebal">Harga</label>
                                            <input type="text" id="hargaPaket" name="hargaPaket"
                                                   class="form-control price">
                                        </div>
                                    </div>

                                    <div class="form-group col-4">
                                        <label for="bahanPaket">Durasi</label>
                                        <select class="form-control" id="durasiPaket" name="durasiPaket">
                                            <option value="2hari1malam">2 Hari 1 Malam</option>
                                            <option value="3hari2malam">3 Hari 2 Malam</option>
                                            <option value="4hari3malam">4 Hari 3 Malam</option>
                                        </select>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Deskripsi</label>
                                            <textarea class="form-control" id="deskripsiPaket" name="deskripsiPaket" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <a>Foto</a>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="fotoGallery"
                                                   name="fotoGallery" lang="en">
                                            <label class="custom-file-label" for="gambar">Select file</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mt-4">
                                        <div class="form-group ">
                                            <label for="namaPenginapan">Pilih Penginapan</label>
                                            <div class="d-flex justify-content-center">
                                                <select class="form-control" id="penginapanSelect" name="penginapan" onchange="setTour(this)">
                                                    <option value="">Pilih Penginapan</option>
                                                    @foreach($penginapan as $p)
                                                        <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mt-4">
                                        <div class="form-group ">
                                            <label for="namaPenginapan">Pilih Tour</label>
                                            <div class="d-flex justify-content-center">
                                                <select class="" id="tourSelect" name="tour[]" multiple="multiple">

                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- Description -->
                            <div class="col-12 mt-1 text-right"id="myId">
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

        $(document).ready(function() {
            $('#penginapanSelect').select2();
            $('#tourSelect').select2();
            currencyClass('price');
        });

        function setTour(a) {
            var select = $('#tourSelect');
            select.empty();
            $.get('/admin/paket/get-tour/'+$(a).val(), function (data) {
                $.each(data['payload'], function (key, value) {
                    select.append('<option value="'+value['id']+'">'+value['nama']+'</option>')
                });
                $('#tourSelect').select2();
            })
        }
    </script>
@endsection
