<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap">
			            <h3 class="title-1"><i class="fas fa-sm fa-plus"></i> Tambah Kategori Video</h3>
			            <?= anchor('admin/kategori_video/','<button class="btn btn-danger">
			                <i class="fa fa-backward"></i> Kembali
			            </button>') ?>
			            

				    </div>
				</div>

				<div class="col-lg-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <strong>Tambah Kategori Video</strong>

                        </div> 
                        <div class="card-body card-block">
                        	<form action="<?= base_url('admin/kategori_video/tambah_video_aksi') ?>" class="form-group" method="post">
                                <div>
                                    <label class="form-control-label">Nama</label>
                                    <input type="text" id="name" name="name" placeholder="Masukan Nama Kategori" class="form-control">
                                    <?= form_error('name', '<small class="text-danger pl-3">','</small>'); ?>
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