<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap">
			            <h3 class="title-1"><i class="fas fa-sm fa-plus"></i> Tambah Testimonials</h3>
			            <?= anchor('admin/testimoni/','<button class="btn btn-danger">
			                <i class="fa fa-backward"></i> Kembali
			            </button>') ?>
			            

				    </div>
				</div>

				<div class="col-lg-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <strong>Tambah Testimonials</strong>

                        </div> 
                        <div class="card-body card-block">
                        	<form action="<?= base_url('admin/testimoni/tambah_testimoni_aksi') ?>" class="form-group" method="post">
                                <div>
                                    <label class="form-control-label">Nama Testimonials</label>
                                    <input type="text" id="nama" name="nama" placeholder="Masukan Nama Testimonials" class="form-control">
                                    <?= form_error('nama', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Email</label>
                                    <input type="text" id="email" name="email" placeholder="Masukan Email" class="form-control">
                                    <?= form_error('email', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                                    <?= form_error('deskripsi', '<small class="text-danger pl-3">','</small>'); ?>
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