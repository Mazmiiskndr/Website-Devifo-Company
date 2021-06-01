
                                <br><div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap">
			            <h3 class="title-1"><i class="fas fa-sm fa-plus"></i> Tambah Produk</h3>
			            <?= anchor('admin/produk/','<button class="btn btn-danger">
			                <i class="fa fa-backward"></i> Kembali
			            </button>') ?>
			            

				    </div>
				</div>

				<div class="col-lg-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <strong>Tambah Produk</strong>

                        </div>
                        <div class="card-body card-block">
                        	<form action="<?= base_url('admin/produk/tambah_produk_aksi') ?>" class="form-group" method="post" enctype="multipart/form-data">
                                <div>
                                    <label class="form-control-label">Kategori</label>
                                    <select name="nama_kategori" class="form-control">
                                            <option value="">- Pilih Kategori -</option>
                                            <?php foreach($kategori as $row) { ?>
                                            <option value="<?= $row->name  ?>"><?= $row->name ?></option>
                                            <?php } ?>
                              
                                        </select>
                                    <?= form_error('nama_kategori', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Nama Produk</label>
                                    <input type="text" id="name" name="name" placeholder="Masukan Nama Produk" class="form-control" value="<?= set_value('name') ?>">
                                    <?= form_error('name', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Harga</label>
                                    <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Rp.</span>
                                    </div>
                                    <input type="text" name="harga" value="<?php echo set_value('harga'); ?>" placeholder="Masukan Harga Produk" class="form-control" id="harga">
                                  </div>
                                    <?= form_error('harga', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <div>
                                    <label class="form-control-label">Diskon</label>
                                    <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Rp.</span>
                                    </div>
                                    <input type="text" name="diskon" value="<?php echo set_value('diskon'); ?>" placeholder="Masukan Diskon Produk" class="form-control" id="diskon">
                                  </div>
                                    <?= form_error('diskon', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <div>
                                    <label class="form-control-label">Kode Produk</label>
                                    <input type="text" id="kode_produk" name="kode_produk" placeholder="Masukan Kode Produk" class="form-control" value="<?= set_value('kode_produk') ?>">
                                    <?= form_error('kode_produk', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Stok</label>
                                    <input type="text" id="stok" name="stok" placeholder="Masukan Stok Produk" class="form-control" value="<?= set_value('stok') ?>">
                                    <?= form_error('stok', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                
                                <br>
                                <div>
                                    <label class="form-control-label">Status</label>
                                    <select name="status" class="form-control">
                                            <option value="">- Pilih Status -</option>
        
                                            <option value="Tersedia">Tersedia</option>
                                            <option value="Tidak Tersedia">Tidak Tersedia</option>

                              
                                        </select>
                                    <?= form_error('status', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                                    <?= form_error('deskripsi', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Photo Produk</label>
                                    <input type="file" id="file-input" name="gambar" class="form-control-file" value="<?= set_value('gambar') ?>">               
                                </div>
                                <br>
                                 <div>
                                    <button type="submit" class="btn btn-lg btn-info btn-block">
                                        <i class="fa fa-floppy-o fa-lg"></i>&nbsp;
                                        <span id="payment-button-amount">Simpan</span>
                                     
                                    </button>
                                </div>
                            </form>
                        </div>
                        	
                    </div>
                </div>

			</div>
		</div>
	</div>
</div>