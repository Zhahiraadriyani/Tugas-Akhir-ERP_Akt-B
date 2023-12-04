
<?php $__env->startSection('judul'); ?>
Aplikasi Kasir | Project 2 Laravel JCC
<?php $__env->stopSection(); ?>
<?php $__env->startSection('judul_sub'); ?>
Kesalahan Dalam Pages Halaman
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- 404 Error Text -->
    <div class="text-center">
        <div class="error mx-auto" data-text="404">404</div>
        <p class="lead text-gray-800 mb-5">Page Not Found</p>
        <?php if(auth()->guard()->check()): ?>
        <p class="text-gray-500 mb-0">Halaman Tidak Ada Kembali Kehalaman Profile Dengan klik link dibawah</p>
        <a href="<?php echo e(url('/profile')); ?>">&larr; Back to Profile</a>
        <?php endif; ?>
        <?php if(auth()->guard()->guest()): ?>
        <p class="text-gray-500 mb-0">Kembali Kehalaman Utama Dengan klik link dibawah dan Lakukan Daftar dan Lalu Login</p>
        <a href="<?php echo e(url('/')); ?>">&larr; Back to Halaman Utama</a>
        <?php endif; ?>
    </div>

</div>
<!-- /.container-fluid -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Tugas Akhir ERP Zhahira\app_laravel_8_kasir_jcc\resources\views/errors/404.blade.php ENDPATH**/ ?>