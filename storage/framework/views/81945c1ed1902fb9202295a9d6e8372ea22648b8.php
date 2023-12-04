
<?php $__env->startPush('style'); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.2/datatables.min.css" />
<?php $__env->stopPush(); ?>
<?php $__env->startSection('judul'); ?>
Aplikasi Kasir | Zhahira Adriyani Pocket
<?php $__env->stopSection(); ?>
<?php $__env->startSection('judul_sub'); ?>
Data Pengguna Aplikasi Kasir
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<a href="<?php echo e(url('user/create')); ?>"><button type="button" class="btn btn-outline-primary"><i
            class="fas fa-plus-square"></i></button></a>
<a href="<?php echo e(url('pdf-user')); ?>"><button type="button" class="btn btn-outline-danger"><i
            class="fas fa-file-pdf"></i></button></a>
<a href="<?php echo e(url('print-user')); ?>"><button type="button" class="btn btn-outline-warning"><i
            class="fas fa-print"></i></button></a>
<a href="<?php echo e(url('excel-user')); ?>"><button type="button" class="btn btn-outline-success"><i
            class="fas fa-file-excel"></i></button></a>
<div class="h2 mb-3 text-center">Data Pengguna Aplikasi Kasir</div>
<hr style="width:75%">
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example1" class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Waktu Dibuat</th>
                        <th>Waktu Diupdate</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Waktu Dibuat</th>
                        <th>Waktu Diupdate</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item => $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item + 1); ?></td>
                        <td><?php echo e($key->name); ?></td>
                        <td><?php echo e($key->username); ?></td>
                        <td><?php echo e($key->email); ?></td>
                        <td><?php echo e($key->role); ?></td>
                        <td><?php echo e($key->created_at); ?></td>
                        <td><?php echo e($key->updated_at); ?></td>
                        <td class="text-center">
                            <a href="/user/<?php echo e($key->id); ?>" class="btn btn-outline-info"><i class="fas fa-eye"></i></a>
                            <?php if(auth()->guard()->check()): ?>
                            <a href="/user/<?php echo e($key->id); ?>/edit" class="btn btn-outline-primary"><i
                                    class="far fa-edit"></i></a>
                            <form action="/user/<?php echo e($key->id); ?>" method="POST" class="display-non">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button input type="submit" class="btn btn-outline-danger my-1" value="Delete"><i
                                        class="far fa-trash-alt"></i></button>
                            </form>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->startPush('scripts'); ?>
<script>
    $(function () {
    $("#example1").DataTable();
  });
</script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.2/datatables.min.js"></script>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Tugas Akhir ERP Zhahira\app_laravel_8_kasir_jcc\resources\views/data_pengguna/index.blade.php ENDPATH**/ ?>