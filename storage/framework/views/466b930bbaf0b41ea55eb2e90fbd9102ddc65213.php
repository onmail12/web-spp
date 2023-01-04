<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Pembayaran SPP</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('assets/favicon.ico')); ?> " />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="css/_style.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column">
    <main class="flex-shrink-0 min-vh-100">
        <!-- Navbar -->
        <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        

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
    </main>
    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto">
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