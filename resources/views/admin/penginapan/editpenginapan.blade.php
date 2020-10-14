@extends('admin.base')
@section('morecss')
    <link rel="stylesheet" href="{{asset('assets/css/etc/basic.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/etc/dropzone.css')}}" type="text/css">
@endsection
@section('content')
    @if(\Illuminate\Support\Facades\Session::has('success'))
        <script>
            Swal.fire({
                title: 'Success',
                text: 'Berhasil Merubah Data',
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
                        <h6 class="h2 text-white d-inline-block mb-0">Edit Data Penginapan</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/admin/penginapan">Data Penginapan</a></li>
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
                        <form method="POST">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">Data</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <input name="id" value="{{$penginapan->id}}" hidden>
                                    <div class="col-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="namaPenginapan">Nama Penginapan</label>
                                            <input type="text" id="namaPenginapan" name="namaPenginapan" value="{{$penginapan->nama}}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group col-6 col-md-6 col-sm-12">
                                        <label for="tipePenginapan">Tipe Penginapan</label>
                                        <select class="form-control" id="tipePenginapan" name="tipePenginapan">
                                            <option value="Hotel" {{$penginapan->tipe == 'Hotel' ? 'selected' : ''}}>Hotel</option>
                                            <option value="Vila" {{$penginapan->tipe == 'Vila' ? 'selected' : ''}}>Vila</option>
                                        </select>
                                    </div>

                                    <div class="col-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label for="hargaPenginapan">Harga /malam</label>
                                            <input type="number" id="hargaPenginapan" name="hargaPenginapan" value="{{$penginapan->harga}}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group col-6 col-md-6 col-sm-12">
                                        <label for="destinasi">Destinasi</label>
                                        <select class="form-control" id="destinasi" name="destinasi">
                                            <option value="">Pilih Destinasi</option>
                                            @foreach($destinasi as $p)
                                                <option value="{{ $p->id }}" {{$p->id == $penginapan->destinasi->id ? 'selected' : ''}} >{{ $p->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Deskripsi</label>
                                            <textarea class="form-control" id="deskripsiPenginapan" name="deskripsiPenginapan" rows="3">{{$penginapan->deskripsi}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="col-12 text-right" id="myId">
                                <a href="/admin/penginapan" type="submit" class="btn btn-lg btn-danger">Cancel</a>
                                <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
                            </div>
                        </form>
                        @foreach($penginapan->getImage as $img)
                            {{dump($img->image->image)}}
                        @endforeach
{{--                        {{$penginapan->getImage}}--}}
                        <h6 class="heading-small text-muted mb-4">Masukkan Foto</h6>
                        <div class="pl-lg-4">
                            <form id="formImg" action="/admin/penginapan/addImg" method="post" class="dropzone mb-2" enctype="multipart/form-data" style="border-radius: 10px">
                                @csrf
                                <div class="fallback">
                                    <input name="image" type="file" multiple/>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')
    <script src="{{asset('assets/js/etc/dropzone.min.js')}}"></script>

    <script type="text/javascript">
        Dropzone.options.dropzonePenginapan = {
            acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg",
            previewTemplate: previewTemplate,
        };
        $(document).ready(function () {

        })
    </script>
@endsection
