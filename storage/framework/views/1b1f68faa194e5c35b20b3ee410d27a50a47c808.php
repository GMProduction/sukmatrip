<?php $__env->startSection('morecss'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/etc/basic.min.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/etc/dropzone.css')); ?>" type="text/css">
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

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
                                <li class="breadcrumb-item"><a href="/mitra/penginapan">Data Penginapan</a></li>
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
                        <form action="/mitra/penginapan/store" method="POST">
                            <?php echo csrf_field(); ?>
                            <h6 class="heading-small text-muted mb-4">Data</h6>
                            <div class="pl-lg-4">
                                <div class="row">

                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="namaPenginapan">Nama Penginapan</label>
                                            <input type="text" id="namaPenginapan" name="namaPenginapan"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group col-4">
                                        <label for="bahanPenginapan">Tipe Penginapan</label>
                                        <select class="form-control" id="tipePenginapan" name="tipePenginapan">
                                            <option value="hotel">Hotel</option>
                                            <option value="villa">Villa</option>
                                        </select>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <label  for="tebal">Harga /malam</label>
                                            <input type="number" id="hargaPenginapan" name="hargaPenginapan"
                                                   class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Deskripsi</label>
                                            <textarea class="form-control" id="deskripsiPenginapan" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="col-12 text-right"id="myId">
                                <button type="button" class="btn btn-lg btn-danger" data-toggle="modal" data-target=".bd-example-modal-lg">Unggah Foto</button>
                                <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
                            </div>
                        </form>

                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Upload Foto</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/assets/upload/penginapan" class="dropzone"></form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <button type="button" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('assets/js/etc/dropzone.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/etc/dropzone-amd-module.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Project\website\sukmatrip\resources\views/admin/penginapan/tambahpenginapan.blade.php ENDPATH**/ ?>