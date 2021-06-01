<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function __construct(){
		parent::__construct();
		is_logged_in();
	}


	public function index()
	{

		$data['title'] = 'Contact';
		$data['contact'] = $this->produk_model->tampil_data('contact')->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/contact');
		$this->load->view('templates_admin/footer');
	}


	public function update_contact($id)
	{
		$where = array('id' => $id);
		$data['contact'] = $this->contact_model->edit_data($where,'contact')->result();
		$data['title'] = 'Update Contact';
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/contact_update');
		$this->load->view('templates_admin/footer');
	}

	public function update_contact_aksi()
	{
		$this->_rulesContact();
		if($this->form_validation->run() == false){
			$this->update_contact();
		}else{
			$id 		= $this->input->post('id');
			$nama		= htmlspecialchars($this->input->post('nama'));
			$subject		= htmlspecialchars($this->input->post('subject'));
			$deskripsi		= htmlspecialchars($this->input->post('deskripsi'));
			$email		= htmlspecialchars($this->input->post('email'));

			$data = array(
				'nama' => $nama,
				'subject' => $subject,
				'deskripsi' => $deskripsi,
				'email' => $email

			);
			$where = array('id' => $id);

			$this->contact_model->update_data($where,$data,'contact');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Contact Berhasil di <strong>Update!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/contact');
		}
	}

	public function delete_contact($id)
	{
		$where = array('id' => $id);
		$this->contact_model->hapus_data($where,'contact');
		$this->session->set_flashdata('pesan','
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Data Contact Berhasil di <strong>Hapus!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
		redirect('admin/contact');
	}

	public function _rulesContact()
	{
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('subject','Subject','required');
		$this->form_validation->set_rules('deskripsi','Deskripsi','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
	}


}

/* End of file Datadesign.php */
/* Location: ./application/controllers/admin/Datadesign.php */