
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Data Golongan</title>
</head>
<body> 
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Data Golongan')); ?></div>

                <div class="card-body">
                <a href="/golongan/create" class="btn btn-success mb-2">Tambah Golongan</a>

            <table class="table table-hover">
            <tr>
                <th>Kode Golongan</th>
                <th>Nama Golongan</th>
                <th>Aksi</th>
            </tr>
    <?php $__currentLoopData = $golongan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($g->gol_kode); ?></td>
                <td><?php echo e($g->gol_nama); ?></td>
                <td><a href="/golongan/<?php echo e($g->id); ?>/edit" class="btn btn-primary mb-2" style="width:70px !important;">Edit</a> 
                    <form action="/golongan/<?php echo e($g->id); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <input type="submit" value="Hapus" class="btn btn-danger mb-2">
                    </form>
                </td>
        
            </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quis-laravel\resources\views/golongan/index.blade.php ENDPATH**/ ?>