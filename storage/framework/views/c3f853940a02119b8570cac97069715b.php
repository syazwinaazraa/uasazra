
<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>Daftar Transaksi</h3>
        <?php if(session()->has('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session ('success')); ?>

        </div>
        <?php endif; ?>
        <a class="btn btn-primary btn-sm float-end" href="<?php echo e(url('transaksi/create')); ?>">Tambah Data</a>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Tanggal Transaksi</th>
                <th>Pelanggan Transaksi</th>
                <th>Harga Transaksi</th>
                <th>Berat Transaksi</th>
                <th>Tanggal Transaksi Selesai</th>
                <th>Status Transaksi</th>
                <td>EDIT</td>
                <td>HAPUS</td>
            </tr>
            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($row->id_transaksi); ?></td>
                <td><?php echo e($row->tgl_transaksi); ?></td>
                <td><?php echo e($row->pelanggan->id_pelanggan); ?></td>
                <td><?php echo e($row->harga->harga_per_kilo); ?></td>
                <td><?php echo e($row->berat_transaksi); ?></td>
                <td><?php echo e($row->tgl_transaksi_selesai); ?></td>
                <td><?php echo e(($row['status_transaksi'] == 0)? 'Sedang Berlangsung':'Selesai'); ?></td>
                <td><a class="btn btn-info btn-sm float" href="<?php echo e(url('transaksi/' .$row->id_transaksi. '/edit')); ?>">Edit</a></td>
                <td>
                    <form action="<?php echo e(url('transaksi/' .$row->id_transaksi)); ?>" method="post">
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\uasazra\resources\views/transaksi/index.blade.php ENDPATH**/ ?>