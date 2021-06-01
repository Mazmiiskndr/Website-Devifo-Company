<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap mb-3">
			            <h3 class="title-1"><i class="fas fa-sm fa-cube"></i> Paket Produk</h3>
			            <?= anchor('admin/paket/tambah_paket','<button class="au-btn au-btn-icon au-btn--blue">
			                <i class="fas fa-plus"></i> Tambah Paket Produk
			            </button>') ?>
			            
			    </div> 
			</div>
			<?= $this->session->flashdata('pesan'); ?>
			<div class="mt-1 table-responsive table--no-card m-b-30">
			<table class="table table-borderless table-hover table-earning shadow-sm">
	            <thead>
	                <tr>
	                    <th>NO</th>
	                    <th>Nama Paket</th>
	                    <th>Caption 1</th>
	                    <th>Caption 2</th>
	                    <th>Caption 3</th>
	                    <th>Caption 4</th>
	                    <th>Caption 5</th>
	                    <th>Harga</th>
	                    <th>Aksi</th>
	                </tr>
	            </thead>
	            <tbody>
	            	<?php 
	            		$no = 1;
	            		foreach( $paket as $row){
	            	 ?>
	            	<tr>
	            	 	<td><?= $no++ ?></td>
	            	 	<td><?= $row->nama_paket ?></td>
	            	 	<td><?= $row->caption1 ?></td>
	            	 	<td><?= $row->caption2 ?></td>
	            	 	<td><?= $row->caption3 ?></td>
	            	 	<td><?= $row->caption4 ?></td>
	            	 	<td><?= $row->caption5 ?></td>
	            	 	<td>Rp. <?= number_format($row->harga,0,',','.'); ?></td>
	            	 	<td>
	            	 		<?= anchor('admin/paket/update_paket/'.$row->id,'<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>') ?>
	            	 		<?= anchor('admin/paket/delete_paket/'.$row->id,'<div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div>') ?>
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