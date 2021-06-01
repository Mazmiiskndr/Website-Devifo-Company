<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap">
			            <h3 class="title-1"><i class="fas fa-sm fa-plus"></i> Tambah Data Sponsorship</h3>
			            <?= anchor('admin/sponsor/','<button class="btn btn-danger">
			                <i class="fa fa-backward"></i> Kembali
			            </button>') ?>
			            

				    </div>
				</div>

				<div class="col-lg-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <strong>Tambah Data Sponsorship</strong>

                        </div>
                        <div class="card-body card-block">
                        	<form action="<?= base_url('admin/sponsor/tambah_sponsor_aksi') ?>" class="form-group" method="post" enctype="multipart/form-data">
                                <div>
                                    <label class="form-control-label">Nama Sponsorship</label>
                                    <input type="text" id="nama_sponsor" name="nama_sponsor" placeholder="Masukan First Name" class="form-control" value="<?= set_value('nama_sponsor') ?>">
                                    <?= form_error('nama_sponsor', '<small class="text-danger pl-3">','</small>'); ?>
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