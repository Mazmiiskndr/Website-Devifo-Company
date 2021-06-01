<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap">
			            <h3 class="title-1"><i class="fas fa-sm fa-plus"></i> Tambah Paket Produk</h3>
			            <?= anchor('admin/paket/','<button class="btn btn-danger">
			                <i class="fa fa-backward"></i> Kembali
			            </button>') ?>
			            

				    </div>
				</div>

				<div class="col-lg-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <strong>Tambah Paket Produk</strong>

                        </div> 
                        <div class="card-body card-block">
                        	<form action="<?= base_url('admin/paket/tambah_paket_aksi') ?>" class="form-group" method="post">
                                <div>
                                    <label class="form-control-label">Nama Paket</label>
                                    <input type="text" id="nama_paket" name="nama_paket" placeholder="Masukan Nama Paket" class="form-control">
                                    <?= form_error('nama_paket', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Caption 1</label>
                                    <input type="text" id="caption1" name="caption1" placeholder="Masukan Caption 1" class="form-control">
                                    <?= form_error('caption1', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Caption 2</label>
                                    <input type="text" id="caption2" name="caption2" placeholder="Masukan Caption 2" class="form-control">
                                    <?= form_error('caption2', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Caption 3</label>
                                    <input type="text" id="caption3" name="caption3" placeholder="Masukan Caption 3" class="form-control">
                                    <?= form_error('caption3', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Caption 4</label>
                                    <input type="text" id="caption4" name="caption4" placeholder="Masukan Caption 4" class="form-control">
                                    <?= form_error('caption4', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Caption 5</label>
                                    <input type="text" id="caption5" name="caption5" placeholder="Masukan Caption 5" class="form-control">
                                    <?= form_error('caption5', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Harga</label>
                                    <input type="text" id="harga" name="harga" placeholder="Masukan Harga Paket" class="form-control">
                                    <?= form_error('harga', '<small class="text-danger pl-3">','</small>'); ?>
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