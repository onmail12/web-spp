<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Pembayaran SPP</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="laravel.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel="stylesheet" />
    <script src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand fw-bolder" href="index.html"><img src="smkn6.png" width="40px" alt=""> Website
                    Pembayaran SPP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link px-2" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-2" href="/petugas">Petugas</a></li>
                        <li class="nav-item"><a class="nav-link px-2" href="/siswa">Siswa</a></li>
                        <li class="nav-item"><a class="nav-link px-2" href="/kelas">Kelas</a></li>


                        <li class="nav-item dropdown">
                            <a class="nav-link px-2 dropdown-toggle" id="navbarDropdownBlog" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Pembayaran</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                <li><a class="dropdown-item" href="blog-home.html">Transaksi Pembayaran</a></li>
                                <li><a class="dropdown-item" href="blog-post.html">Histori Pembayaran</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link px-2" href="/spp">Admin</a></li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <?php if (! empty(trim($__env->yieldContent('header')))): ?>
        <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-auto col-xxl-auto">
                        <div class="my-5 text-center text-xl-start">
                            
                            <?php echo $__env->yieldContent('header'); ?>
                        </div>
                    </div>
                    
                </div>
            </div>
        </header>
        <?php else: ?>

        <?php endif; ?>

        <!-- Features section-->
        <section class="py-5 my-5">


            <div class="container px-5 my-5">
                <?php echo $__env->yieldContent('main'); ?>
            </div>
        </section>
        <!-- Testimonial section-->
        
    </main>
    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto ">
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
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/bootstrap.js"></script>
</body>

</html><?php /**PATH D:\School\Kelas XI\Pemrograman Web\bayar_spp\resources\views/layout.blade.php ENDPATH**/ ?>