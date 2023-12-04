
<?php $__env->startSection('judul'); ?>
Aplikasi Kasir | Zhahira Adriyani Pocket
<?php $__env->stopSection(); ?>
<?php $__env->startSection('judul_sub'); ?>
Data Profile
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="h2 mb-3 text-center">Data Profile</div>
<hr style="width:75%">

<div class="card mb-4">
    <div class="card-body text-center">
        <img class="img-profile rounded-circle mb-3"
            src="<?php echo e(asset('/img')); ?>/img_storage/profile/<?php echo e($profile->profile_foto); ?>" width="300px" height="300px"
            alt="User profile picture">
        <h4 class="card-text"><b>Nama Profile</b> : <?php echo e($profile->user->name); ?></h4>
        <h4 class="card-text"><b>Role</b> : <?php echo e($profile->user->role); ?></h4>
        <hr style="width:75%">
        <h5 class="card-text text-left"><b>Nama Panggilan</b> : <?php echo e($profile->user->username); ?></h5>
        <h5 class="card-text text-left"><b>Email</b> : <?php echo e($profile->user->email); ?></h5>
        <h5 class="card-text text-left"><b>Umur</b> : <?php echo e($profile->umur); ?></h5>
        <h5 class="card-text text-left"><b>Tempat dan Tanggal Lahir</b> : <?php echo e($profile->tempat_lahir); ?>,
            <?php echo e($profile->tgl_lahir); ?></h5>
        <h5 class="card-text text-left"><b>Jenis Kelamin</b> : <?php echo e($profile->jenis_kelamin); ?></h5>
        <h5 class="card-text text-left"><b>Bio</b> : <?php echo $profile->bio; ?></h5>
        <h5 class="card-text text-left"><b>Alamat</b> : <?php echo $profile->alamat; ?></h5>
        <h5 class="card-text text-left"><b>Nomor Telepon</b> : <?php echo $profile->no_telp; ?></h5>
        <h5 class="card-text text-left"><b>Akun Dibuat</b> : <?php echo e($profile->user->created_at); ?></h5>
        <h5 class="card-text text-left"><b>Akun Diupdate</b> : <?php echo e($profile->user->updated_at); ?></h5>
        <hr style="width:75%">
        <a href="<?php echo e(url('profile/show')); ?>" class="btn btn-outline-dark">Ubah Profile</a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Tugas Akhir ERP Zhahira\app_laravel_8_kasir_jcc\resources\views/profile/index.blade.php ENDPATH**/ ?>