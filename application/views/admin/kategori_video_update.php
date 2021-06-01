<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap">
			            <h3 class="title-1"><i class="fas fa-sm fa-edit"></i> Update Kategori Video</h3>
			            <?= anchor('admin/kategori_video/','<button class="btn btn-danger">
			                <i class="fa fa-backward"></i> Kembali
			            </button>') ?>

				    </div>
				</div>

				<div class="col-lg-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <strong>Update Kategori Video</strong>

                        </div>
                        <div class="card-body card-block">
                        	<?php foreach($kategori as $row) { ?>
                        	<form action="<?= base_url('admin/kategori_video/update_video_aksi') ?>" class="form-group" method="post">
                                <div>
                                    <label class="form-control-label">Nama Kategori Video</label>
                                    <input type="hidden" id="id" name="id" placeholder="Masukan Kode Prodi" class="form-control" value="<?= $row->id ?>">
                                    <input type="text" id="name" name="name" class="form-control" value="<?= $row->name ?>">
                                    <?= form_error('name', '<small class="text-danger pl-3">','</small>'); ?>
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