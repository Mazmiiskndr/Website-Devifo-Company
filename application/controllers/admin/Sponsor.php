<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sponsor extends CI_Controller {
	public function __construct(){
		parent::__construct();
		is_logged_in();
	}


	public function index()
	{

		$data['title'] = 'Sponsorship';
		$data['sponsor'] = $this->sponsor_model->tampil_data('sponsor')->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/sponsor');
		$this->load->view('templates_admin/footer');
	}

	public function tambah_sponsor()
	{
		$data['title'] = 'Tambah Data Sponsorship';
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/sponsor_tambah');
		$this->load->view('templates_admin/footer');
	}

	public function tambah_sponsor_aksi()
	{
		$this->_rulesSponsor();
		if($this->form_validation->run() == false){
			$this->tambah_sponsor();
		}else{
			$nama_sponsor 				= htmlspecialchars($this->input->post('nama_sponsor'));
			$gambar 				= $_FILES['gambar'];

			if($gambar = ''){

			}else{
				$config ['upload_path'] = './assets/uploads/sponsor';
				$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);
				if( !$this->upload->do_upload('gambar') ){
					echo "Gambar User Gagal Diupload!";
				}else{
					$gambar = $this->upload->data('file_name');

				}
			}


			$data = array(
				'nama_sponsor' 			=> $nama_sponsor,
				'gambar' 			=> $gambar

			);

			$this->sponsor_model->insert_sponsor($data,'sponsor');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Sponsorship Berhasil di <strong>Tambahkan!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/sponsor');
		}


	}

	public function update_sponsor($id)
	{
		$where = array('id' => $id);
		$data['sponsor'] = $this->sponsor_model->edit_data($where,'sponsor')->result();
		$data['title'] = 'Update Data Sponsorship';
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/sponsor_update');
		$this->load->view('templates_admin/footer');
	}
	public function update_aksi()
	{

			$id 			= $this->input->post('id');
			$nama_sponsor 				= htmlspecialchars($this->input->post('nama_sponsor'));
			$gambar 				= $_FILES['userfile']['name'];

			if($gambar){
				$config ['upload_path'] = './assets/uploads/sponsor';
				$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);
				
				if( $this->upload->do_upload('userfile') ){
					$userfile = $this->upload->data('file_name');
					$this->db->set('gambar',$userfile);
				}else{
					echo "Photo Sponsorship Gagal Diupload!";

				}
			}

			$data = array(
				'nama_sponsor' => $nama_sponsor
			);

			$where = array('id' => $id);

			$this->sponsor_model->update_data($where,$data,'sponsor');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Sponsorship Berhasil di <strong>Update!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/sponsor');

	}

	public function delete_sponsor($id)
	{
		$where = array('id' => $id);
		$this->sponsor_model->hapus_data($where,'sponsor');
		$this->session->set_flashdata('pesan','
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Data  Sponsorship Berhasil di <strong>Hapus!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
		redirect('admin/sponsor');
	}

	public function _rulesSponsor()
	{
		$this->form_validation->set_rules('nama_sponsor','Nama Sponsorship','required');


	}

}

/* End of file Datadesign.php */
/* Location: ./application/controllers/admin/Datadesign.php */