<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h3 class="title-1"><i class="fas fa-sm fa-book"></i> Kelola Artikel</h3>
                        <?= $this->session->flashdata('pesan'); ?>

                    </div>
                </div>
 
                <div class="col-lg-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <strong>Kelola Artikel</strong>

                        </div>
                        <div class="card-body card-block">
                            <form action="" class="form-group" method="post" enctype="multipart/form-data">
                                
                                <div class="form-group">
				                    <label for="title">Title</label>
				                    <input type="text" name="title" class="form-control" placeholder="Title">
				                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Upload Gambar</label>
                                    <input type="file" id="file-input" name="gambar" class="form-control-file" value="<?= set_value('gambar') ?>">               
                                </div>
                        
				                <div class="form-group">
				                    <label>Contents</label>
				                    <textarea name="contents" id="summernote"></textarea>
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