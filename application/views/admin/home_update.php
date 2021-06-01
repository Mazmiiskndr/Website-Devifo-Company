<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap">
			            <h3 class="title-1"><i class="fas fa-sm fa-edit"></i> Update Pengaturan Home</h3>
			            <?= anchor('admin/pengaturan/home/','<button class="btn btn-danger">
			                <i class="fa fa-backward"></i> Kembali
			            </button>') ?>

				    </div>
				</div>

				<div class="col-lg-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <strong>Update Pengaturan Home</strong>

                        </div>
                        <div class="card-body card-block">
                        	<?php foreach($home as $row) { ?>
                        	<form action="<?= base_url('admin/pengaturan/update_home_aksi') ?>" class="form-group" method="post">
                                <div>
                                    <label class="form-control-label">Judul</label>
                                    <input type="hidden" id="id" name="id"class="form-control" value="<?= $row->id ?>">
                                    <input type="text" id="judul" name="judul" class="form-control" value="<?= $row->judul ?>">
                                    <?= form_error('judul', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                
                                <div>
                                    <label class="form-control-label">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"><?= $row->deskripsi ?></textarea>
                                    <?= form_error('deksripsi', '<small class="text-danger pl-3">','</small>'); ?>
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