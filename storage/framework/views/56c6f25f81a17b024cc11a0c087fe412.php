
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>Edit Data Pelanggan</h3>
        <form action="<?php echo e(url('/pelanggan/' .$row->id_pelanggan)); ?>" method="post">
            <?php echo method_field('PATCH'); ?>
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="">Nama Pelanggan</label>
                <input type="text" name="nama_pelanggan" class="form-control" value="<?php echo e($row->nama_pelanggan); ?>">
            </div>
            <div class="mb-3">
                <label for="">HP Pelanggan</label>
                <input type="text" name="hp_pelanggan" class="form-control" value="<?php echo e($row->hp_pelanggan); ?>">
            </div>
            <div class="mb-3">
                <label for="">Alamat Pelanggan</label>
                <input type="text" name="alamat_pelanggan" class="form-control" value="<?php echo e($row->alamat_pelanggan); ?>">
            </div>
            <div class="mb-3">
                <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uasazra\resources\views/pelanggan/edit.blade.php ENDPATH**/ ?>