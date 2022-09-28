@extends('admin.base')
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
                    <div class="col-lg-4 col-4">
                        <h6 class="h2 text-white d-inline-block mb-0">Data Destinasi</h6>
                        {{--                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">--}}
                        {{--                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">--}}
                        {{--                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>--}}
                        {{--                                <li class="breadcrumb-item"><a href="#">Data Destinasi</a></li>--}}
                        {{--                            </ol>--}}
                        {{--                        </nav>--}}
                    </div>

                    <div class="col-lg-8 col-8 text-right">
                    </div>

                    <div class="col-5 mt-5">
                        <form id="formAdd" method="post" onsubmit="return addData()">
                            @csrf
                            <div class="form-group ">
                                <label style="color: white" for="namaDestinasi">Nama Destinasi</label>
                                <div class="d-flex justify-content-center w-100">
                                    <input type="text" id="namaDestinasi" required name="namaDestinasi"
                                           class="form-control  mr-2">
                                    <button href="#" class="btn btn-md btn-neutral">Tambah</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h3 class="mb-0">Tabel Destinasi</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive p-2">
                        <table id="tabel" class="table align-items-center table-flush">
                        </table>
                    </div>
                    <!-- Card footer -->

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form id="formEdit" class="" method="post" onsubmit="return editData()">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Destinasi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input name="id" id="id" hidden>
                        <input name="action" value="edit" hidden>
                        <label style="" for="namaDestinasi">Nama Destinasi</label>
                        <input type="text" id="namaDestinasi" required name="namaDestinasi"
                               class="form-control flex-grow-1 mr-2">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $(function () {
            var table = $('#tabel').DataTable({
                processing: true,
                serverSide: true,
                ajax: '/admin/destinasi/datatable',
                "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                    // debugger;
                    var numStart = this.fnPagingInfo().iStart;
                    var index = numStart + iDisplayIndexFull + 1;
                    // var index = iDisplayIndexFull + 1;
                    $("td:first", nRow).html(index);
                    return nRow;
                },
                columnDefs: [
                    {"title": "#", "searchable": false, "orderable": false, "targets": 0,},
                    {"title": "Nama", 'targets': 1, 'searchable': true, 'orderable': true},
                    {"title": "Action", 'targets': 2, 'searchable': false, 'orderable': false},

                ],
                columns: [
                    {
                        "className": 'details-control',
                        "orderable": false,
                        "data": null,
                        "defaultContent": ''
                    },
                    {data: 'nama', name: 'nama'},
                    {
                        "target": 2,
                        "data": 'id',
                        "width": '100',
                        "render": function (data, type, row, meta) {
                            return '<a href="#!" class="btn btn-sm btn-primary btn-sm" data-id="' + data + '" id="editData">Edit</a>' +
                                '<a href="#!" class="btn btn-sm btn-danger btn-sm" data-id="' + data + '" id="deleteData">Delete</a>'
                        }
                    },
                ]
            });


            $('#tabel tbody').on('click', 'a#editData', function () {
                var data = table.row($(this).parents('tr')).data();
                $('#modal #namaDestinasi').val(data['nama']);
                $('#modal #id').val($(this).data('id'));
                $('#modal').modal();
            });

            $('#tabel tbody').on('click', 'a#deleteData', function () {
                var data = table.row($(this).parents('tr')).data();
                var nama = data['nama'];
                Swal.fire({
                    title: 'Apa anda yakin untuk menghapus Destinasi ' + nama + ' ?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya',
                    cancelButtonText: 'Tidak'
                }).then(async (result) => {
                    if (result.value) {
                        let data = {
                            '_token': '{{csrf_token()}}',
                        };
                        let get = await $.post('/admin/destinasi/delete/' + $(this).data('id'), data);
                        if (get['status'] == 200) {
                            table.ajax.reload();
                            Swal.fire({
                                title: 'Success',
                                text: 'Berhasil Menghapus Data Destinasi ' + nama,
                                icon: 'success',
                                confirmButtonText: 'Ok'
                            })
                        }
                    }
                })
            });
        });

        function addData() {
            Swal.fire({
                title: 'Info',
                text: "Apa anda yakin memasukkan data destinasi " + $('#namaDestinasi').val() + ' ?',
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Tambah'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('formAdd').submit();
                }

            });
            return false;
        }

        function editData() {
            Swal.fire({
                title: 'Info',
                text: "Apa anda yakin merubah data destinasi menjadi " + $('#modal #namaDestinasi').val() + ' ?',
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Edit'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('formEdit').submit();
                }

            });
            return false;
        }


    </script>

@endsection
