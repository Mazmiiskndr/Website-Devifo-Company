<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_video extends CI_Controller {

	public function __construct(){
		parent::__construct();
		is_logged_in();
	}
	
	public function index()
	{

		$data['title'] = 'Kategori Video';
		$data['kategori'] = $this->video_model->ambil_video();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/kategori_video');
		$this->load->view('templates_admin/footer');
	}


	public function tambah_kategori_video()
	{
		$data['title'] = 'Tambah Kategori Video';
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/tambah_kategori_video');
		$this->load->view('templates_admin/footer');
	}

	public function tambah_video_aksi()
	{
		$this->_rulesKategori();
		if($this->form_validation->run() == false){
			$this->tambah_kategori();
		}else{
			$nama		= htmlspecialchars($this->input->post('name'));
			$data = array('name' => $nama);
			$this->video_model->insert_video($data,'kategori_video');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Kategori VIdeo Berhasil di <strong>Tambahkan!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/kategori_video');
		}
	}

	public function update_kategori_video($id)
	{
		$where = array('id' => $id);
		$data['kategori'] = $this->video_model->edit_data($where,'kategori_video')->result();
		$data['title'] = 'Update Kategori Produk';
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/kategori_video_update');
		$this->load->view('templates_admin/footer');
	}

	public function update_video_aksi()
	{
		$this->_rulesKategori();
		if($this->form_validation->run() == false){
			$this->update_kategori();
		}else{
			$id 		= $this->input->post('id');
			$nama		= htmlspecialchars($this->input->post('name'));

			$data = array('name' => $nama);
			$where = array('id' => $id);

			$this->video_model->update_data($where,$data,'kategori_video');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Kategori Video Berhasil di <strong>Update!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/kategori_video');
		}
	}

	public function delete_video($id)
	{
		$where = array('id' => $id);
		$this->video_model->hapus_data($where,'kategori_video');
		$this->session->set_flashdata('pesan','
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Data Kategori Video Berhasil di <strong>Hapus!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
		redirect('admin/kategori_video');
	}

	public function _rulesKategori()
	{
		$this->form_validation->set_rules('name','Nama Kategori Produk','required');
	}


}

/* End of file Datadesign.php */
/* Location: ./application/controllers/admin/Datadesign.php */