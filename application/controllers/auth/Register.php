<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		// $data['title'] = 'Register Page';
		// $this->load->view('templates_auth/header',$data);
		// $this->load->view('auth/register');
		// $this->load->view('templates_auth/footer');


		$this->_rules();
		$data['title'] = 'Register Page';
			if( $this->form_validation->run() == FALSE ){
				$this->load->view('templates_auth/header',$data);
				$this->load->view('auth/register');
				$this->load->view('templates_auth/footer');
			}else{
				$first_name				= $this->input->post('first_name');
				$last_name				= $this->input->post('last_name');
				$username			= $this->input->post('username');
				$email				= $this->input->post('email');
				$gambar				= 'default.jpg';
				$password			= MD5($this->input->post('password'));
				$role_id			= 2;

				$data = array(
					'first_name'	=> $first_name,
					'last_name'		=> $last_name,
					'username'		=> $username,
					'email'			=> $email,
					'gambar'		=> $gambar,
					'password'		=> $password,
					'role_id'		=> $role_id
				);

				$this->login_model->insert_data($data,'users');

				$this->session->set_flashdata('pesan','
				<div style="color: green;" class="alert alert-success alert-dismissible fade show" role="alert">
				  Registrasi <strong>Berhasil!</strong>
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
				redirect('auth/login');
			}

	}


	// public function register_proses()
	// {

	// 		$this->_rules();
	// 		if( $this->form_validation->run() == FALSE ){
	// 			$data['title'] = 'Register Page';
	// 			$this->load->view('templates_auth/header',$data);
	// 			$this->load->view('auth/register');
	// 			$this->load->view('templates_auth/footer');
	// 		}else{
	// 			$name				= $this->input->post('name');
	// 			$username			= $this->input->post('username');
	// 			$email				= $this->input->post('email');
	// 			$gambar				= 'default.jpg';
	// 			$password			= MD5($this->input->post('password'));
	// 			$role_id			= 2;
	// 			$is_active			= 0;

	// 			$data = array(
	// 				'name'			=> $name,
	// 				'username'		=> $username,
	// 				'email'			=> $email,
	// 				'gambar'		=> $gambar,
	// 				'password'		=> $password,
	// 				'role_id'		=> $role_id,
	// 				'is_active'		=> $is_active
	// 			);

	// 			$this->login_model->insert_data($data,'users');

	// 			$this->session->set_flashdata('pesan','
	// 			<div class="alert alert-success alert-dismissible fade show col-sm-5" role="alert">
 //  					Register <strong>Berhasil!</strong>
 //  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
 //    					<span aria-hidden="true">&times;</span>
 //  					</button>
	// 			</div>
	// 			');
	// 			redirect('auth/login');
	// 		}


	// }

	public function _rules()
		{
			$this->form_validation->set_rules('first_name','First Nama','required');
			$this->form_validation->set_rules('last_name','Last Nama','required');
			$this->form_validation->set_rules('username','Username','required|is_unique[users.username]',[
				'is_unique' => 'This username has already registered!'
			]);
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('password','Password','required');
		}




}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */