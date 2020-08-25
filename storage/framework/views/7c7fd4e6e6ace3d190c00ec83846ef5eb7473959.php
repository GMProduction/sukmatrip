<?php $__env->startSection('content'); ?>

    <!-- Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-4 col-4">
                        <h6 class="h2 text-white d-inline-block mb-0">Data Penginapan</h6>






                    </div>

                    <div class="col-lg-8 col-8 text-right">
                        <a href="/admin/tambahpenginapan" class="btn btn-md btn-neutral">Tambah</a>
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
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">#</th>
                                <th scope="col" class="sort" data-sort="budget">Nama Penginapan</th>
                                <th scope="col" class="sort" data-sort="budget">Tipe</th>
                                <th scope="col" class="sort" data-sort="status">Harga /malam</th>
                                <th scope="col" class="sort" data-sort="status">Deskripsi</th>
                                <th scope="col" class="sort" data-sort="status">Action</th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            <tr>

                                <td class="budget">
                                    1
                                </td>

                                <td class="budget">
                                    <p>Sini Vie Villa</p>
                                </td>

                                <td class="budget">
                                    <p>Villa</p>
                                </td>

                                <td class="budget">
                                    <p>Rp 1.987.600</p>
                                </td>

                                <td class="budget" style="max-width: 300px;">
                                    <p style="overflow: hidden">Sini Vie Villa adalah akomodasi dengan fasilitas baik dan kualitas pelayanan memuaskan menurut sebagian besar tamu. Nikmati pelayanan mewah dan pengalaman tak terlupakan ala Sini Vie Villa selama Anda menginap di sini. Tamu ekstra akan dikenakan biaya tambahan IDR 121,000/ orang untuk sarapan.</p>
                                </td>

                                <td>
                                    <a href="" class="btn btn-sm btn-primary">Detail</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer py-4">
                        <nav aria-label="...">
                            <ul class="pagination justify-content-end mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">
                                        <i class="fas fa-angle-left"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fas fa-angle-right"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Project\website\sukmatrip\resources\views/admin/penginapan/gallery.blade.php ENDPATH**/ ?>
