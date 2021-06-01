<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct(){
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{ 

		$data['title'] = 'Produk';
		$data['produk'] = $this->produk_model->tampil_data('produk')->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/produk');
		$this->load->view('templates_admin/footer');
	}

	public function detail_produk($id)
	{
		$data['detail'] = $this->produk_model->ambil_id_produk($id); 
		$data['title'] = 'Detail Produk';
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/produk_detail');
		$this->load->view('templates_admin/footer');
	}

	public function tambah_produk()
	{
		$data['title'] = 'Tambah Produk';
		$data['kategori'] = $this->produk_model->ambil_kategori();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/tambah_produk');
		$this->load->view('templates_admin/footer');
	}

	public function tambah_produk_aksi()
	{
		$this->_rulesProduk();
		if($this->form_validation->run() == false){
			$this->tambah_produk();
		}else{
			$nama_kategori 				= htmlspecialchars($this->input->post('nama_kategori'));
			$name 		= htmlspecialchars($this->input->post('name'));
			$harga 			= htmlspecialchars($this->input->post('harga'));
			$diskon 			= htmlspecialchars($this->input->post('diskon'));
			$kode_produk 			= htmlspecialchars($this->input->post('kode_produk'));
			$stok 				= htmlspecialchars($this->input->post('stok'));
			$status 				= htmlspecialchars($this->input->post('status'));
			$deskripsi 		= htmlspecialchars($this->input->post('deskripsi'));
			$gambar 				= $_FILES['gambar'];

			if($gambar = ''){
  
			}else{
				$config ['upload_path'] = './assets/uploads/produk';
				$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);
				if( !$this->upload->do_upload('gambar') ){
					echo "Gambar Produk Gagal Diupload!";
				}else{
					$gambar = $this->upload->data('file_name');

				}
			}
 

			$data = array(
				'nama_kategori' => $nama_kategori,
				'name' 			=> $name,
				'harga' 		=> $harga,
				'kode_produk' 	=> $kode_produk,
				'stok' 			=> $stok,
				'diskon' 		=> $diskon,
				'status' 		=> $status,
				'deskripsi' 	=> $deskripsi,
				'gambar' 		=> $gambar

			);

			$this->produk_model->insert_produk($data,'produk');
			$this->session->set_flashdata('pesan','
				<div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
  					Data Produk Berhasil di <strong>Tambahkan!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/produk');
		}
	}

	public function edit_produk($id)
	{
		$where = array('id' => $id);
		$data['produk'] = $this->produk_model->edit_data($where,'produk')->result();
		$data['kategori'] = $this->produk_model->ambil_kategori();
		$data['title'] = 'Update Produk';
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/produk_update');
		$this->load->view('templates_admin/footer');
	}

	public function update_produk_aksi()
	{
		$this->_rulesProduk();
		if($this->form_validation->run() == false){
			$this->edit_produk();
		}else{
			$id 				= $this->input->post('id');
			$nama_kategori 				= htmlspecialchars($this->input->post('nama_kategori'));
			$name 		= htmlspecialchars($this->input->post('name'));
			$harga 			= htmlspecialchars($this->input->post('harga'));
			$kode_produk 			= htmlspecialchars($this->input->post('kode_produk'));
			$diskon 				= htmlspecialchars($this->input->post('diskon'));
			$stok 			= htmlspecialchars($this->input->post('stok'));
			$status 			= htmlspecialchars($this->input->post('status'));
			$deskripsi 		= htmlspecialchars($this->input->post('deskripsi'));
			$gambar 				= $_FILES['userfile']['name'];

			if($gambar){
				$config ['upload_path'] = './assets/uploads/produk';
				$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);
				
				if( $this->upload->do_upload('userfile') ){
					$userfile = $this->upload->data('file_name');
					$this->db->set('gambar',$userfile);
				}else{
					echo "Photo Produk Gagal Diupload!";

				}
			}

			$data = array(
				'nama_kategori' 	=> $nama_kategori,
				'name' 			=> $name,
				'harga' 		=> $harga,
				'kode_produk' 			=> $kode_produk,
				'diskon' 		=> $diskon,
				'stok' 			=> $stok,
				'status' 	=> $status,
				'deskripsi' 	=> $deskripsi

			);

			$where = array('id' => $id);

			$this->produk_model->update_data($where,$data,'produk');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Produk Berhasil di <strong>Update!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/produk');



		}
	}

	public function hapus_produk($id)
	{
		$where = array('id' => $id);
		$this->produk_model->hapus_data($where,'produk');
		$this->session->set_flashdata('pesan','
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Data  Produk Berhasil di <strong>Hapus!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
		redirect('admin/produk');
	}

	public function _rulesProduk()
	{
		$this->form_validation->set_rules('nama_kategori','Kategori Produk','required');
		$this->form_validation->set_rules('name','Nama Produk','required');
		$this->form_validation->set_rules('harga','Harga Produk','required');
		$this->form_validation->set_rules('kode_produk','Kode Produk Produk','required');
		$this->form_validation->set_rules('deskripsi','Deksripsi Produk','required');
	}

}

/* End of file Datadesign.php */
/* Location: ./application/controllers/admin/Datadesign.php */