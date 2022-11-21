<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Pembayaran SPP</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('assets/favicon.ico')); ?> " />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="css/_style.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
            <div class="container px-5">
                <a class="navbar-brand fw-bolder" href="index.html">Website Pembayaran SPP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link px-3" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="/siswa">Siswa</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="/kelas">Kelas</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="/spp">Spp</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link px-2 dropdown-toggle" id="navbarDropdownBlog" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Pembayaran</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                <li><a class="dropdown-item" href="/pembayaran">Transaksi Pembayaran</a></li>
                                <li><a class="dropdown-item" href="blog-post.html">Histori Pembayaran</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <?php if (! empty(trim($__env->yieldContent('header')))): ?>
        <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col">
                        <div class="my-5 text-center text-xl-start">
                            <?php echo $__env->yieldContent('header'); ?>
                        </div>
                    </div>
                    <div class="col">
                        <img class="rounded" src="https://dummyimage.com/600x400/333/fff" alt="">
                    </div>
                </div>
            </div>
        </header>
        <?php else: ?>

        <?php endif; ?>

        <div class="container px-5 my-5">
            <?php echo $__env->yieldContent('main'); ?>
        </div>

        <!-- Testimonial section-->
        
    </main>
    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto fixed-bottom">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white">Copyright &copy; Your Website 2022</div>
                </div>
                <div class="col-auto">
                    <div class="small m-0 text-white">
                        <i class="bi bi-bootstrap mx-2"></i>Made with bootstrap!
                    </div>
                </div>
                <div class="col-auto">
                    <a class="link-light small" href="#!">Privacy</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">Terms</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">Contact</a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html><?php /**PATH D:\School\Kelas XI\Pemrograman Web\bayar_spp\resources\views/layout.blade.php ENDPATH**/ ?>