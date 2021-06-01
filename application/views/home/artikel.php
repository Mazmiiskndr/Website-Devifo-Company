 <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Blog</li>
        </ol>
        <h2>Blog</h2> 

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">
            <?php foreach($tugas as $row) { ?>

            <article class="entry">

              <div class="entry-img">
                <img src="<?= base_url().'assets/uploads/tugas/'.$row->gambar ?>" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="<?= base_url('dashboard/detail_artikel') ?>"><?= $row->judul ?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="<?= base_url('dashboard/detail_artikel') ?>">Moch Azmi Iskandar</a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="<?= base_url('dashboard/detail_artikel') ?>"><time datetime="2020-01-01">Maret, 2021</time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="<?= base_url('dashboard/detail_artikel') ?>">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  <?= substr($row->artikel, 0,500) ?>
                </p>
                <div class="read-more">
                  <a href="<?= base_url('dashboard/detail_artikel/'.$row->id) ?>">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          <?php } ?>

          
            

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li class="disabled"><i class="icofont-rounded-left"></i></li>
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
              </ul>
            </div>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="icofont-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li><a href="#">General <span>(25)</span></a></li>
                  <li><a href="#">Lifestyle <span>(12)</span></a></li>
                  <li><a href="#">Travel <span>(5)</span></a></li>
                  <li><a href="#">Design <span>(22)</span></a></li>
                  <li><a href="#">Creative <span>(8)</span></a></li>
                  <li><a href="#">Educaion <span>(14)</span></a></li>
                </ul>
              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="<?= base_url('assets/presento/') ?>assets/img/blog/blog-recent-1.jpg" alt="">
                  <h4><a href="<?= base_url('dashboard/detail_artikel') ?>">Nihil blanditiis at in nihil autem</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="<?= base_url('assets/presento/') ?>assets/img/blog/blog-recent-2.jpg" alt="">
                  <h4><a href="<?= base_url('dashboard/detail_artikel') ?>">Quidem autem et impedit</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="<?= base_url('assets/presento/') ?>assets/img/blog/blog-recent-3.jpg" alt="">
                  <h4><a href="<?= base_url('dashboard/detail_artikel') ?>">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="<?= base_url('assets/presento/') ?>assets/img/blog/blog-recent-4.jpg" alt="">
                  <h4><a href="<?= base_url('dashboard/detail_artikel') ?>">Laborum corporis quo dara net para</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

                <div class="post-item clearfix">
                  <img src="<?= base_url('assets/presento/') ?>assets/img/blog/blog-recent-5.jpg" alt="">
                  <h4><a href="<?= base_url('dashboard/detail_artikel') ?>">Et dolores corrupti quae illo quod dolor</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>

              </div><!-- End sidebar recent posts-->

              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  <li><a href="#">App</a></li>
                  <li><a href="#">IT</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Mac</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Smart</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->