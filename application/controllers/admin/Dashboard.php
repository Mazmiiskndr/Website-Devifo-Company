<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{
		$data['produk'] = $this->produk_model->tampil_data('produk')->result();
		$data['jumlah_produk'] = $this->produk_model->get_jumlah_produk();
		$data['jumlah_users'] = $this->users_model->get_jumlah_users();
		$data['jumlah_team'] = $this->team_model->get_jumlah_team();
		$data['jumlah_testimonials'] = $this->team_model->get_jumlah_testimonials();
		$data['kategori'] = $this->produk_model->ambil_kategori();
		$data['team'] = $this->team_model->tampil_data('team')->result();
		$data['testimoni'] = $this->testimoni_model->tampil_data('testimoni')->result();
		$data['title'] = "Dashboard";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/dashboard');
		$this->load->view('templates_admin/footer');		
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */