
<?php $__env->startSection('layout'); ?>
<h1 class="display-5 fw-bolder text-white mb-2">Update Siswa</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

<form action="/update_siswa" method="POST">
    <?php echo e(csrf_field()); ?>

    <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <input type="hidden" name='nisn' value="<?php echo e($siswa->nisn); ?>">

    <div class="form-group my-2">
        <label for="nisn">NISN</label>
        <input type="text" class="form-control" name="nisn_new" placeholder="<?php echo e($siswa->nisn); ?>">
    </div>
    <div class="form-group my-2">
        <label for="nis">NIS</label>
        <input type="text" class="form-control" name="nis" placeholder="<?php echo e($siswa->nis); ?>">
    </div>
    <div class="form-group my-2">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="<?php echo e($siswa->nama); ?>">
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\School\Kelas XI\Pemrograman Web\bayar_spp\resources\views/edit_siswa.blade.php ENDPATH**/ ?>