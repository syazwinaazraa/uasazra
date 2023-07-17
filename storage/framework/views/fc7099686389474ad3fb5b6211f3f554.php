
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>Daftar Pakaian</h3>
        <?php if(session()->has('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session ('success')); ?>

        </div>
        <?php endif; ?>
        <a class="btn btn-primary btn-sm float-end" href="<?php echo e(url('pakaian/create')); ?>">Tambah Data</a>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Transaksi Pakaian</th>
                <th>Jenis Pakaian</th>
                <th>Jumlah Pakaian</th>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($row->id_pakaian); ?></td>
                <td><?php echo e($row->transaksi->id_transaksi); ?></td>
                <td><?php echo e($row->jenis_pakaian); ?></td>
                <td><?php echo e($row->jumlah_pakaian); ?></td>
                <td><a class="btn btn-info btn-sm float" href="<?php echo e(url('pakaian/' .$row->id_pakaian. '/edit')); ?>">Edit</a></td>
                <td>
                    <form action="<?php echo e(url('pakaian/' .$row->id_pakaian)); ?>" method="post">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-danger btn-sm float" onclick="return confirm('Apakah Anda Yakin Ingin Dihapus')">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uasazra\resources\views/pakaian/index.blade.php ENDPATH**/ ?>