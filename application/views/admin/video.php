<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap mb-3">
			            <h3 class="title-1"><i class="fas fa-sm fa-video-camera"></i> Video</h3>
						<?= $this->session->flashdata('pesan'); ?>
			            <?= anchor('admin/video/tambah_video','<button class="au-btn au-btn-icon au-btn--blue">
			                <i class="fas fa-plus"></i> Tambah Video
			            </button>') ?>
			            
			    </div> 
			</div> 
			<?php foreach($video as $row) { ?>
			<div class="ml-3 card shadow-sm" style="width: 20rem;">
			  <video class="afterglow" autoplay id="myvideo" width="1280" height="720">
                    <source type="video/mp4" autoplay src="<?= base_url() . 'assets/uploads/video/' . $row->video; ?>" />
                </video>
			  <div class="card-body">
			    <h5 class="card-title"><?= $row->judul_video ?></h5>
			    <h6 class="card-text">Kategori : <?= $row->kategori_video ?></h6>
			    <br>
			  
			    <hr>
			    <?= anchor('admin/video/detail_video/'.$row->id,'<div class="btn btn-sm btn-info"><i class="fas fa-eye"></i></div>') ?>
	            <?= anchor('admin/video/edit_video/'.$row->id,'<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>') ?>
	            <?= anchor('admin/video/hapus_video/'.$row->id,'<div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div>') ?>

			  </div>
			</div>
			<?php } ?>
			</div>
		</div>
	</div>
</div>