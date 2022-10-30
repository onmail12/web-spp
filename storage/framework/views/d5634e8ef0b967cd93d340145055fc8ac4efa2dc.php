

<?php $__env->startSection('main'); ?>
<h2 class="display-5 my-2">List Data Siswa</h2>
<a class="btn btn-outline-success sm-2 my-2" href="<?php echo e(route('tambah_siswa')); ?>">
    <i class="bi bi-person-plus px-2"></i>Tambah Siswa</a>

<table class="table table-hover text-nowrap table-bordered">
    <thead class="table-dark">
        <th>No</th>
        <th>NISN</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Tahun</th>
        <th>Nominal</th>
        <th style="width:100px;" colspan=2>Aksi</th>
    </thead>
    <?php $i = 0; ?>
    <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <?php $i++; ?>
    <tr>
        <td><?php echo e($i); ?></td>
        <td><?php echo e($siswa->nisn); ?></td>
        <td><?php echo e($siswa->nis); ?></td>
        <td><?php echo e($siswa->nama); ?></td>

        <td><?php echo e($siswa->spp->tahun); ?></td>
        <td><?php echo e($siswa->spp->nominal); ?></td>

        <td><a class="btn btn-outline-primary" href="<?php echo e(route('edit_siswa', $siswa->nisn)); ?>"><i
                    class="bi bi-pencil-square"></i></a>
        <td><a class="btn btn-outline-danger" href="<?php echo e(route('delete_siswa', $siswa->nisn)); ?>"><i
                    class="bi bi-trash"></i></a></td>
    </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\School\Kelas XI\Pemrograman Web\bayar_spp\resources\views/siswa/siswa.blade.php ENDPATH**/ ?>