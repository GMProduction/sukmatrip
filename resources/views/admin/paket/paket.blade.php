@extends('admin.base')
@section('content')

    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-4 col-4">
                        <h6 class="h2 text-white d-inline-block mb-0">Data Paket</h6>
                        {{--                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">--}}
                        {{--                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">--}}
                        {{--                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>--}}
                        {{--                                <li class="breadcrumb-item"><a href="#">Data paket</a></li>--}}
                        {{--                            </ol>--}}
                        {{--                        </nav>--}}
                    </div>

                    <div class="col-lg-8 col-8 text-right">
                        <a href="/admin/paket/add" class="btn btn-md btn-neutral">Tambah</a>
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
                        <h3 class="mb-0">Tabel Paket</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table id="tabel" class="table align-items-center table-flush">

                        </table>
                    </div>
                    <!-- Card footer -->

                </div>
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
                ajax: '/admin/paket/datatable',
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
                    {"title": "Nama paket", 'targets': 1, 'searchable': true, 'orderable': true},
                    {"title": "Destinasi", 'targets': 2, 'searchable': true, 'orderable': true},
                    {"title": "Penginapan", 'targets': 3, 'searchable': true, 'orderable': true},
                    {"title": "Harga / hari", 'targets': 4, 'searchable': true, 'orderable': true},
                    {"title": "Durasi", 'targets': 5, 'searchable': true, 'orderable': true},
                    {"title": "Foto", 'targets': 6, 'searchable': false, 'orderable': true},
                    {"title": "Action", 'targets': 7, 'searchable': false, 'orderable': false},

                ],
                columns: [
                    {
                        "className": 'details-control',
                        "orderable": false,
                        "data": null,
                        "defaultContent": ''
                    },
                    {data: 'nama', name: 'nama'},
                    {data: 'penginapan.destinasi.nama', name: 'penginapan.destinasi.nama'},
                    {data: 'penginapan.nama', name: 'nama'},

                    {
                        data: 'harga','name': 'harga', 'render': function (data) {
                            return 'Rp. '+data.toLocaleString()
                        }
                    },
                    {data: 'penginapan.duration.name', name: 'penginapan.duration.name'},
                    {
                        "name": 'nama',
                        "data": 'get_image[0].image.url',
                        "width": '100',
                        "render": function (data, type, row, meta) {
                            return '<img src="' + data + '" height="70"  />'
                        }
                    },
                    {
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
                var id = $(this).data('id');
                var url = '/admin/paket/edit/' + id;
                $(this).attr('href', url);
            });

            $('#tabel tbody').on('click', 'a#deleteData', function () {
                var data = table.row($(this).parents('tr')).data();
                var nama = data['nama'];
                Swal.fire({
                    title: 'Apa anda yakin untuk menghapus data paket ' + nama + ' ?',
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
                        let get = await $.post('/admin/paket/delete/' + $(this).data('id'), data);
                        if (get['status'] == 200) {
                            table.ajax.reload();
                            Swal.fire({
                                title: 'Success',
                                text: 'Berhasil Menghapus Data paket ' + nama,
                                icon: 'success',
                                confirmButtonText: 'Ok'
                            })
                        }
                    }
                })
            });
        });
    </script>

@endsection
