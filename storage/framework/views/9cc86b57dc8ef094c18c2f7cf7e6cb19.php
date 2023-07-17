
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>Edit Data Transaksi</h3>
        <form action="<?php echo e(url('/transaksi/' .$row->id_transaksi)); ?>" method="post">
            <?php echo method_field('PATCH'); ?>
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="">Tanggal Transaksi</label>
                <input type="date" name="tgl_transaksi" class="form-control" value="<?php echo e($row->tgl_transaksi); ?>">
            </div>
            <div class="mb-3">
                <label for="">Pelanggan Transaksi</label>
                <select name="pelanggan_transaksi" id="" class="form-control">
                    <option value="">Dipilih Qaqa</option>
                    <?php $__currentLoopData = $pelanggan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($pel->id_pelanggan); ?>"><?php echo e($pel->id_pelanggan); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>    
                <div class="mb-3">
                <label for="">Harga Transaksi</label>
                <select name="harga_transaksi" id="" class="form-control">
                    <option value="">Dipilih Qaqa</option>
                    <?php $__currentLoopData = $harga; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $harga): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($harga->harga_id); ?>"><?php echo e($harga->harga_per_kilo); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select> 
            <div class="mb-3">
                <label for="">Berat Transaksi</label>
                <input type="text" name="berat_transaksi" class="form-control" value="<?php echo e($row->berat_transaksi); ?>">
            </div>
            <div class="mb-3">
                <label for="">Tanggal Transaksi Selesai</label>
                <input type="date" name="tgl_transaksi_selesai" class="form-control" value="<?php echo e($row->tgl_transaksi_selesai); ?>">
            </div>
            <div class="mb-3">
                <label for="">Status Transaksi</label>
               <select class= "form-control" name="status_transaksi" id="">
                    <option value="">Dipilih Qaqa</option>
                    <option value="Y">Selesai</option>
                    <option value="N">Sedang Berlangsung</option>
            </td>  
            <div class="mb-3">
                <input class="btn btn-info" type="submit" name="" id="" value="UPDATE">
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uasazra\resources\views/transaksi/edit.blade.php ENDPATH**/ ?>