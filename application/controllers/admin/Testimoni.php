<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends CI_Controller {

	public function __construct(){
		parent::__construct();
		is_logged_in();
	}
	
	public function index()
	{

		$data['title'] = 'Testimonials';
		$data['testimoni'] = $this->testimoni_model->tampil_data('testimoni')->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/testimoni');
		$this->load->view('templates_admin/footer');
	}


	public function tambah_testimoni()
	{
		$data['title'] = 'Tambah Testimonials';
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/tambah_testimoni');
		$this->load->view('templates_admin/footer');
	}

	public function tambah_testimoni_aksi()
	{
		$this->_rulesTestimoni();
		if($this->form_validation->run() == false){
			$this->tambah_testimoni();
		}else{
			$nama		= htmlspecialchars($this->input->post('nama'));
			$email		= htmlspecialchars($this->input->post('email'));
			$deskripsi		= htmlspecialchars($this->input->post('deskripsi'));
			$gambar 				= 'default.png';

			$data = array(
				'nama' 			=> $nama,
				'email'			=> $email,
				'deskripsi' 	=> $deskripsi,
				'gambar'		=> $gambar
			);
			$this->testimoni_model->insert_testimoni($data,'testimoni');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Testimonials Berhasil di <strong>Tambahkan!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/testimoni');
		}
	}

	public function update_testimoni($id)
	{
		$where = array('id' => $id);
		$data['testimoni'] = $this->testimoni_model->edit_data($where,'testimoni')->result();
		$data['title'] = 'Update Testimonials';
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/update_testimoni');
		$this->load->view('templates_admin/footer');
	}

	public function update_testimoni_aksi()
	{
		$this->_rulesTestimoni();
		if($this->form_validation->run() == false){
			$this->update_testimoni();
		}else{
			$id 		= $this->input->post('id');
			$nama		= htmlspecialchars($this->input->post('nama'));
			$email		= htmlspecialchars($this->input->post('email'));
			$deskripsi		= htmlspecialchars($this->input->post('deskripsi'));
			$gambar 				= $_FILES['userfile']['name'];

			if($gambar){
				$config ['upload_path'] = './assets/uploads/testimoni';
				$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);
				
				if( $this->upload->do_upload('userfile') ){
					$userfile = $this->upload->data('file_name');
					$this->db->set('gambar',$userfile);
				}else{
					echo "Photo Testimonials Gagal Diupload!";

				}
			}

			$data = array(
				'nama' 			=> $nama,
				'email'			=> $email,
				'deskripsi' 	=> $deskripsi
			);
			$where = array('id' => $id);

			$this->testimoni_model->update_data($where,$data,'testimoni');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Testimonials Berhasil di <strong>Update!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/testimoni');
		}
	}

	public function delete_testimoni($id)
	{
		$where = array('id' => $id);
		$this->testimoni_model->hapus_data($where,'testimoni');
		$this->session->set_flashdata('pesan','
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Data Testimonials Berhasil di <strong>Hapus!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
		redirect('admin/testimoni');
	}

	public function _rulesTestimoni()
	{
		$this->form_validation->set_rules('nama','Nama Testimonials','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('deskripsi','Deskripsi Testimonials','required');
	}


}

/* End of file Datadesign.php */
/* Location: ./application/controllers/admin/Datadesign.php */