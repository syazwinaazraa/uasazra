
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>Tambah Data Pakaian</h3>
        <form action="<?php echo e(url('/pakaian')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="">Transaksi Pakaian</label>
                <select name="transaksi_pakaian" id="" class="form-control">
                    <option value="">Dipilih Qaqa</option>
                    <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaksi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($transaksi->id_transaksi); ?>"><?php echo e($transaksi->id_transaksi); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>    
            </div>
            <div class="mb-3">
                <label for="">Jenis Pakaian</label>
                <input type="text" name="jenis_pakaian" class="form-control" placeholder="Jenis Pakaian">
            </div>
            <div class="mb-3">
                <label for="">Jumlah Pakaian</label>
                <input type="text" name="jumlah_pakaian" class="form-control" placeholder="Jumlah Pakaian">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="" id="" value="SIMPAN">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uasazra\resources\views/pakaian/create.blade.php ENDPATH**/ ?>