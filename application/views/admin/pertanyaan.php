<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap mb-3">
			            <h3 class="title-1"><i class="fas fa-sm fa-question-circle"></i> Pengaturan Questions</h3>     
			    </div> 
			</div>
			<?= $this->session->flashdata('pesan'); ?>
			<div class="mt-1 table-responsive table--no-card m-b-30">
			<table class="table table-borderless table-hover table-earning shadow-sm">
	            <thead>
	                <tr>
	                    <th>NO</th>
	                    <th>Href</th>
	                    <th>Judul</th>
	                    <th>Deskripsi</th>
	                    <th>Aksi</th>
	                </tr>
	            </thead>
	            <tbody>
	            	<?php 
	            		$no = 1;
	            		foreach( $pertanyaan as $row){
	            	 ?>
	            	<tr>
	            	 	<td><?= $no++ ?></td>
	            	 	<td><?= $row->href ?></td>
	            	 	<td><?= $row->judul ?></td>
	            	 	<td><?= $row->deskripsi ?></td>
	            	 	<td>
	            	 		<?= anchor('admin/pengaturan/update_pertanyaan/'.$row->id,'<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>') ?>
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