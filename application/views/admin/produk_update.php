<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap">
			            <h3 class="title-1"><i class="fas fa-sm fa-edit"></i> Update Produk</h3>
			            <?= anchor('admin/produk/','<button class="btn btn-danger">
			                <i class="fa fa-backward"></i> Kembali
			            </button>') ?>

				    </div>
				</div>

				<div class="col-lg-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <strong>Update Produk</strong>

                        </div>
                        <div class="card-body card-block">
                        	<?php foreach($produk as $row) { ?>
                        	<form action="<?= base_url('admin/produk/update_produk_aksi') ?>" class="form-group" method="post" enctype="multipart/form-data">
                                <div>
                                    <label class="form-control-label">Kategori</label>
                                     <input type="hidden" id="id" name="id" class="form-control" value="<?= $row->id ?>">
                                    <select name="nama_kategori" class="form-control">
                                            <option value="<?= $row->nama_kategori  ?>"><?= $row->nama_kategori ?></option>
                                            <?php foreach($kategori as $kt) { ?>
                                            <option value="<?= $kt->name  ?>"><?= $kt->name ?></option>
                                            <?php } ?>
                              
                                        </select>
                                    <?= form_error('nama_kategori', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Nama Produk</label>
                                    <input type="text" id="name" name="name" class="form-control" value="<?= $row->name ?>">
                                    <?= form_error('name', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Harga</label>
                                    <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Rp.</span>
                                    </div>
                                    <input type="text" name="harga" value="<?= $row->harga ?>" class="form-control" id="harga">
                                  </div>
                                    <?= form_error('harga', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <div>
                                    <label class="form-control-label">Diskon</label>
                                    <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text">Rp.</span>
                                    </div>
                                    <input type="text" name="diskon" value="<?= $row->diskon ?>"  class="form-control" id="diskon">
                                  </div>
                                    <?= form_error('diskon', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <div>
                                    <label class="form-control-label">Kode Produk</label>
                                    <input type="text" id="kode_produk" name="kode_produk" class="form-control" value="<?= $row->kode_produk ?>">
                                    <?= form_error('kode_produk', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Stok</label>
                                    <input type="text" id="stok" name="stok" class="form-control" value="<?= $row->stok ?>">
                                    <?= form_error('stok', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Status</label>
                                    <select name="status" class="form-control">
                                            <option value="<?= $row->status  ?>"><?= $row->status ?></option>
                                            <option value="Tersedia">Tersedia</option>
                                            <option value="Tidak Tersedia">Tidak Tersedia</option>
                              
                                        </select>
                                </div>
                                <br>
                                
                                <div>
                                    <label class="form-control-label">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"><?= $row->deskripsi ?></textarea>
                                    <?= form_error('deksripsi', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                    <label class="mt-2 form-control-label">Upload Photo</label>
                                    <input type="file" id="file-input" name="userfile" class="form-control-file" value="<?= $row->gambar ?>">               
                                </div>
                                <br>
                                 <div>
                                    <button type="submit" class="btn btn-lg btn-info btn-block">
                                        <i class="fa fa-edit fa-lg"></i>&nbsp;
                                        <span id="payment-button-amount">Update</span>
                                     
                                    </button>
                                </div>
                            </form>
                        	<?php } ?>
                        </div>
                        	
                    </div>
                </div>

			</div>
		</div>
	</div>
</div>