@extends('admin.base')
@section('content')

    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-4 col-4">
                        <h6 class="h2 text-white d-inline-block mb-0">Data Penginapan</h6>
                        {{--                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">--}}
                        {{--                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">--}}
                        {{--                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>--}}
                        {{--                                <li class="breadcrumb-item"><a href="#">Data Penginapan</a></li>--}}
                        {{--                            </ol>--}}
                        {{--                        </nav>--}}
                    </div>

                    <div class="col-lg-8 col-8 text-right">
                        <a href="/admin/penginapan/add" class="btn btn-md btn-neutral">Tambah</a>
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
                        <h3 class="mb-0">Tabel Penginapan</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table id="tabel" class="table align-items-center table-flush">
                            <th scope="col" class="sort" data-sort="name">#</th>
                            <th scope="col" class="sort" data-sort="budget">Nama Penginapan</th>
                            <th scope="col" class="sort" data-sort="budget">Tipe</th>
                            <th scope="col" class="sort" data-sort="status">Harga /malam</th>
                            <th scope="col" class="sort" data-sort="status">Deskripsi</th>
                            <th scope="col" class="sort" data-sort="status">Action</th>
                        </table>
                    </div>
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
                ajax: '/admin/penginapan/datatable',
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
                    {"title": "Nama Penginapan", 'targets': 1, 'searchable': true, 'orderable': true},
                    {"title": "Nama Destinasi", 'targets': 2, 'searchable': true, 'orderable': true},
                    {"title": "Tipe", 'targets': 3, 'searchable': true, 'orderable': true},
                    {"title": "Harga / malam", 'targets': 4, 'searchable': true, 'orderable': true},
                    {"title": "Action", 'targets': 5, 'searchable': false, 'orderable': false},

                ],
                columns: [
                    {
                        "className": 'details-control',
                        "orderable": false,
                        "data": null,
                        "defaultContent": ''
                    },
                    {data: 'nama', name: 'nama'},
                    {data: 'destinasi.nama', name: 'destinasi.nama'},
                    {data: 'tipe', name: 'tipe'},
                    {
                        data: 'harga', name: 'harga', 'render': function (data) {
                            return 'Rp. ' + data.toLocaleString()
                        }
                    },
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
                var id = $(this).data('id');
                var url = '/admin/penginapan/edit/' + id;
                $(this).attr('href', url);
            });

            $('#tabel tbody').on('click', 'a#deleteData', function () {
                var data = table.row($(this).parents('tr')).data();
                var nama = data['nama'];
                Swal.fire({
                    title: 'Apa anda yakin untuk menghapus Penginapan ' + nama + ' ?',
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
                        $.ajax({
                            type: 'POST',
                            url: '/admin/penginapan/delete/' + $(this).data('id'),
                            data: data,
                            dataType:'JSON',
                            success: function(data){
                                if (data['status'] === 200) {
                                    table.ajax.reload();
                                    Swal.fire({
                                        title: 'Success',
                                        text: 'Berhasil Menghapus Data Penginapan ' + nama,
                                        icon: 'success',
                                        confirmButtonText: 'Ok'
                                    })
                                } else {
                                    console.log(data);
                                }
                            },
                            error: function (data, response) {
                                // console.log(data.responseJSON['payload']);
                                Swal.fire({
                                    title: 'Error',
                                    text: 'Tidak dapat menghapus data',
                                    icon: 'error',
                                    confirmButtonText: 'Ok'
                                });

                            }
                        });
                        // $.post('/admin/penginapan/delete/' + $(this).data('id'), data, function (data) {
                        //     if (data['status'] == 200) {
                        //         table.ajax.reload();
                        //         Swal.fire({
                        //             title: 'Success',
                        //             text: 'Berhasil Menghapus Data Penginapan ' + nama,
                        //             icon: 'success',
                        //             confirmButtonText: 'Ok'
                        //         })
                        //     } else {
                        //         console.log(data);
                        //     }
                        // });

                    }
                })
            });
        });
    </script>

@endsection
