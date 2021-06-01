<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap mb-3">
			            <h3 class="title-1"><i class="fas fa-sm fa-user-secret"></i> Data Users</h3>
			            <?= anchor('admin/users/tambah_users','<button class="au-btn au-btn-icon au-btn--blue">
			                <i class="fas fa-plus"></i> Tambah Data Users
			            </button>') ?>
			            
			    </div> 
			</div>
			<?= $this->session->flashdata('pesan'); ?>
			<div class="mt-1 table-responsive table--no-card m-b-30">
			<table class="table table-borderless table-hover table-earning shadow-sm">
	            <thead>
	                <tr>
	                    <th>NO</th>
	                    <th>Gambar</th>
	                    <th>Nama</th>
	                    <th>No. HP</th>
	                    <th>Email</th>
	                    <th>Register Date</th>
	                    <th>Aksi</th>
	                </tr>
	            </thead>
	            <tbody>
	            	<?php 

	            		$no = 1;
	            		foreach( $users as $row){
	            	 ?>
	            	<tr>
	            	 	<td><?= $no++ ?></td>
	            	 	<td><img src="<?= base_url(). 'assets/uploads/users/'.$row->gambar ?>" width="30px"></td>
	            	 	<td><?= $row->first_name ?> <?= $row->last_name ?></td>
	            	 	<td><?= $row->no_hp ?></td>
	            	 	<td><?= $row->email ?></td>
	            	 	<td><?= $row->register_date ?></td>
	            	 	<td>
	            	 		<?= anchor('admin/users/update_users/'.$row->id,'<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>') ?>
	            	 		<?= anchor('admin/users/delete_users/'.$row->id,'<div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div>') ?>
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