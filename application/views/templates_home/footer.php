<!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3><?= $judul ?><span>.</span></h3>
            <p>
              Tasikmalaya <br>
              Perum Mitra Batik, Blok E148<br>
              Indonesian <br><br>
              <strong>Phone:</strong> +92 8229 5153 183<br>
              <strong>Email:</strong> azmiiskandar0@devifo.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url('dashboard') ?>">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Portfolio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#team">Team</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <?php foreach($services as $row){ ?>
              <li><i class="bx bx-chevron-right"></i> <a href=""><?= $row->judul ?></a></li>
              <?php } ?>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Register</h4>
            <p>Jika belum mempunyai akun bisa klik dibawah ini!</p>
            <a href="<?= base_url('auth/register/') ?>" class="btn btn-danger">Register</a>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Devifo Studio</span></strong>
        </div>
        <div class="credits">
          Designed by <a href="https://www.facebook.com/Miee.xtc/">Moch Azmi Iskandar</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://www.facebook.com/Miee.xtc/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/m.azmiiskndr/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://api.whatsapp.com/send?phone=6282295153183" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/presento/') ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/presento/') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/presento/') ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url('assets/presento/') ?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url('assets/presento/') ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url('assets/presento/') ?>assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?= base_url('assets/presento/') ?>assets/vendor/counterup/counterup.min.js"></script>
  <script src="<?= base_url('assets/presento/') ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url('assets/presento/') ?>assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?= base_url('assets/presento/') ?>assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/presento/') ?>assets/js/main.js"></script>

</body>

</html>
