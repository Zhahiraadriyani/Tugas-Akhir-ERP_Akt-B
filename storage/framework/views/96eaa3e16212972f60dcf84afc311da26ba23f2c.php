
<?php $__env->startSection('judul'); ?>
Aplikasi Kasir | Project 2 Laravel JCC
<?php $__env->stopSection(); ?>
<?php $__env->startSection('judul_sub'); ?>
Detail Data Pengguna Apps
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="h2 mb-3 text-center">Detail Data Pengguna Apps</div>
<hr style="width:75%">
<div class="mb-3">
    <a href="<?php echo e(url('pdf-user-detail')); ?>/<?php echo e($user->id); ?>"><button type="button" class="btn btn-outline-danger"><i
                class="fas fa-file-pdf"></i></button></a>
    <a href="<?php echo e(url('print-user-detail')); ?>/<?php echo e($user->id); ?>"><button type="button" class="btn btn-outline-warning"><i
                class="fas fa-print"></i></button></a>
</div>
<div class="card mb-4">
    <div class="card-header">
        Detail Data Pengguna Apps
    </div>

    <div class="card-body text-center">

        <img class="img-profile rounded-circle mb-3"
            src="<?php echo e(asset('/img')); ?>/img_storage/profile/<?php echo e($user->profile->profile_foto); ?>" width="300px"
            height="300px" alt="User profile picture">
        <h4 class="card-text"><b>Nama Profile</b> : <?php echo e($user->profile->user->name); ?></h4>
        <h4 class="card-text"><b>Role</b> : <?php echo e($user->role); ?></h4>
        <hr style="width:75%">
        <h5 class="card-text text-left"><b>Nama Panggilan</b> : <?php echo e($user->username); ?></h5>
        <h5 class="card-text text-left"><b>Email</b> : <?php echo e($user->email); ?></h5>
        <h5 class="card-text text-left"><b>Umur</b> : <?php echo e($user->profile->umur); ?></h5>
        <h5 class="card-text text-left"><b>Tempat dan Tanggal Lahir</b> : <?php echo e($user->profile->tempat_lahir); ?>,
            <?php echo e($user->profile->tgl_lahir); ?></h5>
        <h5 class="card-text text-left"><b>Jenis Kelamin</b> : <?php echo e($user->profile->jenis_kelamin); ?></h5>
        <h5 class="card-text text-left"><b>Bio</b> : <?php echo $user->profile->bio; ?></h5>
        <h5 class="card-text text-left"><b>Alamat</b> : <?php echo $user->profile->alamat; ?></h5>
        <h5 class="card-text text-left"><b>Nomor Telepon</b> : <?php echo e($user->profile->no_telp); ?></h5>
        <h5 class="card-text text-left"><b>Akun Dibuat</b> : <?php echo e($user->created_at); ?></h5>
        <h5 class="card-text text-left"><b>Akun Diupdate</b> : <?php echo e($user->updated_at); ?></h5>
        <hr style="width:75%">
        <a href="<?php echo e($user->profile->user_id); ?>/edit" class="btn btn-outline-dark">Ubah Akun Pengguna
            Apps</a>
        <a href="<?php echo e(url('user')); ?>" class="btn btn-danger">Kembali</a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Tugas Akhir ERP Zhahira\app_laravel_8_kasir_jcc\resources\views/data_pengguna/show.blade.php ENDPATH**/ ?>