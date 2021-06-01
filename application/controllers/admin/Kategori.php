<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct(){
		parent::__construct();
		is_logged_in();
	}
	
	public function index()
	{

		$data['title'] = 'Kategori Produk';
		$data['kategori'] = $this->produk_model->ambil_kategori();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/kategori_produk');
		$this->load->view('templates_admin/footer');
	}


	public function tambah_kategori()
	{
		$data['title'] = 'Tambah Kategori Produk';
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/tambah_kategori');
		$this->load->view('templates_admin/footer');
	}

	public function tambah_kategori_aksi()
	{
		$this->_rulesKategori();
		if($this->form_validation->run() == false){
			$this->tambah_kategori();
		}else{
			$nama		= htmlspecialchars($this->input->post('name'));
			$data = array('name' => $nama);
			$this->produk_model->insert_kategori($data,'kategori_produk');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Kategori Produk Berhasil di <strong>Tambahkan!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/kategori');
		}
	}

	public function update_kategori($id)
	{
		$where = array('id' => $id);
		$data['kategori'] = $this->produk_model->edit_data($where,'kategori_produk')->result();
		$data['title'] = 'Update Kategori Produk';
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/kategori_produk_update');
		$this->load->view('templates_admin/footer');
	}

	public function update_kategori_aksi()
	{
		$this->_rulesKategori();
		if($this->form_validation->run() == false){
			$this->update_kategori();
		}else{
			$id 		= $this->input->post('id');
			$nama		= htmlspecialchars($this->input->post('name'));

			$data = array('name' => $nama);
			$where = array('id' => $id);

			$this->produk_model->update_data($where,$data,'kategori_produk');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Kategori Produk Berhasil di <strong>Update!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/kategori');
		}
	}

	public function delete_kategori($id)
	{
		$where = array('id' => $id);
		$this->produk_model->hapus_data($where,'kategori_produk');
		$this->session->set_flashdata('pesan','
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Data Kategori Produk Berhasil di <strong>Hapus!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
		redirect('admin/kategori');
	}

	public function _rulesKategori()
	{
		$this->form_validation->set_rules('name','Nama Kategori Produk','required');
	}


}

/* End of file Datadesign.php */
/* Location: ./application/controllers/admin/Datadesign.php */