
  <section id="hero" class="d-flex align-items-center" style="background: url('<?= base_url().'assets/uploads/site/'.$gambar ?>') top center no-repeat;">

    <div class="container-fluid" data-aos="zoom-out" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-10">
          <div class="row">
            <div class="col-xl-5"> 
              <h1><?= $judul ?></h1>
              <h2><?= $deskripsi ?></h2>
              <a href="<?= base_url('auth/register') ?>" class="btn-get-started scrollto">Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container-fluid" data-aos="zoom-in">
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="owl-carousel clients-carousel">
              <?php foreach($sponsor as $row) { ?>
              <img src="<?= base_url(). 'assets/uploads/sponsor/'.$row->gambar ?>" alt="">
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Clients Section -->+
    

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up"><?= $jumlah_users ?></span>
              <p>Users</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-files-stack"></i>
              <span data-toggle="counter-up"><?= $jumlah_produk ?></span>
              <p>Portfolio</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-video"></i>
              <span data-toggle="counter-up"><?= $jumlah_video ?></span>
              <p>Video</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up"><?= $jumlah_team ?></span>
              <p>Teams</p>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <form action="<?= base_url('admin/pengaturan/update_home_aksi') ?>" class="form-group" method="post" enctype="multipart/form-data">
              <input type="hidden" id="id" name="id" class="form-control" value="<?= $id ?>">
              <p name="deskripsi_portfolio" id="deskripsi_portfolio" rows="3" ><?= $deskripsi_portfolio ?></p>       
          </form>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <?php foreach($kategori as $row) { ?>
              <li data-filter=".<?= $row->name ?>"><?= $row->name ?></li>
              <?php } ?>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <?php foreach($produk as $prdk) { ?>
          <div class="col-lg-4 col-md-6 portfolio-item <?= $prdk->nama_kategori ?>">
            <div class="portfolio-wrap">
              <img src="<?= base_url(). 'assets/uploads/produk/'.$prdk->gambar ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?= $prdk->name ?></h4>
                <p><?= $prdk->nama_kategori ?></p>
                <?php 
            $total = $prdk->harga - $prdk->diskon;
          ?>
              <p>Rp. <?php if($prdk->diskon == true ){
            echo number_format($total,0,',','.');
          }else{
            echo number_format($prdk->harga,0,',','.');
          } ?></p>
                <div class="portfolio-links">
                  <a href="<?= base_url(). 'assets/uploads/produk/'.$prdk->gambar ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="<?= base_url('dashboard/detail/'.$prdk->id) ?>" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        

        </div>

      </div>
    </section><!-- End Portfolio Section -->


     <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Packet</h2>
          <form action="<?= base_url('admin/pengaturan/update_home_aksi') ?>" class="form-group" method="post" enctype="multipart/form-data">
              <input type="hidden" id="id" name="id" class="form-control" value="<?= $id ?>">
              <p name="deskripsi_packet" id="deskripsi_packet" rows="3" ><?= $deskripsi_packet ?></p>       
         </form>
        </div>

        <div class="row">
          <?php foreach( $paket as $row){ ?>
          <div class="col-lg-4 col-md-6 mt-4">
            <div class="box featured" data-aos="fade-up" data-aos-delay="100">
              <h3><?= $row->nama_paket ?></h3>
              <h4><sup>Rp. </sup><?= number_format($row->harga,0,',','.'); ?><span>,-</span></h4>
              <ul>
                <li><?= $row->caption1 ?></li>
                <li><?= $row->caption2 ?></li>
                <li><?= $row->caption3 ?></li>
                <li><?= $row->caption4 ?></li>
                <li class="na"><?= $row->caption5 ?></li>
              </ul> 
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>
        <?php } ?>


          

        </div>

      </div>
    </section><!-- End Pricing Section -->


    

    

    <section id="video" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Video</h2>
          <form action="<?= base_url('admin/pengaturan/update_home_aksi') ?>" class="form-group" method="post" enctype="multipart/form-data">
              <input type="hidden" id="id" name="id" class="form-control" value="<?= $id ?>">
              <p name="deskripsi_portfolio" id="deskripsi_portfolio" rows="3" ><?= $deskripsi_portfolio ?></p>       
          </form>
        </div>
        

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <?php foreach($kategori_video as $row) { ?>
              <li data-filter=".<?= $row->name ?>"><?= $row->name ?></li>
              <?php } ?>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <?php foreach($video as $row) { ?>
          <div class="col-lg-4 col-md-6 portfolio-item <?= $row->kategori_video ?>">
            <div class="portfolio">
             <video class="afterglow img-fluid" id="myvideo" width="1280" height="720">
                    <source type="video/mp4" src="<?= base_url() . 'assets/uploads/video/' . $row->video; ?>" />
              </video>
              <div class="portfolio-info">
                <h4><?= $row->judul_video ?></h4>
                <p><?= $row->kategori_video ?></p>
                <div class="portfolio-links">
                  
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        

        </div>

      </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Tabs Section ======= -->
   <!--  <section id="tabs" class="tabs">
      <div class="container" data-aos="fade-up">
         <div class="section-title">
          <h2>Video</h2>
        </div>

        <ul class="nav nav-tabs row d-flex">
          <?php foreach($video as $row) { ?>
          <li class="nav-item col-3">
            <a class="nav-link show" data-toggle="tab" href="#<?= $row->href ?>">
              <i class="<?= $row->icon ?>"></i>
              <h4 class="d-none d-lg-block"><?= $row->kategori_video ?></h4>
            </a>
          </li>
          <?php } ?>
          
        </ul>

        <div class="tab-content">
          <?php foreach($video as $row) { ?>
          <div class="tab-pane show" id="<?= $row->href ?>">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                <h3><?= $row->judul_video ?></h3>
                
                <p>
                 <?= $row->deskripsi ?>
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <video class="afterglow img-fluid" autoplay id="myvideo" width="1280" height="720">
                    <source type="video/mp4" autoplay src="<?= base_url() . 'assets/uploads/video/' . $row->video; ?>" />
                </video>
              </div>
            </div>
          </div>
          <?php } ?>
          
          
        </div>

      </div>
    </section> -->
    <!-- End Tabs Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg ">
      <div class="container" data-aos="fade-up">

        <div class="section-title">

          <h2>Services</h2>
          <form action="<?= base_url('admin/pengaturan/update_home_aksi') ?>" class="form-group" method="post" enctype="multipart/form-data">
              <input type="hidden" id="id" name="id" class="form-control" value="<?= $id ?>">
              <p name="deskripsi_services" id="deskripsi_services" rows="3" ><?= $deskripsi_services ?></p>       
          </form>
        </div>

        <div class="row">
          <?php foreach($services as $row){ ?>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="<?= $row->icon ?>"></i>
              <h4><a href="#"><?= $row->judul ?></a></h4>
              <p><?= $row->deskripsi ?></p>
            </div>
          </div>
          <?php } ?>
    
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Testimonials</h2>
          <form action="<?= base_url('admin/pengaturan/update_home_aksi') ?>" class="form-group" method="post" enctype="multipart/form-data">
              <input type="hidden" id="id" name="id" class="form-control" value="<?= $id ?>">
              <p name="deskripsi_testimonials" id="deskripsi_testimonials" rows="3" ><?= $deskripsi_testimonials ?></p>       
          </form>
          <br>
          <a href="<?= base_url('dashboard/testimoni') ?>" class="btn btn-primary text-center"> Testimoni</a>
        </div>
      </div>

      <div class="container-fluid">

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="owl-carousel testimonials-carousel">
              <?php foreach($testimoni as $row){ ?>
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="<?= base_url(). 'assets/uploads/testimoni/'.$row->gambar ?>" class="testimonial-img" alt="">
                  <h3><?= $row->nama ?></h3>
                  <h4><?= $row->email ?></h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    <?= $row->deskripsi ?>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
              <?php } ?>



      

            </div>
          </div>
        </div>


      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch">
            <div class="content">
              <h3 class="text-center">ABOUT US</h3>
              <form action="<?= base_url('admin/pengaturan/update_home_aksi') ?>" class="form-group" method="post" enctype="multipart/form-data">
              <input type="hidden" id="id" name="id" class="form-control" value="<?= $id ?>">
              <p name="deskripsi_about" id="deskripsi_about" rows="3" ><?= $deskripsi_about ?></p>       
              </form>
              <a href="#" class="about-btn"><span>About us</span> <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <?php foreach($about as $row){ ?>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="<?= $row->icon ?>"></i>
                  <h4><?= $row->judul ?></h4>
                  <p><?= $row->deskripsi ?></p>
                </div>
                <?php } ?>
  
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Questions</h2>
        </div>

        <ul class="faq-list" data-aos="fade-up">
          <?php 
            $no = 1;
            foreach($pertanyaan as $row){ 
            ?>
          <li>
            <a data-toggle="collapse" class="collapsed" href="#<?= $row->href ?>"><?= $row->judul ?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="<?= $row->href ?>" class="collapse" data-parent=".faq-list">
              <p>
                <?= $row->deskripsi ?>                
              </p>
            </div>
          </li>

          <?php } ?>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <form action="<?= base_url('admin/pengaturan/update_home_aksi') ?>" class="form-group" method="post" enctype="multipart/form-data">
              <input type="hidden" id="id" name="id" class="form-control" value="<?= $id ?>">
              <p name="deskripsi_team" id="deskripsi_team" rows="3" ><?= $deskripsi_team ?></p>       
         </form>
        </div>

        <div class="row">
          <?php foreach($team as $row){ ?>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="<?= base_url(). 'assets/uploads/team/'.$row->gambar ?>" class="img-fluid" alt="">
                <div class="social">
                  <a href="<?= $row->facebook ?>"><i class="icofont-facebook"></i></a>
                  <a href="<?= $row->instagram ?>"><i class="icofont-instagram"></i></a>
                  <a href="<?= $row->whatsapp ?>"><i class="icofont-whatsapp"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4><?= $row->nama ?></h4>
                <span><?= $row->jabatan ?></span>
              </div>
            </div>
          </div>
          <?php } ?>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <form action="<?= base_url('admin/pengaturan/update_home_aksi') ?>" class="form-group" method="post" enctype="multipart/form-data">
              <input type="hidden" id="id" name="id" class="form-control" value="<?= $id ?>">
              <p name="deskripsi_contact" id="deskripsi_contact" rows="3" ><?= $deskripsi_contact ?></p>       
         </form>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>Tasikmalaya, Perum Mitra Batik, Blok E148</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>azmiiskandar0@devifo.com<br>amarmtqn@devifo.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+62 8229 5153 183<br>+1 6678 254445 41</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="<?= base_url('dashboard/contact_aksi') ?>" method="post" class="form-group">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="Your Name" required />
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required/>
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"  required/>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="deskripsi" rows="5"  placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <!-- <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center"><button type="submit" class="btn btn-danger">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main