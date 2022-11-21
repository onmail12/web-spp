
<?php $__env->startSection('header'); ?>

<h1 class="display-5 fw-bolder text-white mb-2">Website Pembayaran SPP</h1>
<p class="lead fw-normal text-white-50 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet impedit
    delectus deleniti quae cupiditate, qui eum labore eveniet ut ullam veritatis rem fuga assumenda totam architecto
    ducimus repellendus, corporis recusandae.</p>
<div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Transaksi Pembayaran</a>
    <a class="btn btn-outline-light btn-lg px-4" href="#!">Histori Pembayaran</a>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
<div class="border rounded mb-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mx-4 my-1 py-2">
            <li class="breadcrumb-item active" aria-current="page">Home</li>
        </ol>
    </nav>
</div>


<div class="d-flex justify-content-center">
    <div class="col ms-5">
        <div class="card mb-5" style="width: 20rem;">
            <img src="https://dummyimage.com/500x500/333/fff" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Siswa</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, corrupti
                    facernulla
                    maiores debitis quaerat nemo voluptatem dicta ducimus ipsum pariatur corporis aliquid. Provident
                    quod
                    perspiciatis a, ad eius perferendis.
                </p>
                <a href="/siswa" class="btn btn-primary w-100">Siswa</a>
            </div>
        </div>
    </div>
    <div class="col ms-5">
        <div class="card mb-5" style="width: 20rem;">
            <img src="https://dummyimage.com/500x500/333/fff" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Petugas</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, corrupti
                    facernulla
                    maiores debitis quaerat nemo voluptatem dicta ducimus ipsum pariatur corporis aliquid. Provident
                    quod
                    perspiciatis a, ad eius perferendis.
                </p>
                <a href="/petugas" class="btn btn-primary w-100">Petugas</a>
            </div>
        </div>
    </div>

    <div class="col ms-5">
        <div class="card mb-5" style="width: 20rem;">
            <img src="https://dummyimage.com/500x500/333/fff" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Kelas</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, corrupti
                    facernulla
                    maiores debitis quaerat nemo voluptatem dicta ducimus ipsum pariatur corporis aliquid. Provident
                    quod
                    perspiciatis a, ad eius perferendis.
                </p>
                <a href="/kelas" class="btn btn-primary w-100">Kelas</a>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\School\Kelas XI\Pemrograman Web\bayar_spp\resources\views/home.blade.php ENDPATH**/ ?>