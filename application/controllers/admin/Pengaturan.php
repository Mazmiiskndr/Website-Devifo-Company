<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		is_logged_in();
	}
	
	public function index()
	{
		$result = $this->site_model->get_site_data()->row_array();
		$data['id'] = $result['id'];
		$data['judul'] = $result['judul'];
		$data['deskripsi'] = $result['deskripsi'];
		$data['gambar'] = $result['gambar'];
		$data['title'] = 'Pengaturan Header';
		$data['header'] = $this->paket_model->tampil_data('header')->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/header');
		$this->load->view('templates_admin/footer');
	} 



	public function update_pengaturan_aksi()
	{
		$this->_rulesPengaturan();
		if($this->form_validation->run() == false){
			$this->index();
		}else{
			$id 			= $this->input->post('id');
			$judul 			= htmlspecialchars($this->input->post('judul'));
			$deskripsi 		= htmlspecialchars($this->input->post('deskripsi'));
			$gambar 		= $_FILES['userfile']['name'];

			if($gambar){
				$config ['upload_path'] = './assets/uploads/site';
				$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);
				
				if( $this->upload->do_upload('userfile') ){
					$userfile = $this->upload->data('file_name');
					$this->db->set('gambar',$userfile);
				}else{
					echo "Photo Header Gagal Diupload!";

				}
			}

			$data = array(
				'judul' 	=> $judul,
				'deskripsi' => $deskripsi

			);

			$where = array('id' => $id);

			$this->produk_model->update_data($where,$data,'header');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Pengaturan Berhasil di <strong>Update!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/pengaturan');



		}
	}

	public function update_tugas_aksi()
	{
		$this->_rulesTugas();
		if($this->form_validation->run() == false){
			$this->index();
		}else{
			$id 			= $this->input->post('id');
			$judul 			= htmlspecialchars($this->input->post('judul'));
			$text 			= htmlspecialchars($this->input->post('text'));
			$artikel 			= htmlspecialchars($this->input->post('artikel'));
			$gambar 		= $_FILES['userfile']['name'];

			if($gambar){
				$config ['upload_path'] = './assets/uploads/tugas';
				$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);
				
				if( $this->upload->do_upload('userfile') ){
					$userfile = $this->upload->data('file_name');
					$this->db->set('gambar',$userfile);
				}else{
					echo "Photo Header Gagal Diupload!";

				}
			}

			$data = array(
				'judul' 	=> $judul,
				'text' 		=> $text,
				'artikel' 	=> $artikel

			);

			$where = array('id' => $id);

			$this->produk_model->update_data($where,$data,'tugas');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Tugas Berhasil di <strong>Update!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/pengaturan/tugas');



		}
	}

	public function about()
	{

		$data['title'] = 'Pengaturan About';
		$data['about'] = $this->paket_model->tampil_data('about')->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/about');
		$this->load->view('templates_admin/footer');
	}

	public function home()
	{

		$result = $this->home_model->get_site_data()->row_array();
		$data['id'] = $result['id'];
		$data['deskripsi_about'] = $result['deskripsi_about'];
		$data['deskripsi_services'] = $result['deskripsi_services'];
		$data['deskripsi_portfolio'] = $result['deskripsi_portfolio'];
		$data['deskripsi_testimonials'] = $result['deskripsi_testimonials'];
		$data['deskripsi_packet'] = $result['deskripsi_packet'];
		$data['deskripsi_team'] = $result['deskripsi_team'];
		$data['deskripsi_contact'] = $result['deskripsi_contact'];
		$data['deskripsi_video'] = $result['deskripsi_video'];
		$data['title'] = 'Pengaturan Home';
		$data['home'] = $this->paket_model->tampil_data('home')->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/home');
		$this->load->view('templates_admin/footer');
	}

	public function pertanyaan()
	{

		$data['title'] = 'Pengaturan Questions';
		$data['pertanyaan'] = $this->paket_model->tampil_data('pertanyaan')->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/pertanyaan');
		$this->load->view('templates_admin/footer');
	}

	public function tugas()
	{
		$result = $this->site_model->get_site_data2()->row_array();
		$data['id'] = $result['id'];
		$data['judul'] = $result['judul'];
		$data['text'] = $result['text'];
		$data['artikel'] = $result['artikel'];
		$data['gambar'] = $result['gambar'];
		$data['title'] = 'Pengaturan Tugas';
		$data['tugas'] = $this->paket_model->tampil_data('tugas')->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/tugas');
		$this->load->view('templates_admin/footer');
	}


	public function services()
	{

		$data['title'] = 'Pengaturan Questions';
		$data['services'] = $this->paket_model->tampil_data('services')->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/services');
		$this->load->view('templates_admin/footer');
	}



	// public function tambah_kategori()
	// {
	// 	$data['title'] = 'Tambah Kategori Produk';
	// 	$this->load->view('templates_admin/header',$data);
	// 	$this->load->view('templates_admin/sidebar');
	// 	$this->load->view('templates_admin/topbar');
	// 	$this->load->view('admin/tambah_kategori');
	// 	$this->load->view('templates_admin/footer');
	// }

	// public function tambah_kategori_aksi()
	// {
	// 	$this->_rulesKategori();
	// 	if($this->form_validation->run() == false){
	// 		$this->tambah_kategori();
	// 	}else{
	// 		$nama		= htmlspecialchars($this->input->post('name'));
	// 		$data = array('name' => $nama);
	// 		$this->produk_model->insert_kategori($data,'kategori_produk');
	// 		$this->session->set_flashdata('pesan','
	// 			<div class="alert alert-success alert-dismissible fade show" role="alert">
 //  					Data Kategori Produk Berhasil di <strong>Tambahkan!</strong>
 //  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
 //    					<span aria-hidden="true">&times;</span>
 //  					</button>
	// 			</div>
	// 			');
	// 		redirect('admin/kategori');
	// 	}
	// }

	public function update_about($id)
	{
		$where = array('id' => $id);
		$data['about'] = $this->paket_model->edit_data($where,'about')->result();
		$data['title'] = 'Update Pengaturan About';
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/about_update');
		$this->load->view('templates_admin/footer');
	}

	public function update_about_aksi()
	{
		$this->_rulesAbout();
		if($this->form_validation->run() == false){
			$this->update_about();
		}else{
			$id 		= $this->input->post('id');
			$icon		= htmlspecialchars($this->input->post('icon'));
			$judul		= htmlspecialchars($this->input->post('judul'));
			$deskripsi		= htmlspecialchars($this->input->post('deskripsi'));

			$data = array(
				'icon' => $icon,
				'judul' => $judul,
				'deskripsi' => $deskripsi
			);
			$where = array('id' => $id);

			$this->produk_model->update_data($where,$data,'about');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Pengaturan About Berhasil di <strong>Update!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/pengaturan/about');
		}
	}


	public function update_home_aksi()
	{
		$this->_rulesHome();
		if($this->form_validation->run() == false){
			$this->home();
		}else{
			$id 				= $this->input->post('id');
			$deskripsi_about 				= htmlspecialchars($this->input->post('deskripsi_about'));
			$deskripsi_services 		= htmlspecialchars($this->input->post('deskripsi_services'));
			$deskripsi_portfolio 		= htmlspecialchars($this->input->post('deskripsi_portfolio'));
			$deskripsi_testimonials 		= htmlspecialchars($this->input->post('deskripsi_testimonials'));
			$deskripsi_packet 		= htmlspecialchars($this->input->post('deskripsi_packet'));
			$deskripsi_team 		= htmlspecialchars($this->input->post('deskripsi_team'));
			$deskripsi_contact 		= htmlspecialchars($this->input->post('deskripsi_contact'));
			$deskripsi_video 		= htmlspecialchars($this->input->post('deskripsi_video'));
	

			$data = array(
				'deskripsi_about' 	=> $deskripsi_about,
				'deskripsi_services' => $deskripsi_services,
				'deskripsi_portfolio' => $deskripsi_portfolio,
				'deskripsi_testimonials' => $deskripsi_testimonials,
				'deskripsi_packet' => $deskripsi_packet,
				'deskripsi_team' => $deskripsi_team,
				'deskripsi_contact' => $deskripsi_contact,
				'deskripsi_video' => $deskripsi_video
			);

			$where = array('id' => $id);

			$this->produk_model->update_data($where,$data,'home');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Pengaturan Home Berhasil di <strong>Update!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/pengaturan/home');



		}
	}


	public function update_pertanyaan($id)
	{
		$where = array('id' => $id);
		$data['pertanyaan'] = $this->paket_model->edit_data($where,'pertanyaan')->result();
		$data['title'] = 'Update Questions';
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/pertanyaan_update');
		$this->load->view('templates_admin/footer');
	}

	public function update_pertanyaan_aksi()
	{
		$this->_rulesPertanyaan();
		if($this->form_validation->run() == false){
			$this->update_pertanyaan();
		}else{
			$id 		= $this->input->post('id');
			$href		= htmlspecialchars($this->input->post('href'));
			$judul		= htmlspecialchars($this->input->post('judul'));
			$deskripsi		= htmlspecialchars($this->input->post('deskripsi'));

			$data = array(
				'href' => $href,
				'deskripsi' => $deskripsi
			);
			$where = array('id' => $id);

			$this->produk_model->update_data($where,$data,'pertanyaan');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Pengaturan Questions Berhasil di <strong>Update!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/pengaturan/pertanyaan');
		}
	}

	public function update_services($id)
	{
		$where = array('id' => $id);
		$data['services'] = $this->paket_model->edit_data($where,'services')->result();
		$data['title'] = 'Update Pengaturan Services';
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/services_update');
		$this->load->view('templates_admin/footer');
	}

	public function update_services_aksi()
	{
		$this->_rulesServices();
		if($this->form_validation->run() == false){
			$this->update_services();
		}else{
			$id 		= $this->input->post('id');
			$icon		= htmlspecialchars($this->input->post('icon'));
			$judul		= htmlspecialchars($this->input->post('judul'));
			$deskripsi		= htmlspecialchars($this->input->post('deskripsi'));

			$data = array(
				'icon' => $icon,
				'judul' => $judul,
				'deskripsi' => $deskripsi
			);
			$where = array('id' => $id);

			$this->produk_model->update_data($where,$data,'services');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Pengaturan Services Berhasil di <strong>Update!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/pengaturan/services');
		}
	}

	// public function delete_about($id)
	// {
	// 	$where = array('id' => $id);
	// 	$this->produk_model->hapus_data($where,'kategori_produk');
	// 	$this->session->set_flashdata('pesan','
	// 			<div class="alert alert-danger alert-dismissible fade show" role="alert">
 //  					Data Kategori Produk Berhasil di <strong>Hapus!</strong>
 //  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
 //    					<span aria-hidden="true">&times;</span>
 //  					</button>
	// 			</div>
	// 			');
	// 	redirect('admin/kategori');
	// }


	public function _rulesHome()
	{
		$this->form_validation->set_rules('deskripsi_about','Deskripsi About','required');
		$this->form_validation->set_rules('deskripsi_services','Deskripsi Services','required');
		$this->form_validation->set_rules('deskripsi_portfolio','Deskripsi Portfolio','required');
		$this->form_validation->set_rules('deskripsi_testimonials','Deskripsi Testimonials','required');
		$this->form_validation->set_rules('deskripsi_packet','Deskripsi Pakcet','required');
		$this->form_validation->set_rules('deskripsi_team','Deskripsi Team','required');
		$this->form_validation->set_rules('deskripsi_contact','Deskripsi Contact','required');
		$this->form_validation->set_rules('deskripsi_video','Deskripsi Video','required');
	}

	public function _rulesAbout()
	{
		$this->form_validation->set_rules('icon','Icon','required');
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('deskripsi','Deskripsi','required');
	}


	public function _rulesPengaturan()
	{
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('deskripsi','Deskripsi','required');
	}

	public function _rulesTugas()
	{
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('text','Text','required');
		$this->form_validation->set_rules('artikel','Artikel','required');
	}


	public function _rulesServices()
	{
		$this->form_validation->set_rules('icon','Icon','required');
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('deskripsi','Deskripsi','required');
	}

	public function _rulesPertanyaan()
	{
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('deskripsi','Deskripsi','required');
	}


}

/* End of file Datadesign.php */
/* Location: ./application/controllers/admin/Datadesign.php */