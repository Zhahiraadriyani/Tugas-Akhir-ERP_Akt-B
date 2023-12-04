
<?php $__env->startSection('judul'); ?>
Aplikasi Kasir | Zhahira Adriyani Pocket
<?php $__env->stopSection(); ?>
<?php $__env->startSection('judul_sub'); ?>
Form Login
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div>
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

           

            <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Log In</h1>
                                    </div>
                                    <form class="user" method="POST" action="<?php echo e(route('login')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukan Email Address..." value="<?php echo e(old('email')); ?>"
                                                required autocomplete="email" autofocus>
                                        </div>
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="alert alert-danger" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <div class="form-group">
                                            <input type="password" name="password"
                                                class="form-control form-control-user" id="exampleInputPassword"
                                                placeholder="Masukan Password" required autocomplete="current-password">
                                        </div>
                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="alert alert-danger" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <button type="submit" class="btn btn-danger btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <hr>
                                    <?php if(Route::has('password.request')): ?>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo e(route('password.request')); ?>">Lupa Password?</a>
                                    </div>
                                    <?php endif; ?>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo e(url('register')); ?>">Daftar Akun!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Tugas Akhir ERP Zhahira\app_laravel_8_kasir_jcc\resources\views/auth/login.blade.php ENDPATH**/ ?>