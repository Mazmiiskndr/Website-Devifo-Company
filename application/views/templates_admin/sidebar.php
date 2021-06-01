<!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?= base_url('assets/admin/') ?>images/icon/LogoAdmin.png" class="ml-3" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li <?= $this->uri->segment(2) == 'dashboard' ? 'class="active has-sub"' : '' ?>>
                            <a class="js-arrow" href="<?= base_url('admin/dashboard') ?>">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li  <?= $this->uri->segment(2) == 'artikel' ? 'class="active has-sub"' : '' ?>>
                            <a href="<?= base_url('admin/artikel') ?>">
                                <i class="fas fa-book"></i>Kelola Artikel</a>
                        </li>
                        <li  <?= $this->uri->segment(2) == 'kategori' ? 'class="active has-sub"' : '' ?>>
                            <a href="<?= base_url('admin/kategori') ?>">
                                <i class="fas fa-list-ul"></i>Kategori Produk</a>
                        </li>
                        <li  <?= $this->uri->segment(2) == 'kategori_video' ? 'class="active has-sub"' : '' ?>>
                            <a href="<?= base_url('admin/kategori_video') ?>">
                                <i class="fas fa-bars"></i>Kategori Video</a>
                        </li>
                        <li <?= $this->uri->segment(2) == 'produk' ? 'class="active has-sub"' : '' ?>>
                            <a href="<?= base_url('admin/produk/') ?>">
                                <i class="fas fa-shopping-cart"></i>Produk</a>
                        </li>
                        <li <?= $this->uri->segment(2) == 'video' ? 'class="active has-sub"' : '' ?>>
                            <a href="<?= base_url('admin/video/') ?>">
                                <i class="fas fa-video-camera"></i>Video</a>
                        </li>

                        <li <?= $this->uri->segment(2) == 'paket' ? 'class="active has-sub"' : '' ?>>
                            <a href="<?= base_url('admin/paket/') ?>">
                                <i class="fa fa-cube"></i>Paket</a>
                        </li>
        
                        <li <?= $this->uri->segment(2) == 'users' ? 'class="active has-sub"' : '' ?>>
                            <a href="<?= base_url('admin/users/') ?>">
                                <i class="fas fa-user-secret"></i>Users</a>
                        </li>
                        <li <?= $this->uri->segment(2) == 'transaksi' ? 'class="active has-sub"' : '' ?>>
                            <a href="<?= base_url('admin/team/') ?>">
                                <i class="fas fa-users"></i>Teams</a>
                        </li>
                        <li <?= $this->uri->segment(2) == 'contact' ? 'class="active has-sub"' : '' ?>>
                            <a href="<?= base_url('admin/contact/') ?>">
                                <i class="fas fa-phone"></i>Contact</a>
                        </li>
                        <li <?= $this->uri->segment(2) == 'testimoni' ? 'class="active has-sub"' : '' ?>>
                            <a href="<?= base_url('admin/testimoni/') ?>">
                                <i class="fa fa-comments"></i>Testimonials</a>
                        </li>
                        <li <?= $this->uri->segment(2) == 'sponsor' ? 'class="active has-sub"' : '' ?>>
                            <a href="<?= base_url('admin/sponsor/') ?>">
                                <i class="fa fa-handshake-o"></i>Sponsorship</a>
                        </li>
                        <li>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-cogs"></i>Pengaturan</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?= base_url('admin/pengaturan/') ?>"> Header</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('admin/pengaturan/home') ?>"> Home</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('admin/pengaturan/about/') ?>"> About Us</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('admin/pengaturan/services/') ?>"> Services</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('admin/pengaturan/pertanyaan') ?>"> Questions</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('admin/pengaturan/tugas') ?>"> Tugas</a>
                                </li>

                            </ul>
                        </li>

                        <li>
                            <a href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-power-off"></i>Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">