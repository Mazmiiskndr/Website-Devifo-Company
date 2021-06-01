            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © By <a href="https://www.facebook.com/Miee.xtc/">M Azmi Iskandar</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>



    <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"><strong>Ready to Leave?</strong></h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-footer">
              <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-sm btn-primary" href="<?= base_url('auth/login/logout') ?>">Logout</a>
            </div>
          </div>
        </div>
      </div>


      <!-- Control Panel Modal-->
  <div class="modal fade" id="controlPanel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><strong><i class="fas fa-cogs"></i> Control Panel</strong></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">

            <div class="col-md-3 text-center">
              <a href="<?= base_url('admin/kategori/') ?>" class="text-info text-center"><p class="nav-link small text-info">Kategori Produk</p></a>
              <i class="fa fa-3x fa-list-ul" aria-hidden="true"></i>

            </div>

            <div class="col-md-3 text-center">
              <a href="<?= base_url('admin/produk/') ?>" class="text-info text-center"><p class="nav-link small text-info">Produk</p></a>
              <i class="fas fa-3x fa-shopping-cart" aria-hidden="true"></i>

            </div>
            
            <div class="col-md-3 text-center">
              <a href="<?= base_url('admin/paket/') ?>" class="text-info text-center"><p class="nav-link small text-info">Paket</p></a>
              <i class="fa fa-3x fa-cube" aria-hidden="true"></i>

            </div>

            <div class="col-md-3 text-center">
              <a href="<?= base_url('admin/users/') ?>" class="text-info text-center"><p class="nav-link small text-info">Users</p></a>
              <i class="fa fa-3x fa-user-secret" aria-hidden="true"></i>

            </div>

          </div>
          <hr>
          <div class="row">

            <div class="col-md-3 text-center">
              <a href="<?= base_url('admin/team/') ?>" class="text-info text-center"><p class="nav-link small text-info">Teams</p></a>
              <i class="fa fa-3x fa-users" aria-hidden="true"></i>

            </div>

            <div class="col-md-3 text-center">
              <a href="<?= base_url('admin/contact/') ?>" class="text-info text-center"><p class="nav-link small text-info">Contact</p></a>
              <i class="fas fa-3x fa-phone" aria-hidden="true"></i>

            </div>
            
            <div class="col-md-3 text-center">
              <a href="<?= base_url('admin/testimoni/') ?>" class="text-info text-center"><p class="nav-link small text-info">Testimonials</p></a>
              <i class="fa fa-3x fa-comment" aria-hidden="true"></i>

            </div>

            <div class="col-md-3 text-center">
              <a href="#" class="text-info text-center"><p class="nav-link small text-info">Pengaturan</p></a>
              <i class="fa fa-3x fa-cogs" aria-hidden="true"></i>

            </div>

          

          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-sm btn-danger" type="button" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>


    <!-- Jquery JS-->
    <script src="<?= base_url('assets/admin/') ?>vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?= base_url('assets/admin/') ?>vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?= base_url('assets/admin/') ?>vendor/slick/slick.min.js">
    </script>
    <script src="<?= base_url('assets/admin/') ?>vendor/wow/wow.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendor/animsition/animsition.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?= base_url('assets/admin/') ?>vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?= base_url('assets/admin/') ?>vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?= base_url('assets/admin/') ?>vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?= base_url('assets/admin/') ?>js/main.js"></script>


    <script src="<?= base_url('assets/bootstrap/jquery/') . 'jquery3.js'; ?>"></script>
    <script src="<?= base_url('assets/bootstrap/popper/') . 'popper.js'; ?>"></script>
    <script src="<?= base_url('assets/bootstrap/js/') . 'bootstrap.js'; ?>"></script>
    <script src="<?= base_url('assets/summernote/') . 'summernote-bs4.js'; ?>"></script>
    <script>
        $(document).ready(function(){
            $('#summernote').summernote({
                height: "300px",
                callbacks: {
                    onImageUpload: function(image) {
                        uploadImage(image[0]);
                    },
                    onMediaDelete : function(target) {
                        deleteImage(target[0].src);
                    }
                }
            });

            function uploadImage(image) {
                var data = new FormData();
                data.append("image", image);
                $.ajax({
                    url: "<?php echo site_url('admin/artikel/upload_image')?>",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: data,
                    type: "POST",
                    success: function(url) {
                        $('#summernote').summernote("insertImage", url);
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            }

            function deleteImage(src) {
                $.ajax({
                    data: {src : src},
                    type: "POST",
                    url: "<?php echo site_url('admin/artikel/delete_image')?>",
                    cache: false,
                    success: function(response) {
                        console.log(response);
                    }
                });
            }

        });

    </script>
    

</body>

</html>
<!-- end document-->
