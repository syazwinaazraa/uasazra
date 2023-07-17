
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>Tambah Data Admin</h3>
        <form action="<?php echo e(url('/admin')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="">Username</label>
                <input type="text" name="username_password" class="form-control" placeholder="Username">
            </div><div class="mb-3">
                <label for="">Password</label>
                <input type="text" name="password_admin" class="form-control" placeholder="Password">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uasazra\resources\views/admin/create.blade.php ENDPATH**/ ?>