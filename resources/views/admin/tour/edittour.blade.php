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
                                <li class="breadcrumb-item"><a href="/admin/tour">Data Tour</a></li>
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
                        <form id="formgallery" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input value="{{$tour->id}}" name="id" hidden>
                            <h6 class="heading-small text-muted mb-4">Data</h6>
                            <div class="pl-lg-4">
                                <div class="row">

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="namaTour">Nama Tour</label>
                                            <input type="text" id="namaTour" name="namaTour" value="{{$tour->nama}}"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-3 col-sm-12">
                                        <label for="bahanPenginapan">Destinasi</label>
                                        <select class="form-control" id="destinasi" name="destinasi">
                                            <option value="">Pilih Destinasi</option>
                                            @foreach($destinasi as $p)
                                                <option value="{{ $p->id }}" {{$tour->destinasi->id == $p->id ? 'selected' : ''}}>{{ $p->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3 col-sm-12">
                                        <div class="form-group">
                                            <label  for="tebal">Harga /hari</label>
                                            <input type="text" id="hargaTour" name="hargaTour" value="{{number_format($tour->harga,0)}}"
                                                   class="form-control price">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Deskripsi</label>
                                            <textarea class="form-control" id="deskripsiTour" name="deskripsiTour" required rows="3">{{$tour->deskripsi}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <a>Foto</a>
                                        <div class="">
                                            <input type="file"   onchange="" id="image" class="image" data-min-height="10"
                                                   data-height="150" data-default-file="{{ $tour->image }}"
                                                   accept="image/jpeg, image/jpg, image/png"
                                                   data-allowed-file-extensions="jpg jpeg png"
                                            />
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <hr class="my-4"/>
                            <!-- Description -->
                            <div class="col-12 text-right">
                                <a href="/admin/tour" type="submit" class="btn btn-lg btn-danger">Cancel</a>
                                <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
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
        $(document).ready(function () {
            currencyClass('price');
            var fr = $('#formgallery');
            fr.submit(async function (e) {
                e.preventDefault(e);
                var formData = new FormData(this);

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
                        if($('#image').val()) {
                            let icon = await handleImageUpload($('#image'));

                            formData.append('image', icon, icon.name);
                        }
                        console.log(formData);

                        $.ajax({
                            type: "POST",
                            success: function (data) {
                                if (data['status'] === 200){
                                    Swal.fire({
                                        title: 'Success',
                                        text: 'Berhasil merubah data',
                                        icon: 'success',
                                        confirmButtonText: 'Ok'
                                    }).then((result) => {
                                        window.location = '/admin/tour';
                                    })
                                }
                            },
                            error: function (error) {
                                console.log("LOG ERROR", error);
                                // handle error
                            },
                            async: true,
                            data: formData,
                            cache: false,
                            contentType: false,
                            processData: false,
                            timeout: 60000
                        })
                    }
                });

            });

            $('.image').dropify({
                defaultFile: '',
                messages: {
                    'default': 'Masukkan Foto Gallery',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong happended.'
                }
            });
        })
    </script>
@endsection
