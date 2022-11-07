


<div class="modal modal-lg fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addModalLabel">Tambah Data Siswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form class="px-2" action="<?php echo e(route('create_siswa')); ?>" method="GET">
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


                    <div class="col form-group my-2">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Enter Alamat">
                    </div>

                    <div class="row">
                        <div class="col form-group my-2">
                            <label for="no_telp">No.Telp</label>
                            <input type="text" class="form-control" name="no_telp" placeholder="Enter No. Telpon">
                        </div>


                        <div class="col form-group my-2">
                            <label for="id_spp">Spp Tahun</label>
                            <select class="form-select" name="id_spp">
                                <?php $__currentLoopData = $spp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($spp->id_spp); ?>"><?php echo e($spp->tahun); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success"><i class="bi bi-person-plus px-2"></i>Tambah
                    Siswa</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->startSection('main'); ?>

<?php if(session('alert')): ?>
<div class="alert <?php echo e(session('alert')[0]); ?> alert-dismissible fade show w-50" role="alert">
    <strong><?php echo e(session('alert')[1]); ?></strong> <?php echo e(session('alert')[2]); ?>

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>

<h2 class="display-5">List Data Siswa</h2>
<a class="btn btn-success my-3" data-bs-toggle="modal" data-bs-target="#addModal">
    <i class="bi bi-person-plus px-2"></i>Tambah Siswa</a>

<table id="dataTable" class="table table-hover table-bordered text-nowrap mb-5">
    <thead class="table-light text-center">
        <th>No</th>
        <th>NISN</th>
        <th>NIS</th>
        <th>Nama</th>
        
        <th>Kelas</th>
        <th style="width:100px; text-align:center;" colspan=2>Aksi</th>
    </thead>
    <?php $i = 0; ?>
    <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php $i++; ?>
    <tbody class="">
        <tr>
            <td><?php echo e($i); ?></td>
            <td><?php echo e($siswa->nisn); ?></td>
            <td><?php echo e($siswa->nis); ?></td>
            <td><?php echo e($siswa->nama); ?></td>
            
            <td><?php echo e($siswa->kelas->nama_kelas); ?></td>

            <td class="text-center"><a class="btn btn-primary p-2" href="<?php echo e(route('edit_siswa', $siswa->nisn)); ?>"><i
                        class="bi bi-pencil-square"></i></a>
            <td class="text-center"><a class="btn btn-danger p-2" href="<?php echo e(route('delete_siswa', $siswa->nisn)); ?>"><i
                        class="bi bi-trash"></i></a></td>
        </tr>
    </tbody>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\School\Kelas XI\Pemrograman Web\bayar_spp\resources\views/siswa/siswa.blade.php ENDPATH**/ ?>