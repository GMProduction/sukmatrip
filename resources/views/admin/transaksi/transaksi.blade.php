@extends('admin.base')
@section('content')

    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-4 col-4">
                        <h6 class="h2 text-white d-inline-block mb-0">Data Transaksi</h6>
                        {{--                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">--}}
                        {{--                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">--}}
                        {{--                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>--}}
                        {{--                                <li class="breadcrumb-item"><a href="#">Data Transaksi</a></li>--}}
                        {{--                            </ol>--}}
                        {{--                        </nav>--}}
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
                        <h3 class="mb-0">Tabel Transaksi</h3>
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
                ajax: '/admin/transaksi/datatable',
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
                    {"title": "Nama Pemesan", 'targets': 1, 'searchable': true, 'orderable': true},
                    {"title": "No. Telp", 'targets': 2, 'searchable': true, 'orderable': true},
                    {"title": "Penginapan", 'targets': 3, 'searchable': true, 'orderable': true},
                    {"title": "paket", 'targets': 4, 'searchable': true, 'orderable': true},
                    {"title": "Tour", 'targets': 5, 'searchable': true, 'orderable': true},
                    {"title": "Tanggal Berangkat", 'targets': 6, 'searchable': true, 'orderable': true},
                    // {"title": "Durasi", 'targets': 7, 'searchable': true, 'orderable': true},
                    {"title": "Total Harga", 'targets': 7, 'searchable': true, 'orderable': true},
                    {"title": "Action", 'targets': 8, 'searchable': false, 'orderable': false},

                ],
                columns: [
                    {
                        "className": 'details-control',
                        "orderable": false,
                        "data": null,
                        "defaultContent": ''
                    },
                    {data: 'pemesan', name: 'pemesan'},
                    {data: 'phone', name: 'phone'},
                    {data: 'penginapan.nama', name: 'penginapan.nama'},
                    {data: 'paket.nama', name: 'paket.nama'},
                    {data: 'tour[, ].nama', name: 'tour.nama'},
                    {
                        data: 'check_in', 'name': 'check_in', 'render': function (data) {
                            return data
                        }
                    },
                    // {data: 'penginapan.duration.name', name: 'penginapan.duration.name'},
                    {
                        data: 'harga', 'name': 'harga', 'render': function (data) {
                            return 'Rp. ' + data.toLocaleString()
                        }
                    },
                    {
                        "data": 'phone',
                        "width": '100',
                        "render": function (data, type, row, meta) {
                            return '<a href="https://wa.me/'+data+'" target="_blank" class="btn btn-sm btn-primary btn-sm" data-id="' + data + '" id="hubungi">Hubungi</a>'
                        }
                    },
                ]
            });

            $('#tabel tbody').on('click', 'a#editData', function () {
                var id = $(this).data('id');
                var url = '/admin/tour/edit/' + id;
                $(this).attr('href', url);
            });

            $('#tabel tbody').on('click', 'a#deleteData', function () {
                var data = table.row($(this).parents('tr')).data();
                var nama = data['nama'];
                Swal.fire({
                    title: 'Apa anda yakin untuk menghapus data tour ' + nama + ' ?',
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
                        let get = await $.post('/admin/tour/delete/' + $(this).data('id'), data);
                        if (get['status'] === 200) {
                            table.ajax.reload();
                            Swal.fire({
                                title: 'Success',
                                text: 'Berhasil Menghapus Data tour ' + nama,
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
