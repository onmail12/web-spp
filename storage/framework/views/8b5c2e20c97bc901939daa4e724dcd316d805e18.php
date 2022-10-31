
<?php $__env->startSection('layout'); ?>
<h1 class="display-5 fw-bolder text-white mb-2">Daftar Spp SMKN 6</h1>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
<a class="btn btn-outline-success sm-2 my-2" href="<?php echo e(route('tambah_spp')); ?>">
    <i class="bi bi-person-plus px-2"></i>Tambah Spp</a>

<table class="table table-hover text-nowrap table-bordered geeks">
    
    <thead class="table-dark">
        
        <th>No</th>
        <th>Tahun</th>
        <th>Nominal</th>
        <th>Nama</th>
        <th colspan=2>Aksi</th>
    </thead>
    <?php $i = 0; ?>
    <?php $__currentLoopData = $spp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php $i++; ?>
    <tr>
        <td><?php echo e($i); ?></td>
        <td><?php echo e($spp->tahun); ?></td>
        <td><?php echo e($spp->nominal); ?></td>
        <td><?php echo e($spp->siswa); ?></td>
        <td><a class="btn btn-outline-primary" href="<?php echo e(route('edit_spp', $spp->id_spp)); ?>"><i
                    class="bi bi-pencil-square"></i></a>
        <td><a class="btn btn-outline-danger" href="<?php echo e(route('delete_spp', $spp->id_spp)); ?>"><i
                    class="bi bi-trash"></i></a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\School\Kelas XI\Pemrograman Web\bayar_spp\resources\views/spp/spp.blade.php ENDPATH**/ ?>