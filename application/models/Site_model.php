<?php

class Site_model extends CI_Model{
	
	function get_site_data(){
		$query = $this->db->get('header', 1); 
		return $query;
	}
	function get_site_data2(){
		$query = $this->db->get('tugas', 1); 
		return $query;
	}

	function update_information($id,$judul,$deskripsi,$header){
		$this->db->set('judul',$judul);
		$this->db->set('deksripsi',$deksripsi);
		$this->db->set('header',$header);
		$this->db->where('id',$id);
		$this->db->update('header');
	}

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	} 


	function update_information_header_icon($id,$judul,$deskripsi,$header){
		$this->db->set('judul',$judul);
		$this->db->set('deksripsi',$deksripsi);
		$this->db->set('header',$header);
		$this->db->where('id',$id);
		$this->db->update('header');
	}

	function update_information_big_icon($id,$judul,$deskripsi,$header){
		$this->db->set('judul',$judul);
		$this->db->set('deksripsi',$deksripsi);
		$this->db->set('header',$header);
		$this->db->where('id',$id);
		$this->db->update('header');
	}

	function update_information_big_header($id,$judul,$deskripsi,$header){
		$this->db->set('judul',$judul);
		$this->db->set('deksripsi',$deksripsi);
		$this->db->set('header',$header);
		$this->db->where('id',$id);
		$this->db->update('header');
	}

	function update_information_header($id,$judul,$deskripsi,$header){
		$this->db->set('judul',$judul);
		$this->db->set('deksripsi',$deksripsi);
		$this->db->set('header',$header);
		$this->db->where('id',$id);
		$this->db->update('header');
	}

	function update_information_footer($id,$judul,$deskripsi,$header){
		$this->db->set('judul',$judul);
		$this->db->set('deksripsi',$deksripsi);
		$this->db->set('header',$header);
		$this->db->where('id',$id);
		$this->db->update('header');
	}

	function update_information_big($id,$judul,$deskripsi,$header){
		$this->db->set('judul',$judul);
		$this->db->set('deksripsi',$deksripsi);
		$this->db->set('header',$header);
		$this->db->where('id',$id);
		$this->db->update('header');
	}

	function update_information_nologo($id,$judul,$deskripsi,$header){
		$this->db->set('judul',$judul);
		$this->db->set('deksripsi',$deksripsi);
		$this->db->set('header',$header);
		$this->db->where('id',$id);
		$this->db->update('header');
	}
}