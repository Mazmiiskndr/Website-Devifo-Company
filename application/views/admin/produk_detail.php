<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap mb-3">
			            <h3 class="title-1 ml-2"><i class="fas fa-sm fa-eye"></i> Detail Produk</h3>
			            <?= anchor('admin/produk/','<button class="btn btn-danger">
			                <i class="fa fa-backward"></i> Kembali
			            </button>') ?>
			            
			    </div> 
			</div>
			<?php foreach($detail as $dt) { ?>
			<div class="col-md-12">
			<div class="card mb-3">
			  <img src="<?= base_url(). 'assets/uploads/produk/'.$dt->gambar ?>" class="card-img-top" alt="...">
			  <div class="card-body">
			   <table class="table table-borderless table-hover">
				  <thead>
				    <tr>
				      <th scope="col">Nama</th>
				      <th scope="col">:</th>
				      <th scope="col"><?= $dt->name ?></th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td>Harga</td>
				      <td>:</td>
				      <td>Rp. <?= number_format($dt->harga,0,',','.'); ?></td>
				    </tr>
				    <tr>
				      <td>Diskon</td>
				      <td>:</td>
				      <td>Rp. <?= number_format($dt->diskon,0,',','.');?></td>
				    </tr>
				    <tr>
				      <td>Kode Produk</td>
				      <td>:</td>
				      <td><?= $dt->kode_produk ?></td>
				    </tr>
				    <tr>
				     <td>Kategori</td>
				      <td>:</td>
				      <td><?= $dt->nama_kategori ?></td>
				    </tr>

				    <tr>
				     <td>Status</td>
				      <td>:</td>
				      <td><?php echo ($dt->status == "Tersedia") ? '<b class="text-success">Tersedia</b>' : '<b class="text-danger">Tidak Tersedia</b>'; ?></td>
				    </tr>
				    <tr>
				     <td>Deskripsi</td>
				      <td>:</td>
				      <td><?= $dt->deskripsi ?></td>
				    </tr>
				  </tbody>
				</table>
			    <br>
			    <hr>
	            <?= anchor('admin/produk/edit_produk/'.$dt->id,'<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>') ?>
	            <?= anchor('admin/produk/hapus_produk/'.$dt->id,'<div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div>') ?>
			  </div>
			</div>
	    <?php } ?>
		</div>

			</div>
		</div>
	</div>
</div>