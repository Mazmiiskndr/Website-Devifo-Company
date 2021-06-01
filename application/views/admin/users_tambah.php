<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap">
			            <h3 class="title-1"><i class="fas fa-sm fa-plus"></i> Tambah Data Users</h3>
			            <?= anchor('admin/users/','<button class="btn btn-danger">
			                <i class="fa fa-backward"></i> Kembali
			            </button>') ?>
			            

				    </div>
				</div>

				<div class="col-lg-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <strong>Tambah Data Users</strong>

                        </div>
                        <div class="card-body card-block">
                        	<form action="<?= base_url('admin/users/tambah_users_aksi') ?>" class="form-group" method="post" enctype="multipart/form-data">
                                <div>
                                    <label class="form-control-label">First Name</label>
                                    <input type="text" id="first_name" name="first_name" placeholder="Masukan First Name" class="form-control" value="<?= set_value('first_name') ?>">
                                    <?= form_error('first_name', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Last Name</label>
                                    <input type="text" id="last_name" name="last_name" placeholder="Masukan Last Name" class="form-control" value="<?= set_value('last_name') ?>">
                                    <?= form_error('last_name', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Username</label>
                                    <input type="text" id="username" name="username" placeholder="Masukan Username" class="form-control" value="<?= set_value('username') ?>">
                                    <?= form_error('username', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Email</label>
                                    <input type="text" id="email" name="email" placeholder="Masukan Email " class="form-control" value="<?= set_value('email') ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Password</label>
                                    <input type="password" id="password" name="password" placeholder="Masukan Password" class="form-control" value="<?= set_value('password') ?>">
                                    <?= form_error('password', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">No. HP</label>
                                    <input type="text" id="no_hp" name="no_hp" placeholder="Masukan No. HP" class="form-control" value="<?= set_value('no_hp') ?>">
                                    <?= form_error('no_hp', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Akses Level</label>
                                    <select name="role_id" class="form-control">
                                            <option value="">- Pilih Akses Level -</option>
                                            <option value="1">Admin</option>
                                            <option value="2">Pelanggan</option>
                              
                                        </select>
                                    <?= form_error('role_id', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Upload Photo</label>
                                    <input type="file" id="file-input" name="gambar" class="form-control-file" value="<?= set_value('gambar') ?>">               
                                </div>
                                <br>

                                 <div>
                                    <button type="submit" class="btn btn-lg btn-info btn-block">
                                        <i class="fa fa-floppy-o fa-lg"></i>&nbsp;
                                        <span id="payment-button-amount">Simpan</span>
                                     
                                    </button>
                                </div>
                            </form>
                        </div>
                        	
                    </div>
                </div>

			</div>
		</div>
	</div>
</div>