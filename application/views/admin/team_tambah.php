<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap">
			            <h3 class="title-1"><i class="fas fa-sm fa-plus"></i> Tambah Data Teams</h3>
			            <?= anchor('admin/team/','<button class="btn btn-danger">
			                <i class="fa fa-backward"></i> Kembali
			            </button>') ?>
			            

				    </div>
				</div>

				<div class="col-lg-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <strong>Tambah Data Teams</strong>

                        </div>
                        <div class="card-body card-block">
                        	<form action="<?= base_url('admin/team/tambah_team_aksi') ?>" class="form-group" method="post" enctype="multipart/form-data">
                                <div>
                                    <label class="form-control-label">Nama Team</label>
                                    <input type="text" id="nama" name="nama" placeholder="Masukan Nama Team" class="form-control" value="<?= set_value('nama') ?>">
                                    <?= form_error('nama', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Jabatan</label>
                                    <input type="text" id="jabatan" name="jabatan" placeholder="Masukan Jabatan" class="form-control" value="<?= set_value('jabatan') ?>">
                                    <?= form_error('jabatan', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Link Facebook</label>
                                    <input type="text" id="facebook" name="facebook" placeholder="Masukan Link Facebook" class="form-control" value="<?= set_value('facebook') ?>">
                                    <?= form_error('facebook', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Link Whatsapp</label>
                                    <input type="text" id="whatsapp" name="whatsapp" placeholder="Masukan Link Whatsapp " class="form-control" value="<?= set_value('whatsapp') ?>">
                                    <?= form_error('whatsapp', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Link Instagram</label>
                                    <input type="text" id="instagram" name="instagram" placeholder="Masukan Link Instagram" class="form-control" value="<?= set_value('instagram') ?>">
                                    <?= form_error('instagram', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                
                                <div>
                                    <label class="form-control-label">Upload Photo</label>
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