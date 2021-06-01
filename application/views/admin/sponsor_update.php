<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap">
			            <h3 class="title-1"><i class="fas fa-sm fa-edit"></i> Update Data Sponsorship</h3>
			            <?= anchor('admin/sponsor/','<button class="btn btn-danger">
			                <i class="fa fa-backward"></i> Kembali
			            </button>') ?>

				    </div>
				</div>

				<div class="col-lg-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <strong>Update Data Sponsorship</strong>

                        </div>
                        <div class="card-body card-block">
                        	<?php foreach($sponsor as $row) { ?>
                        	<form action="<?= base_url('admin/sponsor/update_aksi') ?>" class="form-group" method="post" enctype="multipart/form-data">
                                <div>
                                    <label class="form-control-label">Nama Sponsorship</label>
                                    <input type="hidden" id="id" name="id" placeholder="Masukan id" class="form-control" value="<?= $row->id ?>">
                                    <input type="text" id="nama_sponsor" name="nama_sponsor" class="form-control" value="<?= $row->nama_sponsor ?>">
                                </div>
                                <br>
                                <div>
                                        <img src="<?= base_url('assets/uploads/sponsor/').$row->gambar ?>" alt="" style="width:60px; height:60px;">
                                    <br>
                                    <label class="mt-2 form-control-label">Upload Gambar</label>
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