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

                        <h6 class="heading-small text-muted mb-4">Masukkan Foto</h6>
                        <div class="pl-lg-4">
                            <form id="formImg" action="/admin/penginapan/addImg" method="post" class="dropzone mb-2" enctype="multipart/form-data" style="border-radius: 10px">
                                @csrf
                                <div class="fallback">
                                    <input name="image" type="file" multiple/>
                                </div>
                            </form>

                        </div>

                        <!-- Description -->
                        <div class="col-12 text-right" id="myId">
                            <button type="submit" onclick="addImg()" class="btn btn-lg btn-primary">Selesai</button>
                        </div>


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
        Dropzone.options.formImg = {
            // paramName: 'image',
            acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg",
            addRemoveLinks: true,
            thumbnailWidth: 120,
            thumbnailHeight: 120,
            removedfile: function (file) {
                var name = JSON.parse(file.xhr.response)['payload']['image'];
                var idImg = JSON.parse(file.xhr.response)['payload']['id'];
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
                file.myCustomName = "my-new-name" + file.name;
                // formData.append("filesize", file.size);
                formData.append("fileName", file.myCustomName);
                formData.append("idPenginapan", {{$id}});
            },
            success: function (file, response) {
                file.previewElement.querySelector("img").src = response['payload']['image'];
                $('.dz-image img').attr('height', '120')

            },

        };

        {{--$('#formImg').dropzone({--}}


        {{--});--}}


        function addImg() {
            Swal.fire({
                title: 'Info',
                text: 'Apakah foto yang anda masukkan sudah benar ?',
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.value) {
                    Swal.fire({
                        title: 'Berhasil',
                        text: 'Berhasil menyimpan data',
                        icon: 'success',
                        confirmButtonText: 'Ok',
                    }).then((data) => {
                        window.location = '/admin/penginapan';
                    })
                }
            })
        }
    </script>
@endsection
