<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap">
			            <h3 class="title-1"><i class="fas fa-sm fa-cogs"></i> Pengaturan Basic</h3>
                        <?= $this->session->flashdata('pesan'); ?>

				    </div>
				</div>

				<div class="col-lg-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <strong>Pengaturan Basic</strong>

                        </div>
                        <div class="card-body card-block">
                        	<form action="<?= base_url('admin/pengaturan/update_pengaturan_aksi') ?>" class="form-group" method="post" enctype="multipart/form-data">
                                <div>
                                    <label class="control-label">Nama Company</label>
                                    <input type="hidden" id="id" name="id" placeholder="Nama Company" class="form-control" value="<?= $id ?>">
                                    <input type="text" id="judul" name="judul" placeholder="Nama Company" class="form-control" value="<?= $judul ?>">
                                </div>
                                <br> 
                                <div>
                                    <label class="control-label"> Deskripsi</label>
                                    <textarea name="deskripsi" id="deskripsi" rows="3" class="form-control"><?= $deskripsi ?></textarea>
                                </div>
                                <br>
                                <div>
                                    <label class="control-label">Background Header</label>
                                    <input type="file" name="userfile" class="form_control ml-3">
                                    <br>
                                    
                                    <img src="<?= base_url().'assets/uploads/site/'.$gambar ?>" width="560px" class="ml-3">

                                </div>
                                <p class="ml-3 text-danger">Ukuran Gambar Harus : 1920 x 1101 Pixels</p>
                                <br>
                                <div>
                                    <button type="submit" class="btn btn-lg btn-info btn-block">
                                        <i class="fa fa-edit fa-lg"></i>&nbsp;
                                        <span id="payment-button-amount">Update</span>
                                     
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