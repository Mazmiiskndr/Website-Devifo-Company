<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
	public function __construct(){
		parent::__construct();
		is_logged_in();
	}


	public function index()
	{

	$this->form_validation->set_rules('title','Title','required');

		if($this->form_validation->run() == FALSE) {
			$data['title'] = 'Kelola Artikel';
			$this->load->view('templates_admin/header',$data);
			$this->load->view('templates_admin/sidebar');
			$this->load->view('templates_admin/topbar');
			$this->load->view('admin/artikel');
			$this->load->view('templates_admin/footer');
		} else {
			$title = $this->input->post('title', TRUE);
            $contents = $this->input->post('contents', TRUE);
            $gambar 				= $_FILES['gambar'];

			if($gambar = ''){

			}else{
				$config ['upload_path'] = './assets/uploads/artikel';
				$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);
				if( !$this->upload->do_upload('gambar') ){
					echo "Gambar Artikel Gagal Diupload!";
				}else{
					$gambar = $this->upload->data('file_name');

				}
			}
            
            $data = [

                'title' => $title,
                'gambar' => $gambar,
                'contents' => $contents
            ];
            
            $this->db->insert('artikel',$data);
            $this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Artikel Berhasil di <strong>Update!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
            redirect('admin/artikel');

		}
	}

}

/* End of file Datadesign.php */
/* Location: ./application/controllers/admin/Datadesign.php */