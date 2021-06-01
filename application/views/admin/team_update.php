<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap">
			            <h3 class="title-1"><i class="fas fa-sm fa-edit"></i> Update Data Teams</h3>
			            <?= anchor('admin/team/','<button class="btn btn-danger">
			                <i class="fa fa-backward"></i> Kembali
			            </button>') ?>

				    </div>
				</div>

				<div class="col-lg-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <strong>Update Data Teams</strong>

                        </div>
                        <div class="card-body card-block">
                        	<?php foreach($team as $team) { ?>
                        	<form action="<?= base_url('admin/team/update_aksi') ?>" class="form-group" method="post" enctype="multipart/form-data">
                                <div>
                                    <label class="form-control-label">Nama Teams</label>
                                    <input type="hidden" id="id" name="id" class="form-control" value="<?= $team->id ?>">
                                    <input type="text" id="nama" name="nama" class="form-control" value="<?= $team->nama ?>">
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Jabatan</label>
                                    <input type="text" id="jabatan" name="jabatan" class="form-control" value="<?= $team->jabatan ?>">
                                    <?= form_error('jabatan', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Link Facebook</label>
                                    <input type="text" id="facebook" name="facebook" class="form-control" value="<?= $team->facebook ?>">
                                    <?= form_error('facebook', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Link Whatsapp</label>
                                    <input type="text" id="whatsapp" name="whatsapp" class="form-control" value="<?= $team->whatsapp ?>">
                                    <?= form_error('whatsapp', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Link Instagram</label>
                                    <input type="text" id="instagram" name="instagram" class="form-control" value="<?= $team->instagram ?>">
                                    <?= form_error('instagram', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                
                                
                                <div>
                                        <img src="<?= base_url('assets/uploads/team/').$team->gambar ?>" alt="" style="width:85px; height:85px;">
                                    <br>
                                    <label class="mt-2 form-control-label">Upload Gambar</label>
                                    <input type="file" id="file-input" name="userfile" class="form-control-file" value="<?= $team->gambar ?>">               
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