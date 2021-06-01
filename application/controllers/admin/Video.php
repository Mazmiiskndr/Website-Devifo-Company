<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

	public function __construct(){
		parent::__construct();
		is_logged_in();
	}

	public function index()
	{ 

		$data['title'] = 'Video';
		$data['video'] = $this->video_model->tampil_data('video')->result();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/video');
		$this->load->view('templates_admin/footer');
	}

	public function detail_video($id)
	{
		$data['detail'] = $this->video_model->ambil_id_video($id);
		$data['title'] = 'Detail Video';
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/video_detail');
		$this->load->view('templates_admin/footer');
	}

	public function tambah_video()
	{
		$data['title'] = 'Tambah Video';
		$data['kategori_video'] = $this->video_model->ambil_video();
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/tambah_video');
		$this->load->view('templates_admin/footer');
	}

	public function tambah_video_aksi()
	{
		$this->_rulesVideo();
		if($this->form_validation->run() == false){
			$this->tambah_video();
		}else{
			$kategori_video 				= htmlspecialchars($this->input->post('kategori_video'));
			$judul_video 		= htmlspecialchars($this->input->post('judul_video'));
			$diskon 			= htmlspecialchars($this->input->post('diskon'));
			$deskripsi 			= htmlspecialchars($this->input->post('deskripsi'));

			$upload_video 				= $_FILES['video'];

			if ($upload_video) {
                $config['allowed_types'] = 'mp4|mkv';
                $config['max_size'] = '0';
                $config['upload_path'] = './assets/uploads/video';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('video')) {
                    $video = $this->upload->data('file_name');
                } else {
                    $this->upload->display_errors();
                }
            }
 

			$data = array(
				'kategori_video' 	=> $kategori_video,
				'judul_video' 		=> $judul_video,
				'deskripsi' 		=> $deskripsi,
				'video' 			=> $video

			);

			$this->video_model->insert_video($data,'video');
			$this->session->set_flashdata('pesan','
				<div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
  					Data Video Berhasil di <strong>Tambahkan!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/video');
		}
	}

	public function edit_video($id)
	{
		$where = array('id' => $id);
		$data['video'] = $this->video_model->edit_data($where,'video')->result();
		$data['kategori_video'] = $this->video_model->ambil_video();
		$data['title'] = 'Update Video';
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/video_update');
		$this->load->view('templates_admin/footer');
	}

	public function update_video_aksi()
	{
		$this->_rulesVideo();
		if($this->form_validation->run() == false){
			$this->edit_video();
		}else{
			$id 				= $this->input->post('id');
			$kategori_video 				= htmlspecialchars($this->input->post('kategori_video'));
			$judul_video 		= htmlspecialchars($this->input->post('judul_video'));
			$diskon 			= htmlspecialchars($this->input->post('diskon'));
			$deskripsi 			= htmlspecialchars($this->input->post('deskripsi'));

			$upload_video 				= $_FILES['video'];

			if ($upload_video) {
                $config['allowed_types'] = 'mp4|mkv';
                $config['max_size'] = '0';
                $config['upload_path'] = './assets/uploads/video';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('video')) {
                    $video = $this->upload->data('file_name');
                    $this->db->set('video',$video);
                } else {
                    $this->upload->display_errors();
                }
            }

			$data = array(
				'kategori_video' 	=> $kategori_video,
				'judul_video' 		=> $judul_video,
				'deskripsi' 		=> $deskripsi

			);

			$where = array('id' => $id);

			$this->video_model->update_data($where,$data,'video');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Video Berhasil di <strong>Update!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/video');



		}
	}

	public function hapus_video($id)
	{
		$where = array('id' => $id);
		$this->video_model->hapus_data($where,'video');
		$this->session->set_flashdata('pesan','
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					Data  Video Berhasil di <strong>Hapus!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
		redirect('admin/video');
	}

	public function _rulesVideo()
	{
		$this->form_validation->set_rules('kategori_video','Kategori Video','required');
		$this->form_validation->set_rules('judul_video','Judul Video','required');
		$this->form_validation->set_rules('deskripsi','Deksripsi Produk','required');
	}

}

/* End of file Datadesign.php */
/* Location: ./application/controllers/admin/Datadesign.php */