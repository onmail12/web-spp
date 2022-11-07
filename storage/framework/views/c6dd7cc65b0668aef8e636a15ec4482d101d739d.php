
<?php $__env->startSection('layout'); ?>
<h1 class="display-5 fw-bolder text-white mb-2">Update Siswa</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
<h2 class="display-5">Edit Data Siswa</h2>
<div class="border rounded-4">
    <form class="px-3 mx-3 my-3" action="/update_siswa" method="POST">
        <?php echo e(csrf_field()); ?>

        <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <input type="hidden" name='nisn' value="<?php echo e($siswa->nisn); ?>">

        

        <div class="form-group mb-3 my-2">
            <label for="nisn">NISN</label>
            <input type="text" class="form-control" value="<?php echo e($siswa->nisn); ?>" name="nisn_new" placeholder="Enter NISN">
        </div>
        <div class="form-group mb-3 my-2">
            <label for="nis">NIS</label>
            <input type="text" class="form-control" value="<?php echo e($siswa->nis); ?>" name="nis" placeholder="Enter NIS">
        </div>
        <div class="form-group mb-3 my-2">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" value="<?php echo e($siswa->nama); ?>" name="nama" placeholder="Enter Nama">
        </div>

        <div class="form-group mb-3 my-2">
            <label for="id_kelas">Kelas</label>
            <select class="form-select" value="<?php echo e($siswa->id_kelas); ?> "name="id_kelas">
                <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($kelas->id_kelas); ?>"><?php echo e($kelas->nama_kelas); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </select>
        </div>

        <div class="form-group mb-3 my-2">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" value="<?php echo e($siswa->alamat); ?>" name="alamat" placeholder="Enter Alamat">
        </div>

        <div class="form-group mb-3 my-2">
            <label for="no_telp">No. Telpon</label>
            <input type="text" class="form-control" value="<?php echo e($siswa->no_telp); ?>" name="no_telp" placeholder="Enter No. Telpon">
        </div>

        <div class="form-group mb-3 my-2">
            <label for="id_spp">Spp Tahun</label>
            <select class="form-select" value="<?php echo e($siswa->id_spp); ?>" name="id_spp">
                <?php $__currentLoopData = $spp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($spp->id_spp); ?>"><?php echo e($spp->tahun); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\School\Kelas XI\Pemrograman Web\bayar_spp\resources\views/siswa/edit_siswa.blade.php ENDPATH**/ ?>