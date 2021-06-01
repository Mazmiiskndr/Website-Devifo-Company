<div class="main-content">
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
			    <div class="col-md-12">
			        <div class="overview-wrap">
			            <h3 class="title-1"><i class="fas fa-sm fa-edit"></i> Update Data Users</h3>
			            <?= anchor('admin/users/','<button class="btn btn-danger">
			                <i class="fa fa-backward"></i> Kembali
			            </button>') ?>

				    </div>
				</div>

				<div class="col-lg-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <strong>Update Data Users</strong>

                        </div>
                        <div class="card-body card-block">
                        	<?php foreach($users as $usrs) { ?>
                        	<form action="<?= base_url('admin/users/update_aksi') ?>" class="form-group" method="post" enctype="multipart/form-data">
                                <div>
                                    <label class="form-control-label">Username</label>
                                    <input type="hidden" id="id" name="id" placeholder="Masukan id" class="form-control" value="<?= $usrs->id ?>">
                                    <input type="text" id="username" name="username" class="form-control" value="<?= $usrs->username ?>" readonly>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Email</label>
                                    <input type="text" id="email" name="email" placeholder="Masukan Email" class="form-control" value="<?= $usrs->email ?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Fisrt Name</label>
                                    <input type="text" id="first_name" name="first_name" class="form-control" value="<?= $usrs->first_name ?>">
                                    <?= form_error('first_name', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Last Name</label>
                                    <input type="text" id="last_name" name="last_name" class="form-control" value="<?= $usrs->last_name ?>">
                                    <?= form_error('last_name', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">No. HP</label>
                                    <input type="text" id="no_hp" name="no_hp" class="form-control" value="<?= $usrs->no_hp ?>">
                                    <?= form_error('no_hp', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                    <label class="form-control-label">Akses Level</label>
                                    <select name="role_id" class="form-control">
                                            <option value="<?= $usrs->role_id ?>"><?php if($usrs->role_id == '1'){
                                                echo "Admin";
                                            }else{
                                                echo "Pelanggan";
                                            } ?></option>
                                            <option value="admin">Admin</option>
                                            <option value="mahasiswa">Mahasiswa</option>
                              
                                        </select>
                                    <?= form_error('role_id', '<small class="text-danger pl-3">','</small>'); ?>
                                </div>
                                <br>
                                <div>
                                        <img src="<?= base_url('assets/uploads/users/').$usrs->gambar ?>" alt="" style="width:85px; height:85px;">
                                    <br>
                                    <label class="mt-2 form-control-label">Upload Gambar</label>
                                    <input type="file" id="file-input" name="userfile" class="form-control-file" value="<?= $usrs->gambar ?>">               
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