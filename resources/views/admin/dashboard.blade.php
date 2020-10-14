@extends('admin.base')
@section('content')

    <section >
        <div class="row pl-3 pr-3 pt-3">
            <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Hotel</h5>
                                <span class="h2 font-weight-bold mb-0" id="jumHotel">0</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                    <i class="ni ni-building"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Villa</h5>
                                <span class="h2 font-weight-bold mb-0" id="jumVila">0</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                    <i class="ni ni-building"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Tour</h5>
                                <span class="h2 font-weight-bold mb-0" id="jumTour">0</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-indigo text-white rounded-circle shadow">
                                    <i class="ni ni-world"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Paket</h5>
                                <span class="h2 font-weight-bold mb-0" id="jumPaket">0</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">
                                    <i class="ni ni-box-2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="pl-3 pr-3">
            <div class="card" style="height: 500px">

            </div>
        </div>
    </section>

@endsection

@section('script')
<script>

    $(document).ready(function () {
        getPenginapan('Hotel');
        getPenginapan('Vila');
        getTour();
        getPaket();
    });

    function getPenginapan(a) {
        $.get('/admin/get-penginapan?tipe='+a, function (data) {
            if(data['status'] === 200){
                $('#jum'+a).html(data['payload']);
            }
        })
    }
    function getTour() {
        $.get('/admin/get-tour', function (data) {
            if(data['status'] === 200){
                $('#jumTour').html(data['payload']);
            }
        })
    }
    function getPaket(a) {
        $.get('/admin/get-paket', function (data) {
            if(data['status'] === 200){
                $('#jumPaket').html(data['payload']);
            }
        })
    }
</script>

@endsection
