@extends('admin.base')
@section('content')

    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Edit Data Artikel</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="/admin/artikel">Data Artikel</a></li>
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
                        <form id="formgallery" method="POST">
                            @csrf
                            <input name="id" value="{{$artikel->id}}" hidden>
                            <h6 class="heading-small text-muted mb-4">Data</h6>
                            <div class="pl-lg-4">
                                <div class="row">

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="namaArtikel">Judul</label>
                                            <input type="text" id="judulArtikel" name="judulArtikel" value="{{$artikel->judul}}"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Konten</label>
                                            <textarea class="form-control" id="kontenArtikel" name="kontenArtikel" rows="3">{{$artikel->konten}}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <a>Gambar</a>
                                        <div class="">
                                            <input type="file" onchange="" id="image" class="image" data-min-height="10"
                                                   data-height="150"
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
    <script>
        $(document).ready(function () {

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
                        if ($('#image').val()) {
                            let icon = await handleImageUpload($('#image'));

                            formData.append('image', icon, icon.name);
                        }
                        console.log(formData);

                        $.ajax({
                            type: "POST",
                            success: function (data) {
                                // window.location.reload();
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

            var image = $('.image').dropify({
                defaultFile: '',
                messages: {
                    'default': 'Masukkan Foto Artikel',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong happended.'
                }
            });

            image = image.data('dropify');
            image.resetPreview();
            image.clearElement();
            image.settings.defaultFile = '{{$artikel->getImage[0]->image->url}}';
            image.destroy();
            image.init();
        })
    </script>

@endsection
