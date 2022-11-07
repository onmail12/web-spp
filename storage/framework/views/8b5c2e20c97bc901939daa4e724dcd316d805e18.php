
<div class="modal modal-lg fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addModalLabel">Tambah Data SPP</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form class="px-2" action="<?php echo e(route('create_spp')); ?>" method="GET">
                    <?php echo e(csrf_field()); ?>


                    <div class="col form-group my-2">
                        <label for="nominal">Nominal</label>
                        <input type="text" class="form-control" name="nominal">
                    </div>
                    <div class="col form-group my-2">
                        <label for="tahun">Tahun</label>
                        <input type="text" class="form-control" name="tahun">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success"><i class="bi bi-person-plus px-2"></i>Tambah
                    SPP</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->startSection('layout'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>
<a class="btn btn-outline-success sm-2 my-2" data-bs-toggle="modal" data-bs-target="#addModal">
    <i class="bi bi-person-plus px-2"></i>Tambah Spp</a>

<table class="table table-hover text-nowrap table-bordered geeks">

    <thead class="table-dark">

        <th>No</th>
        <th>Tahun</th>
        <th>Nominal</th>

        <th colspan=2>Aksi</th>
    </thead>
    <?php $i = 0; ?>
    <?php $__currentLoopData = $spp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php $i++; ?>
    <tr>
        <td><?php echo e($i); ?></td>
        <td><?php echo e($spp->tahun); ?></td>
        <td><?php echo e($spp->nominal); ?></td>

        <td><a class="btn btn-outline-primary" href="<?php echo e(route('edit_spp', $spp->id_spp)); ?>"><i
                    class="bi bi-pencil-square"></i></a>
        <td><a class="btn btn-outline-danger" href="<?php echo e(route('delete_spp', $spp->id_spp)); ?>"><i
                    class="bi bi-trash"></i></a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\School\Kelas XI\Pemrograman Web\bayar_spp\resources\views/spp/spp.blade.php ENDPATH**/ ?>