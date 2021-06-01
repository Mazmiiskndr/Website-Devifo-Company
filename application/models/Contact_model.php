<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model {


	public function tampil_data($table)
	{
			return $this->db->get($table);
	}

	public function find($id)
	{
		$result = $this->db->where('id',$id)
							->limit(1)
							->get('contact');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}

	}



	public function ambil_id_contact($id)
	{
		$result = $this->db->where('id',$id)->get('contact');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}
	public function insert_data($data,$table)
	{
		$this->db->insert($table,$data);
	}

	public function edit_data($where,$table)
	{
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	} 

	public function hapus_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

}

/* End of file contact_model.php */
/* Location: ./application/models/Produk_model.php */