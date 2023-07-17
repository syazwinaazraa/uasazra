
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>Edit Data Harga</h3>
        <form action="<?php echo e(url('/harga/' .$row->harga_id)); ?>" method="post">
            <?php echo method_field('PATCH'); ?>
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="">Berat</label>
                <input type="text" name="berat" class="form-control" value="<?php echo e($row->berat); ?>">
            </div><div class="mb-3">
                <label for="">Harga Per Kilo</label>
                <input type="text" name="harga_per_kilo" class="form-control" value="<?php echo e($row->harga_per_kilo); ?>">
            </div>
            <div class="mb-3">
                <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uasazra\resources\views/harga/edit.blade.php ENDPATH**/ ?>