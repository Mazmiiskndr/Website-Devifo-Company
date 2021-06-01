<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h3 class="title-1"><i class="fas fa-sm fa-cogs"></i> Pengaturan Home</h3>
                        <?= $this->session->flashdata('pesan'); ?>

                    </div>
                </div>

                <div class="col-lg-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <strong>Pengaturan Home</strong>

                        </div>
                        <div class="card-body card-block">
                            <form action="<?= base_url('admin/pengaturan/update_home_aksi') ?>" class="form-group" method="post" enctype="multipart/form-data">
                                
                                <div>
                                    <label class="control-label"> Deskripsi About</label>
                                    <input type="hidden" id="id" name="id" class="form-control" value="<?= $id ?>">
                                    <textarea name="deskripsi_about" id="deskripsi_about" rows="3" class="form-control"><?= $deskripsi_about ?></textarea>
                                </div>
                                <br>
                        
                                <div>
                                    <label class="control-label"> Deskripsi Services</label>
                                    <textarea name="deskripsi_services" id="deskripsi_services" rows="3" class="form-control"><?= $deskripsi_services ?></textarea>
                                </div>
                                <br>
                                
                                <div>
                                    <label class="control-label"> Deskripsi Portfolio</label>
                                    <textarea name="deskripsi_portfolio" id="deskripsi_portfolio" rows="3" class="form-control"><?= $deskripsi_portfolio ?></textarea>
                                </div>
                                <br>
                                
                                <div>
                                    <label class="control-label"> Deskripsi Testimonials</label>
                                    <textarea name="deskripsi_testimonials" id="deskripsi_testimonials" rows="3" class="form-control"><?= $deskripsi_testimonials ?></textarea>
                                </div>
                                <br>
                                
                                <div>
                                    <label class="control-label"> Deskripsi Packet</label>
                                    <textarea name="deskripsi_packet" id="deskripsi_packet" rows="3" class="form-control"><?= $deskripsi_packet ?></textarea>
                                </div>
                                <br>
                                <div>
                                    <label class="control-label"> Deskripsi Video</label>
                                    <textarea name="deskripsi_video" id="deskripsi_video" rows="3" class="form-control"><?= $deskripsi_video ?></textarea>
                                </div>
                                <br>
                                <div>
                                    <label class="control-label"> Deskripsi Team</label>
                                    <textarea name="deskripsi_team" id="deskripsi_team" rows="3" class="form-control"><?= $deskripsi_team ?></textarea>
                                </div>
                                <br>
                                <div>
                                    <label class="control-label"> Deskripsi Contact</label>
                                    <textarea name="deskripsi_contact" id="deskripsi_contact" rows="3" class="form-control"><?= $deskripsi_contact ?></textarea>
                                </div>
                                <br>
                                
            
                                <div>
                                    <button type="submit" class="btn btn-lg btn-info btn-block">
                                        <i class="fa fa-edit fa-lg"></i>&nbsp;
                                        <span id="payment-button-amount">Update</span>
                                     
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