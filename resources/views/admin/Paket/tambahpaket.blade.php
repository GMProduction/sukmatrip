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
                        <h6 class="h2 text-white d-inline-block mb-0">Tambah Data Paket</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/mitra/paket">Data Paket</a></li>
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
                        <form action="/mitra/paket/store" method="POST">
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
                                            <input type="number" id="hargaPaket" name="hargaPaket"
                                                   class="form-control">
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
                                            <textarea class="form-control" id="deskripsiPaket" rows="3"></textarea>
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
                                                <input type="text" id="namaPenginapan" name="namaPenginapan"
                                                       class="form-control flex-grow-1 mr-2">
                                                <button type="button" class="btn btn-md btn-secondary" data-toggle="modal" data-target=".bd-pilihanPenginapan">Cari</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mt-4">
                                        <div class="form-group ">
                                            <label for="namaPenginapan">Pilih Tour</label>
                                            <div class="d-flex justify-content-center">
                                                <input type="text" id="namaPenginapan" name="namaPenginapan"
                                                       class="form-control flex-grow-1 mr-2">
                                                <button type="button" class="btn btn-md btn-secondary" data-toggle="modal" data-target=".bd-pilihanTour">Cari</button>
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

                        <div class="modal fade bd-pilihanPenginapan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Pilih Penginapan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-lg-12   ">
                                            <div class="form-group ">
                                                <label for="namaPenginapan">Pencarian</label>
                                                <div class="d-flex justify-content-center">
                                                    <input type="text" id="pencarianPenginapan" name="pencarianPenginapan"
                                                           class="form-control flex-grow-1 mr-2">
                                                    <button type="button" class="btn btn-md btn-secondary">Cari</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table align-items-center table-flush">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th scope="col" class="sort" data-sort="name">#</th>
                                                    <th scope="col" class="sort" data-sort="budget">Nama Penginapan</th>
                                                    <th scope="col" class="sort" data-sort="budget">Tipe</th>
                                                    <th scope="col" class="sort" data-sort="status">Action</th>
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
                                                        <p>Villa</p>
                                                    </td>

                                                    <td>
                                                        <a href="#" class="btn btn-sm btn-primary">Pilih</a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade bd-pilihanTour" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Pilih Tour</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-lg-12   ">
                                            <div class="form-group ">
                                                <label for="namaPenginapan">Pencarian</label>
                                                <div class="d-flex justify-content-center">
                                                    <input type="text" id="pencarianPenginapan" name="pencarianPenginapan"
                                                           class="form-control flex-grow-1 mr-2">
                                                    <button type="button" class="btn btn-md btn-secondary">Cari</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table align-items-center table-flush">
                                                <thead class="thead-light">
                                                <tr>
                                                    <th scope="col" class="sort" data-sort="name">#</th>
                                                    <th scope="col" class="sort" data-sort="budget">Nama Tour</th>
                                                    <th scope="col" class="sort" data-sort="budget">Harga /Hari</th>
                                                    <th scope="col" class="sort" data-sort="status">Action</th>
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

                                                    <td>
                                                        <a href="#" class="btn btn-sm btn-primary">Pilih</a>
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
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')
    <script src="{{asset('assets/js/etc/dropzone.min.js')}}"></script>
    <script src="{{asset('assets/js/etc/dropzone-amd-module.min.js')}}"></script>
@endsection
