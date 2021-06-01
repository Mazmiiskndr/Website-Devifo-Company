<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap mb-3">
			            <h3 class="title-1"><i class="fas fa-sm fa-shopping-cart"></i> Produk</h3>
						<?= $this->session->flashdata('pesan'); ?>
			            <?= anchor('admin/produk/tambah_produk','<button class="au-btn au-btn-icon au-btn--blue">
			                <i class="fas fa-plus"></i> Tambah Produk
			            </button>') ?>
			            
			    </div> 
			</div> 
			<?php foreach($produk as $row) { ?>
			<div class="ml-3 card shadow-sm" style="width: 20rem;">
			  <img src="<?= base_url(). 'assets/uploads/produk/'.$row->gambar ?>" class="card-img-top">
			  <div class="card-body">
			    <h5 class="card-title"><?= $row->name ?></h5>
			    <h6 class="card-text">Kode Produk : <?= $row->kode_produk ?></h6>
			    <br>
			    <?php 
			    	$total = $row->harga - $row->diskon;
			    ?>
			    <p class="card-text">Rp. <?php if($row->diskon == true ){
			    	echo number_format($total,0,',','.');
			    }else{
			    	echo number_format($row->harga,0,',','.');
			    } ?></p>
			    <p class="card-text"><?= ($row->status == "Tersedia") ? '<p class="text-success">Tersedia</p>' : '<p class="text-danger">Tidak Tersedia</p>'; ?></p>
			    <br>
			    <hr>
			    <?= anchor('admin/produk/detail_produk/'.$row->id,'<div class="btn btn-sm btn-info"><i class="fas fa-eye"></i></div>') ?>
	            <?= anchor('admin/produk/edit_produk/'.$row->id,'<div class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></div>') ?>
	            <?= anchor('admin/produk/hapus_produk/'.$row->id,'<div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div>') ?>

			  </div>
			</div>
			<?php } ?>
			</div>
		</div>
	</div>
</div>