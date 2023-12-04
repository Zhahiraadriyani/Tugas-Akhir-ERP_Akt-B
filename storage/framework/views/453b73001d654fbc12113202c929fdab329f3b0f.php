<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Halaman Utama Sebelum Login | Aplikasi Kasir</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <link href="<?php echo e(asset('zinc')); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('zinc')); ?>/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('zinc')); ?>/css/swiper.css" rel="stylesheet">
    <link href="<?php echo e(asset('zinc')); ?>/css/styles.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="<?php echo e(asset('img')); ?>/favicon/laravel.ico">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbarExample">

    <!-- Navigation -->
    <nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
        <div class="container">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <a class="navbar-brand logo-text" href="index.html">Zhahira Adriyani Pocket</a>
            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#header">Home</a>
                    </li>
                </ul>
                <?php if(Route::has('login')): ?>
                <?php if(auth()->guard()->check()): ?>
                <span class="nav-item">
                    <a class="btn-solid-sm" href="<?php echo e(url('/home')); ?>">Home</a>
                </span>
                <?php else: ?>
                <span class="nav-item">
                    <a class="btn btn-danger" href="<?php echo e(route('login')); ?>" >Masuk Akun</a>
                </span>
                <?php if(Route::has('register')): ?>
                <span class="nav-item">
                    <a class="btn btn-danger" href="<?php echo e(route('register')); ?>">Daftar Akun</a>
                </span>
                <?php endif; ?>
                <?php endif; ?>
                <?php endif; ?>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h1 class="h1-large">Aplikasi Kasir</h1>
                        <p class="p-large">Meningkatkan efisiensi, efektivitas, dan kualitas proses bisnis 
                            serta mengurangi biaya, waktu, dan risiko operasional</p>
                        <?php if(Route::has('login')): ?>
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            <?php if(auth()->guard()->check()): ?>
                            <a href="<?php echo e(url('/home')); ?>" class="btn-solid-lg">Halaman Utama</a>
                            <?php else: ?>
                            <a href="<?php echo e(route('login')); ?>" class="btn btn-danger">Masuk Akun</a>
                            <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>" class="btn btn-danger">Daftar Akun</a>
                            <?php endif; ?>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="<?php echo e(asset('zinc')); ?>/images/4807606_2529134.jpg"
                            alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->

    <div class="mt-5 mb-5"></div>

    <!-- Footer -->
    <div class="footer bg-white mt-5">
        <img class="img-fluid" src="<?php echo e(asset('zinc')); ?>/images/Indonesia landmark.jpg" alt="alternative">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Web Portofolio : Zhahira Adriyani</a></h4>
                    <h4>NIM : 12030120130242</a></h4>
                    <h4>Kelas : ERP Akuntansi S1 B</a></h4>
                    <div class="social-container">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-youtube fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of social-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright bg-gray mt-5">
        <div class="container">
            <div class="row">
                <!-- end of col -->
                <div class="col-lg-7">
                    <h4><p class="p-small statement">Copyright © <a href="#">Zhahira Adriyani</a></p></a></h4>
                    <h4><p class="p-small statement">Distributed By: <a href="https://www.instagram.com/zhahirradr/"
                            target="_blank">Zhahira Adriyani</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="<?php echo e(asset('zinc')); ?>/images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->

    <!-- Scripts -->
    <script src="<?php echo e(asset('zinc')); ?>/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="<?php echo e(asset('zinc')); ?>/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="<?php echo e(asset('zinc')); ?>/js/purecounter.min.js"></script>
    <!-- Purecounter counter for statistics numbers -->
    <script src="<?php echo e(asset('zinc')); ?>/js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="<?php echo e(asset('zinc')); ?>/js/scripts.js"></script> <!-- Custom scripts -->
</body>

</html>
<?php /**PATH C:\Tugas Akhir ERP Zhahira\app_laravel_8_kasir_jcc\resources\views/welcome.blade.php ENDPATH**/ ?>