
<?php $__env->startSection('layout'); ?>
<h1 class="display-5 fw-bolder text-white mb-2">Update Siswa</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
<?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="border rounded mb-2">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mx-4 my-1 py-2">
            <li class="breadcrumb-item active" aria-current="page"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a href="/siswa">Siswa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Siswa (<?php echo e($siswa->nama); ?>)</li>
        </ol>
    </nav>
</div>

<h2 class="display-5">Edit Data Siswa</h2>
<div class="border rounded-4 bg-secondary" style="--bs-bg-opacity: 0.01;">
    <form class="m-4" action="/update_siswa" method="POST">
        <?php echo e(csrf_field()); ?>


        <input type="hidden" name='nisn' value="<?php echo e($siswa->nisn); ?>">
        <div class="form-group form-floating my-4">
            <input type="text" class="form-control" value="<?php echo e($siswa->nisn); ?>" name="nisn_new" placeholder="Enter NISN">
            <label for="nisn">NISN</label>

        </div>
        <div class="form-group form-floating my-4">
            <input type="text" class="form-control" value="<?php echo e($siswa->nis); ?>" name="nis" placeholder="Enter NIS">
            <label for="nis">NIS</label>
        </div>
        <div class="form-group form-floating my-4">
            <input type="text" class="form-control" value="<?php echo e($siswa->nama); ?>" name="nama" placeholder="Enter Nama">
            <label for="nama">Nama</label>
        </div>

        <div class="form-group form-floating my-4">

            <select class="form-select" value="<?php echo e($siswa->id_kelas); ?> " name="id_kelas">
                <?php $__currentLoopData = $kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($kelas->id_kelas); ?>"><?php echo e($kelas->nama_kelas); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </select>
            <label for="id_kelas">Kelas</label>
        </div>

        <div class="form-group form-floating my-4">
            <textarea class="form-control" name="alamat" style="height: 100px;"
                placeholder="Enter Alamat"><?php echo e($siswa->alamat); ?></textarea>
            <label for="alamat">Alamat</label>

        </div>

        <div class="form-group form-floating my-4">
            <input type="text" class="form-control" value="<?php echo e($siswa->no_telp); ?>" name="no_telp"
                placeholder="Enter No. Telpon">
            <label for="no_telp">No. Telpon</label>

        </div>

        <div class="form-group form-floating my-4">
            <select class="form-select" value="<?php echo e($siswa->id_spp); ?>" name="id_spp">
                <?php $__currentLoopData = $spp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($spp->id_spp); ?>"><?php echo e($spp->tahun); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <label for="id_spp">Spp Tahun</label>

        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\School\Kelas XI\Pemrograman Web\bayar_spp\resources\views/siswa/edit_siswa.blade.php ENDPATH**/ ?>