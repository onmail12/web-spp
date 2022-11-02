
<?php $__env->startSection('layout'); ?>
<h2 class="display-5 fw-bold text-white mb-2">Tambah Siswa</h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
<h2>Masukkan Data Siswa</h2>

<div class="border rounded-4">
    <form class="p-3 m-3" action="<?php echo e(route('create_siswa')); ?>" method="GET">
        <?php echo e(csrf_field()); ?>

        <div class="row">
            <div class="col form-group my-2">
                <label for="nisn">NISN</label>
                <input type="text" class="form-control" name="nisn" placeholder="Enter NISN">
            </div>
            <div class="col form-group my-2">
                <label for="nis">NIS</label>
                <input type="text" class="form-control" name="nis" placeholder="Enter NIS">
            </div>
        </div>

        <div class="row">
            <div class="col form-group my-2">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Enter Nama">
            </div>

            <div class="col form-group my-2">
                <label for="id_kelas">Kelas</label>
                <select class="form-select" name="id_kelas">
                    <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($kelas->id_kelas); ?>"><?php echo e($kelas->nama_kelas); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col form-group my-2">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" name="alamat" placeholder="Enter Alamat">
            </div>

            <div class="col form-group my-2">
                <label for="no_telp">No.Telp</label>
                <input type="text" class="form-control" name="no_telp" placeholder="Enter No. Telpon">
            </div>
        </div>

        <div class="form-group my-2">
            <label for="id_spp">Spp Tahun</label>
            <select class="form-select" name="id_spp">
                <?php $__currentLoopData = $spp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($spp->id_spp); ?>"><?php echo e($spp->tahun); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
</div>

<div class="form-group my-2">
    <button type="submit" class="btn btn-primary px-4 me-sm-2 my-2">Submit</button>
</div>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\School\Kelas XI\Pemrograman Web\bayar_spp\resources\views/siswa/tambah_siswa.blade.php ENDPATH**/ ?>