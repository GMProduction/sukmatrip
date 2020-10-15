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
                        <form method="POST" id="formData">
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
                                    <div class="form-group col-3 col-md-3 col-sm-12">
                                        <label for="bahanPenginapan">Durasi</label>
                                        <select class="form-control" id="durasi" name="durasi">
                                            <option value="">Pilih Durasi</option>
                                            @foreach($durasi as $p)
                                                <option value="{{ $p->id }}" {{$p->id == $penginapan->duration->id ? 'selected' : ''}} >{{ $p->name }} ({{$p->qty_trip }} Tour)</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-3 col-md-3 col-sm-12">
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
                                            <label for="exampleFormControlTextarea1">Lokasi</label>
                                            <textarea class="form-control" name="lokasi" id="lokasi" rows="3">{{$penginapan->lokasi}}</textarea>
                                        </div>
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

                        </form>
                        @foreach($penginapan->getImage as $img)
                            <input value="{{json_encode($img->image->url)}}" hidden name="image[]">
                        @endforeach
{{--                        {{$penginapan->getImage}}--}}
                        <h6 class="heading-small text-muted mb-4">Data Foto</h6>
                        <div class="pl-lg-4">
                            <form id="formImg" action="/admin/penginapan/addImg" method="post" class="dropzone mb-3" enctype="multipart/form-data" style="border-radius: 10px">
                                @csrf
                                <div class="fallback">
                                    <input name="image" type="file"  multiple/>
                                </div>
                            </form>

                        </div>
                        <div class="col-12 text-right" id="myId">
                            <a href="/admin/penginapan" type="submit" class="btn btn-lg btn-danger">Cancel</a>
                            <button type="submit" onclick="cekData()" class="btn btn-lg btn-primary">Simpan</button>
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
        Dropzone.options.formImg = {
            // paramName: 'image',
            acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg",
            addRemoveLinks: true,
            thumbnailWidth: 120,
            thumbnailHeight: 120,
            removedfile: function (file) {
                console.log(file);

                var name = file.name;
                var idImg = file.idImg;
                console.log(file.idImg);
                if(file.idImg === undefined){
                    name = JSON.parse(file.xhr.response)['payload']['image'];
                    idImg = JSON.parse(file.xhr.response)['payload']['id'];
                }

                $.ajax({
                    type: 'POST',
                    url: '/admin/penginapan/addImg',
                    data: {name: name, idImg: idImg, request: 2, '_token': '{{csrf_token()}}',},
                    sucess: function (data) {
                    }
                });
                var _ref;
                return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
            },
            sending: function (file, xhr, formData) {
                // formData.append("filesize", file.size);
                formData.append("idPenginapan", {{$penginapan->id}});
            },
            success: function (file, response) {
                file.previewElement.querySelector("img").src = response['payload']['image'];
                $('.dz-image img').attr('height', '120')

            },

            init: function() {
                let myDropzone = this;
                if($('[name="image[]"]').length > 0) {
                    var existing_files = JSON.parse($('[name="image[]"]').val());
                   @foreach($penginapan->getImage as $key => $img)
                        var mockFile = {name: "{{$img->image->url}}", size: "{{$imageSize[$key]}}", idImg: "{{$img->image->id}}" };
                        myDropzone.displayExistingFile(mockFile, "{{$img->image->url}}");
                    @endforeach
                }
                $('.dz-image img').attr('height', '120')
            }
        };

        $(document).ready(function () {
            if($('[name="image"]').length > 0) {
                console.log(JSON.parse($('[name="image[]"]').val()));
            // if($('[name="image[]"]').length > 0) {
                var existing_files = JSON.parse($('[name="image[]"]').val());
                // var existing_files = $('[name="image[]"]').val();
                $.each(existing_files, function(index) {
                    // console.log(el);
                    // dzClosure.emit("addedfile", el);
                    // dzClosure.emit("thumbnail", el, App.baseUrl + '' + el.name);
                    // dzClosure.emit("success", el);
                    // dzClosure.emit("complete", el);
                    // dzClosure.files.push(el);
                });
            }
        })

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
