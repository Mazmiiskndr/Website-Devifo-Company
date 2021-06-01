<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap mb-3">
			            <h3 class="title-1"><i class="fas fa-sm fa-bars"></i> Kategori video</h3>
			            <?= anchor('admin/kategori_video/tambah_kategori_video','<button class="au-btn au-btn-icon au-btn--blue">
			                <i class="fas fa-plus"></i> Tambah Kategori Video
			            </button>') ?>
			            
			    </div> 
			</div>
			<?= $this->session->flashdata('pesan'); ?>
			<div class="mt-1 table-responsive table--no-card m-b-30">
			<table class="table table-borderless table-hover table-earning shadow-sm">
	            <thead>
	                <tr>
	                    <th>NO</th>
	                    <th>Nama</th>
	                    <th>Aksi</th>
	                </tr>
	            </thead>
	            <tbody>
	            	<?php 
	            		$no = 1;
	            		foreach( $kategori as $row){
	            	 ?>
	            	<tr>
	            	 	<td><?= $no++ ?></td>
	            	 	<td><?= $row->name ?></td>
	            	 	<td>
	            	 		<?= anchor('admin/kategori_video/update_kategori_video/'.$row->id,'<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>') ?>
	            	 		<?= anchor('admin/kategori_video/delete_video/'.$row->id,'<div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div>') ?>
	            	 	</td>
	            	</tr>
	            	<?php } ?>
	                  
	            </tbody>
	    	</table>


				</div>
			</div>
		</div>
	</div>
</div>