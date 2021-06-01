<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?= base_url('') ?>">Home</a></li>
          <li>Testimoni</li>
        </ol>
        <h2>Testimoni</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">

      <div class="container" data-aos="fade-up">
        <h3 class="mb-3 text-center">Berikan Testimoni</h3>
        <br>
        <div class="col-lg-12">
            <form action="<?= base_url('dashboard/testimoni_aksi') ?>" method="post" class="form-group">
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
    </section>

  </main><!-- End #main -->
