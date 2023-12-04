
<?php $__env->startSection('judul'); ?>
Aplikasi Kasir | Zhahira Adriyani Pocket
<?php $__env->stopSection(); ?>
<?php $__env->startSection('judul_sub'); ?>
Detail Data Lengkap Total Akhir Transaksi Pembelian Transaksi Pembelian Barang
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="h2 mb-3 text-center">Detail Data Lengkap Total Akhir Transaksi Pembelian Transaksi Pembelian Barang</div>
<hr style="width:75%">
<div class="card mb-4">

    <div class="card-header">
        Detail Data Lengkap Total Akhir Transaksi Pembelian Transaksi Pembelian Barang
    </div>

    <div class="card-body">
        <div class="mb-3">
            <a href="<?php echo e(url('pdf-transaksi-pembelian-detail')); ?>/<?php echo e($tpembelian->id); ?>"><button type="button"
                    class="btn btn-outline-danger"><i class="fas fa-file-pdf"></i></button></a>
            <a href="<?php echo e(url('print-transaksi-pembelian-detail')); ?>/<?php echo e($tpembelian->id); ?>"><button type="button"
                    class="btn btn-outline-warning"><i class="fas fa-print"></i></button></a>
        </div>
        <?php $__currentLoopData = $tpembelian->transaksi_pembelian_barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item => $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h4 class="card-text"><b>Transaksi Pembelian <?php echo e($item + 1); ?></b> : </h4>
        <ul>
            <li>
                <h4 class="card-text"><b>Nama Barang</b> : <?php echo e($key->master_barang->nama_barang); ?></h4>
            </li>
            <li>
                <h4 class="card-text"><b>Harga Satuan</b> : <?php echo e($key->harga_satuan); ?></h4>
            </li>
            <li>
                <h4 class="card-text"><b>Jumlah Barang</b> : <?php echo e($key->jumlah); ?></h4>
            </li>
            <li>
                <h4 class="card-text"><b>Jumlah Barang</b> : <?php echo e($key->harga_satuan * $key->jumlah); ?></h4>
            </li>
        </ul>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <h4><b>Total Harga : </b><?php echo e($tpembelian->total_harga); ?></h4>
        <h4 class="card-text">
        </h4>
    </div>
</div>
<a href="<?php echo e(url('transaksi-pembelian')); ?>" class="btn btn-danger">Kembali</a><?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Tugas Akhir ERP Zhahira\app_laravel_8_kasir_jcc\resources\views/transaksi_pembelian/show.blade.php ENDPATH**/ ?>