<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kumpulan Data PDF Data Pengguna Apps Kasir Zhahira Adriyani Pocket</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        .page-break {
            page-break-after: always;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th {
            color: white;
            background-color: rgb(0, 0, 0);
        }

        th,
        td {
            text-align: center;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }
    </style>
</head>

<body>
    <center>
        <h3>Kumpulan Data PDF Data Pengguna Apps Kasir Zhahira Adriyani Pocket</h3>
        <hr style="width:75%">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div>
                <div style="overflow-x:auto;"">
                <table width=" 100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Waktu Dibuat</th>
                            <th>Waktu Diupdate</th>
                        </tr>
                    </thead>
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
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </center>
</body>

</html><?php /**PATH C:\Tugas Akhir ERP Zhahira\app_laravel_8_kasir_jcc\resources\views/data_pengguna/pdf.blade.php ENDPATH**/ ?>