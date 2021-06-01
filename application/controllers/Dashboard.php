<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$result = $this->home_model->get_site_data()->row_array();
		$data['id'] = $result['id'];

		$data['deskripsi_about'] = $result['deskripsi_about'];
	
		$data['deskripsi_services'] = $result['deskripsi_services'];
		$data['deskripsi_portfolio'] = $result['deskripsi_portfolio'];
		$data['deskripsi_testimonials'] = $result['deskripsi_testimonials'];
		$data['deskripsi_team'] = $result['deskripsi_team'];
		$data['deskripsi_packet'] = $result['deskripsi_packet'];
		$data['deskripsi_contact'] = $result['deskripsi_contact'];
		$result = $this->site_model->get_site_data()->row_array();
		$data['id'] = $result['id'];
		$data['judul'] = $result['judul'];
		$data['deskripsi'] = $result['deskripsi'];
		$data['gambar'] = $result['gambar'];
		$data['produk'] = $this->produk_model->tampil_data('produk')->result();
		$data['kategori'] = $this->produk_model->tampil_kategori();
		$data['paket'] = $this->paket_model->tampil_data('paket')->result();
		$data['testimoni'] = $this->testimoni_model->tampil_data('testimoni')->result();
		$data['team'] = $this->team_model->tampil_data('team')->result();
		$data['about'] = $this->paket_model->tampil_data('about')->result();
		$data['home'] = $this->paket_model->tampil_data('home')->result();
		$data['pertanyaan'] = $this->paket_model->tampil_data('pertanyaan')->result();
		$data['services'] = $this->paket_model->tampil_data('services')->result();

		$data['jumlah_produk'] = $this->produk_model->get_jumlah_produk();
		$data['jumlah_video'] = $this->video_model->get_jumlah_video();
		$data['jumlah_users'] = $this->users_model->get_jumlah_users();
		$data['jumlah_team'] = $this->team_model->get_jumlah_team();
		$data['video'] = $this->video_model->tampil_data('video')->result();
		$data['kategori_video'] = $this->video_model->ambil_video();
		$data['sponsor'] = $this->sponsor_model->tampil_data('sponsor')->result();
		$data['title'] = 'Moch Azmi Iskandar';
		$this->load->view('templates_home/header',$data);
		$this->load->view('home/dashboard');
		$this->load->view('templates_home/footer');
	}

	public function contact_aksi()
	{
		$this->_rulesContact();
		if($this->form_validation->run() == false){
			$this->index();
		}else{
			$nama		= htmlspecialchars($this->input->post('nama'));
			$email		= htmlspecialchars($this->input->post('email'));
			$deskripsi		= htmlspecialchars($this->input->post('deskripsi'));
			$subject		= htmlspecialchars($this->input->post('subject'));

			$data = array(
				'nama' 			=> $nama,
				'email'			=> $email,
				'deskripsi' 	=> $deskripsi,
				'subject'		=> $subject
			);
			$this->testimoni_model->insert_testimoni($data,'contact');

			redirect('dashboard');
		}
	}

	public function _rulesContact()
	{
		$this->form_validation->set_rules('nama','Nama Testimonials','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('subject','Subject','required');
		$this->form_validation->set_rules('deskripsi','Deskripsi Testimonials','required');
	}

	public function detail($id)
	{

		$data['detail'] = $this->produk_model->ambil_id_produk($id);
		$result = $this->site_model->get_site_data()->row_array();
		$data['services'] = $this->paket_model->tampil_data('services')->result();
		$data['judul'] = $result['judul'];

		$data['title'] = 'Detail Portfolio';
		$this->load->view('templates_home/header',$data);
		$this->load->view('home/detail');
		$this->load->view('templates_home/footer');
	}

	public function testimoni()
	{
		$result = $this->site_model->get_site_data()->row_array();
		$data['services'] = $this->paket_model->tampil_data('services')->result();
		$data['judul'] = $result['judul'];

		$data['title'] = 'Testimoni';
		$this->load->view('templates_home/header',$data);
		$this->load->view('home/testimoni');
		$this->load->view('templates_home/footer');
	}

	public function testimoni_aksi()
	{
		$this->_rulesTestimoni();
		if($this->form_validation->run() == false){
			$this->tambah_testimoni();
		}else{
			$nama		= htmlspecialchars($this->input->post('nama'));
			$email		= htmlspecialchars($this->input->post('email'));
			$deskripsi		= htmlspecialchars($this->input->post('deskripsi'));
			$gambar		= 'default.png';

			$data = array(
				'nama' 			=> $nama,
				'email'			=> $email,
				'gambar'			=> $gambar,
				'deskripsi' 	=> $deskripsi
			);
			$this->testimoni_model->insert_testimoni($data,'testimoni');

			redirect('dashboard');
		}
	}

	public function _rulesTestimoni()
	{
		$this->form_validation->set_rules('nama','Nama Testimonials','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('deskripsi','Deskripsi Testimonials','required');
	}

	public function blog()
	{
		$data['tugas'] = $this->sponsor_model->tampil_data('tugas')->result();
		$result = $this->site_model->get_site_data()->row_array();
		$data['services'] = $this->paket_model->tampil_data('services')->result();
		$data['id'] = $result['id'];
		$data['judul'] = $result['judul'];
		$data['title'] = 'Artikel';
		$this->load->view('templates_home/header',$data);
		$this->load->view('home/artikel');
		$this->load->view('templates_home/footer');
	}

	public function detail_artikel($id)
	{
		$data['detail'] = $this->artikel_model->ambil_id_artikel($id);
		$result = $this->site_model->get_site_data()->row_array();
		$data['services'] = $this->paket_model->tampil_data('services')->result();
		$data['judul'] = $result['judul'];

		$data['title'] = 'Detail Artikel';
		$this->load->view('templates_home/header',$data);
		$this->load->view('home/detail_artikel');
		$this->load->view('templates_home/footer');

	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */