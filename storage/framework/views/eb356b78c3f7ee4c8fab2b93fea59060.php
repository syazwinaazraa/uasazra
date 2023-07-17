
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>Tambah Data Harga</h3>
        <form action="<?php echo e(url('/harga')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="">Berat</label>
                <input type="text" name="berat" class="form-control" placeholder="Berat">
            </div><div class="mb-3">
                <label for="">Harga Per Kilo</label>
                <input type="text" name="harga_per_kilo" class="form-control" placeholder="Harga Per Kilo">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uasazra\resources\views/harga/create.blade.php ENDPATH**/ ?>