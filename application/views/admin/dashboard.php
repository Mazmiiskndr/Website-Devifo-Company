 <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Dashboard</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue" data-toggle="modal" data-target="#controlPanel">
                                    <i class="fas fa-cogs"></i>Control Panel
                                </button>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-case"></i>
                                            </div>
                                            <div class="text">
                                                <h2>Product</h2>

                                                <h2 class="mt-2"><?= $jumlah_produk ?></h2>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-accounts"></i>
                                            </div>
                                            <div class="text">
                                                <h2>Users</h2>
                                                <h2 class="mt-2"><?= $jumlah_users ?></h2>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-comment"></i>
                                            </div>
                                            <div class="text">
                                                <h2>Testimonials</h2>
                                                <h2 class="mt-2"><?= $jumlah_testimonials ?></h2>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2>Pendapatan</h2>
                                                <h2 class="mt-2">Rp. 999.999</h2>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">Produk</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Produk</th>
                                                <th>Kode Produk</th>
                                                <th class="text-right">Harga</th>
                                                <th class="text-right">Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 1;
                                            foreach($produk as $row) { ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $row->name ?></td>
                                                <td><?= $row->kode_produk ?></td>
                                                <td class="text-right">Rp. <?= number_format($row->harga,0,',','.');?></td>

                                                <td class="text-right"><?= $row->status ?></td>
                                                <td>
                                                    <?= anchor('admin/produk/edit_produk/'.$row->id,'<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>') ?>
                                                    <?= anchor('admin/produk/hapus_produk/'.$row->id,'<div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div>') ?>
                                                </td>
                                            </tr>

                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="title-1 m-b-25">Kategori Produk</h2>
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                    <?php 
                                                        $no = 1;
                                                        foreach( $kategori as $row){
                                                     ?>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $row->name ?></td>
                                                        <td class="text-right">
                                                        <?= anchor('admin/kategori/update_kategori/'.$row->id,'<div class="btn btn-sm btn-info"><i class="fas fa-edit"></i></div>') ?>
                                                        <?= anchor('admin/kategori/delete_kategori/'.$row->id,'<div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div>') ?>
                                                    </td>
                                                    </tr>

                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="title-1 m-b-25">Team</h2>
                        <div class="row">

                               
                                     <?php foreach($team as $row) { ?>
                                    <div class="ml-3 card shadow-sm" style="width: 20rem;">
                                      <img src="<?= base_url(). 'assets/uploads/team/'.$row->gambar ?>" class="card-img-top">
                                      <div class="card-body">
                                        <h5 class="card-title"><?= $row->nama ?></h5>
                                        <p class="card-text"><?= $row->jabatan ?></p>
                                        <br>
                                        <a href="<?= $row->facebook ?>" class="btn btn-sm btn-primary"><i class="zmdi zmdi-facebook"></i></a>

                                        <a href="<?= $row->whatsapp ?>" class="btn btn-sm btn-success"><i class="zmdi zmdi-whatsapp"></i></a>

                                        <a href="<?= $row->instagram ?>" class="btn btn-sm btn-danger"><i class="zmdi zmdi-instagram"></i></a>
                                        <br>
                                        <hr>
                                        <?= anchor('admin/team/update_team/'.$row->id,'<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>') ?>
                                        <?= anchor('admin/team/delete_team/'.$row->id,'<div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div>') ?>

                                      </div>
                                    </div>
                                    <?php } ?>

                            </div>
                            
                            </div>
                        </div>