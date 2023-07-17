
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>Tambah Data Pelanggan</h3>
        <form action="<?php echo e(url('/pelanggan')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="">Nama Pelanggan</label>
                <input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama Pelanggan">
            </div>
            <div class="mb-3">
                <label for="">HP Pelanggan</label>
                <input type="text" name="hp_pelanggan" class="form-control" placeholder="HP Pelanggan">
            </div>
            <div class="mb-3">
                <label for="">Alamat Pelanggan</label>
                <input type="text" name="alamat_pelanggan" class="form-control" placeholder="Alamat Pelanggan">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uasazra\resources\views/pelanggan/create.blade.php ENDPATH**/ ?>