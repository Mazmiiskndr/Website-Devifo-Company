<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap mb-3">
			            <h3 class="title-1 ml-2"><i class="fas fa-sm fa-eye"></i> Detail Video</h3>
			            <?= anchor('admin/video/','<button class="btn btn-danger">
			                <i class="fa fa-backward"></i> Kembali
			            </button>') ?>
			            
			    </div> 
			</div>
			<?php foreach($detail as $dt) { ?>
			<div class="col-md-12">
			<div class="card mb-3">
			  <video class="afterglow" autoplay id="myvideo" width="1280" height="720">
                    <source type="video/mp4" autoplay src="<?= base_url() . 'assets/uploads/video/' . $dt->video; ?>" />
                </video>
			  <div class="card-body">
			   <table class="table table-borderless table-hover">
				  <thead>
				    <tr>
				      <th scope="col">Judul Video</th>
				      <th scope="col">:</th>
				      <th scope="col"><?= $dt->judul_video ?></th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td>Kategori</td>
				      <td>:</td>
				      <td><?= $dt->kategori_video ?></td>
				    </tr>
				    <tr>
				     <td>Deskripsi</td>
				      <td>:</td>
				      <td><?= $dt->deskripsi ?></td>
				    </tr>
				  </tbody>
				</table>
			    <hr>
	            <?= anchor('admin/video/edit_video/'.$dt->id,'<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>') ?>
	            <?= anchor('admin/video/hapus_video/'.$dt->id,'<div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div>') ?>
			  </div>
			</div>
	    <?php } ?>
		</div>

			</div>
		</div>
	</div>
</div>