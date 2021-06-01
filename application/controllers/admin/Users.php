<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct(){
		parent::__construct();
		is_logged_in();
	}


	public function index()
	{

		$data['title'] = 'Users';
		$data['users'] = $this->users_model->tampil_data('users')->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/users');
		$this->load->view('templates_admin/footer');
	}

	public function tambah_users()
	{
		$data['title'] = 'Tambah Data Users';
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/users_tambah');
		$this->load->view('templates_admin/footer');
	}

	public function tambah_users_aksi()
	{
		$this->_rulesUsers();
		if($this->form_validation->run() == false){
			$this->tambah_users();
		}else{
			$first_name 				= htmlspecialchars($this->input->post('first_name'));
			$last_name 				= htmlspecialchars($this->input->post('last_name'));
			$username 			= htmlspecialchars($this->input->post('username'));
			$email 				= htmlspecialchars($this->input->post('email'));
			$password 			= MD5($this->input->post('password'));
			$role_id 			= htmlspecialchars($this->input->post('role_id'));
			$gambar 				= $_FILES['gambar'];

			if($gambar = ''){

			}else{
				$config ['upload_path'] = './assets/uploads/users';
				$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);
				if( !$this->upload->do_upload('gambar') ){
					echo "Gambar User Gagal Diupload!";
				}else{
					$gambar = $this->upload->data('file_name');

				}
			}


			$data = array(
				'first_name' 		=> $first_name,
				'last_name' 		=> $last_name,
				'username' 			=> $username,
				'email' 			=> $email,
				'password' 			=> $password,
				'role_id' 			=> $role_id,
				'gambar' 			=> $gambar

			);

			$this->users_model->insert_users($data,'users');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Users Berhasil di <strong>Tambahkan!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/users');
		}


	}

	public function update_users($id)
	{
		$where = array('id' => $id);
		$data['users'] = $this->users_model->edit_data($where,'users')->result();
		$data['title'] = 'Update Data Users';
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/users_update');
		$this->load->view('templates_admin/footer');
	}
	public function update_aksi()
	{

			$id 			= $this->input->post('id');
			$username 	= htmlspecialchars($this->input->post('username'));
			$email 		= htmlspecialchars($this->input->post('email'));
			$last_name 			= htmlspecialchars($this->input->post('last_name'));
			$first_name 			= htmlspecialchars($this->input->post('first_name'));
			$role_id 				= htmlspecialchars($this->input->post('role_id'));
			$gambar 				= $_FILES['userfile']['name'];

			if($gambar){
				$config ['upload_path'] = './assets/uploads/users';
				$config ['allowed_types'] = 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);
				
				if( $this->upload->do_upload('userfile') ){
					$userfile = $this->upload->data('file_name');
					$this->db->set('gambar',$userfile);
				}else{
					echo "Photo Users Gagal Diupload!";

				}
			}

			$data = array(
				'username' 		=> $username,
				'email' 		=> $email,
				'first_name' 	=> $first_name,
				'last_name' 	=> $last_name,
				'role_id' 		=> $role_id

			);

			$where = array('id' => $id);

			$this->users_model->update_data($where,$data,'users');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Users Berhasil di <strong>Update!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/users');

	}

	public function delete_users($id)
	{
		$where = array('id' => $id);
		$this->users_model->hapus_data($where,'users');
		$this->session->set_flashdata('pesan','
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Data  Users Berhasil di <strong>Hapus!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
		redirect('admin/users');
	}

	public function _rulesUsers()
	{
		$this->form_validation->set_rules('first_name','First Name','required',[
			'required' => 'First Name Harus Diisi!'
		]);
		$this->form_validation->set_rules('last_name','Last Name','required',[
			'required' => 'Last Name Harus Diisi!'
		]);
		$this->form_validation->set_rules('username','Username','required',[
			'required' => 'Username Harus Diisi!'
		]);
		$this->form_validation->set_rules('password','Password','required',[
			'required' => 'Password Harus Diisi!'
		]);
		$this->form_validation->set_rules('email','Email','required|valid_email',[
			'required' => 'Email Harus Diisi!',
			'valid_email' => 'Yang Anda Masukan Bukan Email'
		]);
		$this->form_validation->set_rules('role_id','Akses Level','required',[
			'required' => 'Level Harus Diisi!'
		]);

	}

}

/* End of file Datadesign.php */
/* Location: ./application/controllers/admin/Datadesign.php */