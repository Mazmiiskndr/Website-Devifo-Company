<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/uploads/favicon/') ?>iconhacker.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.4/dist/sweetalert2.all.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/afterglowplayer@1.x"></script>

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/presento/') ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/presento/') ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/presento/') ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/presento/') ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/presento/') ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url('assets/presento/') ?>assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?= base_url('assets/presento/') ?>assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/presento/') ?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Presento - v1.0.0
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-xl-10 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="<?= base_url('') ?>">Moch Azmi Iskandar<span>.</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="<?= base_url('dashboard') ?>">Home</a></li>
              <li><a href="#portfolio">Portfolio</a></li>
              <li><a href="#pricing">Packet</a></li>
              <li><a href="#video">Video</a></li>
              <li><a href="#services">Services</a></li>
              <li><a href="#testimonials">Testimonials</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#team">Team</a></li>
<!--               <li><a href="<?= base_url('dashboard/blog') ?>">Blog</a></li> -->
              <li><a href="#contact">Contact</a></li>
              <li><a href="<?= base_url('dashboard/blog') ?>">Tugas</a></li>
            </ul>
          </nav><!-- .nav-menu -->

          <a href="<?= base_url('auth/login') ?>" class="get-started-btn scrollto">Login</a>
        </div>
      </div>

    </div>
  </header><!-- End Header -->