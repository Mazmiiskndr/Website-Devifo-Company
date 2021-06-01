<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {
	public function __construct(){
		parent::__construct();
		is_logged_in();
	}


	public function index()
	{

		$data['title'] = 'Team';
		$data['team'] = $this->team_model->tampil_data('team')->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/team');
		$this->load->view('templates_admin/footer');
	}

	public function tambah_team()
	{
		$data['title'] = 'Tambah Data Team';
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/team_tambah');
		$this->load->view('templates_admin/footer');
	}

	public function tambah_team_aksi()
	{
		$this->_rulesTeam();
		if($this->form_validation->run() == false){
			$this->tambah_team();
		}else{
			$nama 				= htmlspecialchars($this->input->post('nama'));
			$jabatan 				= htmlspecialchars($this->input->post('jabatan'));
			$facebook 			= htmlspecialchars($this->input->post('facebook'));
			$whatsapp 				= htmlspecialchars($this->input->post('whatsapp'));
			$instagram 				= htmlspecialchars($this->input->post('instagram'));
			$gambar 				= $_FILES['gambar'];

			if($gambar = ''){

			}else{
				$config ['upload_path'] = './assets/uploads/team';
				$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);
				if( !$this->upload->do_upload('gambar') ){
					echo "Gambar User Gagal Diupload!";
				}else{
					$gambar = $this->upload->data('file_name');

				}
			}


			$data = array(
				'nama' 				=> $nama,
				'jabatan' 			=> $jabatan,
				'facebook' 			=> $facebook,
				'whatsapp' 			=> $whatsapp,
				'instagram' 		=> $instagram,
				'gambar' 			=> $gambar

			);

			$this->team_model->insert_team($data,'team');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Team Berhasil di <strong>Tambahkan!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/team');
		}


	}

	public function update_team($id)
	{
		$where = array('id' => $id);
		$data['team'] = $this->team_model->edit_data($where,'team')->result();
		$data['title'] = 'Update Data Team';
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/team_update');
		$this->load->view('templates_admin/footer');
	}
	public function update_aksi()
	{

			$id 				= $this->input->post('id');
			$nama 				= htmlspecialchars($this->input->post('nama'));
			$jabatan 			= htmlspecialchars($this->input->post('jabatan'));
			$facebook 			= htmlspecialchars($this->input->post('facebook'));
			$whatsapp 			= htmlspecialchars($this->input->post('whatsapp'));
			$instagram 			= htmlspecialchars($this->input->post('instagram'));
			$gambar 			= $_FILES['userfile']['name'];

			if($gambar){
				$config ['upload_path'] = './assets/uploads/team';
				$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);
				
				if( $this->upload->do_upload('userfile') ){
					$userfile = $this->upload->data('file_name');
					$this->db->set('gambar',$userfile);
				}else{
					echo "Photo Teams Gagal Diupload!";

				}
			}

			$data = array(
				'nama' 			=> $nama,
				'jabatan' 		=> $jabatan,
				'whatsapp' 		=> $whatsapp,
				'facebook' 		=> $facebook,
				'instagram' 	=> $instagram

			);

			$where = array('id' => $id);

			$this->team_model->update_data($where,$data,'team');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Team Berhasil di <strong>Update!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/team');

	}

	public function delete_team($id)
	{
		$where = array('id' => $id);
		$this->team_model->hapus_data($where,'team');
		$this->session->set_flashdata('pesan','
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Data  Team Berhasil di <strong>Hapus!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
		redirect('admin/team');
	}

	public function _rulesTeam()
	{
		$this->form_validation->set_rules('nama','Nama Team','required',[
			'required' => 'Nama Team Harus Diisi!'
		]);
		$this->form_validation->set_rules('jabatan','Jabatan','required',[
			'required' => 'Jabatan Harus Diisi!'
		]);

	}

}

/* End of file Datadesign.php */
/* Location: ./application/controllers/admin/Datadesign.php */