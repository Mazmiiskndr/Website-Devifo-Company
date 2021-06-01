<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {


	public function get_jumlah_users()
	{
		$sql = "SELECT count(id) as id FROM users";
		$result = $this->db->query($sql);
		return $result->row()->id;
	}


	public function tampil_data($table)
	{
			return $this->db->get($table);
	}

	public function ambil_id_users($id)
	{
		$result = $this->db->where('id',$id)->get('users');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}
	public function insert_users($data,$table)
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

/* End of file Produk_model.php */
/* Location: ./application/models/Produk_model.php */