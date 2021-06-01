<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Portfolio Details</li>
        </ol>
        <h2>Portfolio Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->
  <?php foreach($detail as $dt) { ?>
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">
        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="<?= base_url(). 'assets/uploads/produk/'.$dt->gambar ?>" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Name</strong> : <?= $dt->name ?></li>
              <li><strong>Category</strong> : <?= $dt->nama_kategori ?></li>
              <?php 
            $total = $dt->harga - $dt->diskon;
          ?>
              <li><strong>Price</strong> : Rp. <?php if($dt->diskon == true ){
            echo number_format($total,0,',','.');
          }else{
            echo number_format($dt->harga,0,',','.');
          } ?></li>
              <li><strong>Code Product</strong> : <?= $dt->kode_produk ?></li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>Description</h2>
          <p>
            <?= $dt->deskripsi ?>
          </p>
        </div>
          <a href="<?= base_url('dashboard') ?>" class="btn btn-danger btn-sm ">Back</a>
      </div>
    </section><!-- End Portfolio Details Section -->
<?php } ?>

  </main><!-- End #main -->