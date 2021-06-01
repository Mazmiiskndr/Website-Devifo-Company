<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {

	public function __construct(){
		parent::__construct();
		is_logged_in();
	}
	
	public function index()
	{

		$data['title'] = 'Paket Produk';
		$data['paket'] = $this->paket_model->tampil_data('paket')->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/paket');
		$this->load->view('templates_admin/footer');
	}


	public function tambah_paket()
	{
		$data['title'] = 'Tambah Paket Produk';
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/tambah_paket');
		$this->load->view('templates_admin/footer');
	}

	public function tambah_paket_aksi()
	{
		$this->_rulesPaket();
		if($this->form_validation->run() == false){
			$this->tambah_paket();
		}else{
			$nama_paket		= htmlspecialchars($this->input->post('nama_paket'));
			$caption1		= htmlspecialchars($this->input->post('caption1'));
			$caption2		= htmlspecialchars($this->input->post('caption2'));
			$caption3		= htmlspecialchars($this->input->post('caption3'));
			$caption4		= htmlspecialchars($this->input->post('caption4'));
			$caption5		= htmlspecialchars($this->input->post('caption5'));
			$harga		= htmlspecialchars($this->input->post('harga'));
			$data = array(
				'nama_paket' => $nama_paket,
				'caption1'	=> $caption1,
				'caption2' 	=> $caption2,
				'caption3' 	=> $caption3,
				'caption4' 	=> $caption4,
				'caption5' 	=> $caption5,
				'harga' 	=> $harga
			);
			$this->paket_model->insert_paket($data,'paket');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Paket Produk Berhasil di <strong>Tambahkan!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/paket');
		}
	}

	public function update_paket($id)
	{
		$where = array('id' => $id);
		$data['paket'] = $this->paket_model->edit_data($where,'paket')->result();
		$data['title'] = 'Update Paket Produk';
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/paket_produk_update');
		$this->load->view('templates_admin/footer');
	}

	public function update_paket_aksi()
	{
		$this->_rulesPaket();
		if($this->form_validation->run() == false){
			$this->update_paket();
		}else{
			$id 		= $this->input->post('id');
			$nama_paket		= htmlspecialchars($this->input->post('nama_paket'));
			$caption1		= htmlspecialchars($this->input->post('caption1'));
			$caption2		= htmlspecialchars($this->input->post('caption2'));
			$caption3		= htmlspecialchars($this->input->post('caption3'));
			$caption4		= htmlspecialchars($this->input->post('caption4'));
			$caption5		= htmlspecialchars($this->input->post('caption5'));
			$harga		= htmlspecialchars($this->input->post('harga'));

			$data = array(
				'nama_paket' => $nama_paket,
				'caption1'	=> $caption1,
				'caption2' 	=> $caption2,
				'caption3' 	=> $caption3,
				'caption4' 	=> $caption4,
				'caption5' 	=> $caption5,
				'harga' 	=> $harga
			);
			$where = array('id' => $id);

			$this->paket_model->update_data($where,$data,'paket');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Paket Produk Berhasil di <strong>Update!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/paket');
		}
	}

	public function delete_paket($id)
	{
		$where = array('id' => $id);
		$this->paket_model->hapus_data($where,'paket');
		$this->session->set_flashdata('pesan','
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Data Paket Produk Berhasil di <strong>Hapus!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
		redirect('admin/paket');
	}

	public function _rulesPaket()
	{
		$this->form_validation->set_rules('nama_paket','Nama Paket Produk','required');
		$this->form_validation->set_rules('caption1','Caption 1 Paket Produk','required');
		$this->form_validation->set_rules('caption2','Caption 2 Paket Produk','required');
		$this->form_validation->set_rules('caption3','Caption 3 Paket Produk','required');
		$this->form_validation->set_rules('caption4','Caption 4 Paket Produk','required');
		$this->form_validation->set_rules('caption5','Caption 5 Paket Produk','required');
	}


}

/* End of file Datadesign.php */
/* Location: ./application/controllers/admin/Datadesign.php */