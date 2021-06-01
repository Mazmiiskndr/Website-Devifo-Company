<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap">
			            <h3 class="title-1"><i class="fas fa-sm fa-edit"></i> Update Video</h3>
			            <?= anchor('admin/video/','<button class="btn btn-danger">
			                <i class="fa fa-backward"></i> Kembali
			            </button>') ?>

				    </div>
				</div>

				<div class="col-lg-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <strong>Update video</strong>

                        </div>
                        <div class="card-body card-block">
                        	<?php foreach($video as $row) { ?>
                        	<form action="<?= base_url('admin/video/update_video_aksi') ?>" class="form-group" method="post" enctype="multipart/form-data">
                                <div>
                                    <label class="form-control-label">Kategori Video</label>
                                     <input type="hidden" id="id" name="id" class="form-control" value="<?= $row->id ?>">
                                    <select name="kategori_video" class="form-control">
                                            <option value="<?= $row->kategori_video  ?>"><?= $row->kategori_video ?></option>
                                            <?php foreach($kategori_video as $kt) { ?>
                                            <option value="<?= $kt->name  ?>"><?= $kt->name ?></option>
                                            <?php } ?>
                              
                                        </select>
                                    <?= form_error('kategori_video', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Judul Video</label>
                                    <input type="text" id="judul_video" name="judul_video" class="form-control" value="<?= $row->judul_video ?>">
                                    <?= form_error('judul_video', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                
                                <div>
                                    <label class="form-control-label">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"><?= $row->deskripsi ?></textarea>
                                    <?= form_error('deksripsi', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                    <label class="mt-2 form-control-label">Upload Video</label>
                                    <input type="file" id="file-input" name="video" class="form-control-file" value="<?= $row->video ?>">               
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