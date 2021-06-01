 <!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <link href="<?= base_url('') ?>assets/uploads/favicon/devifo3.png" rel="icon">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.4/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/afterglowplayer@1.x"></script>
<link rel="stylesheet" href="<?= base_url('') ?>assets/summernote/summernote-bs4.css">
    <!-- Fontfaces CSS-->
    <link href="<?= base_url('') ?>assets/admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?= base_url('') ?>assets/admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('') ?>assets/admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('') ?>assets/admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= base_url('') ?>assets/admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?= base_url('') ?>assets/admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('') ?>assets/admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('') ?>assets/admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?= base_url('') ?>assets/admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('') ?>assets/admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?= base_url('') ?>assets/admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('') ?>assets/admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url('') ?>assets/admin/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="<?= base_url('') ?>assets/admin/images/icon/LogoAdmin.png" class="ml-3" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="<?= base_url('') ?>admin/dashboard">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="<?= base_url('') ?>admin/artikel">
                                <i class="fas fa-list-ul"></i>Kelola Artikel</a>
                        </li>
                        <li>
                            <a href="<?= base_url('') ?>admin/kategori">
                                <i class="fas fa-list-ul"></i>Kategori Produk</a>
                        </li>
                        <li>
                            <a href="<?= base_url('') ?>admin/kategori_video">
                                <i class="fas fa-bars"></i>Kategori Video</a>
                        </li>
                        <li>
                            <a href="<?= base_url('') ?>admin/produk/">
                                <i class="fas fa-shopping-cart"></i>Produk</a>
                        </li>
                        <li>
                            <a href="<?= base_url('') ?>admin/video/">
                                <i class="fas fa-video-camera"></i>Video</a>
                        </li>
                        <li>
                            <a href="<?= base_url('') ?>admin/paket/">
                                <i class="fa fa-cube"></i>Paket</a>
                        </li>
                        <li>
                            <a href="<?= base_url('') ?>admin/users/">
                                <i class="fas fa-user-secret"></i>Users</a>
                        </li>
                        <li>
                            <a href="<?= base_url('') ?>admin/team/">
                                <i class="fas fa-users"></i>Teams</a>
                        </li>
                        <li>
                            <a href="<?= base_url('') ?>admin/contact/">
                                <i class="fas fa-phone"></i>Contact</a>
                        </li>
                        <li>
                            <a href="<?= base_url('') ?>admin/testimoni/">
                                <i class="fa fa-comment"></i>Testimonials</a>
                        </li>
                        <li>
                            <a href="<?= base_url('') ?>admin/sponsor/">
                                <i class="fa fa-handshake-o"></i>Sponsorship</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-cogs"></i>Pengaturan</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="<?= base_url('') ?>admin/pengaturan/">Header</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('') ?>admin/pengaturan/home">Home</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('') ?>admin/pengaturan/about/">About Us</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('') ?>admin/pengaturan/services"> Services</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('') ?>admin/pengaturan/pertanyaan"> Questions</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('') ?>admin/pengaturan/tugas"> Tugas</a>
                                </li>
                                
                            </ul>
                        </li>

                        <li>
                            <a href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-power-off"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->