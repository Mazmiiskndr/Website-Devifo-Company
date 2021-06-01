<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket_model extends CI_Model {

	public function get_jumlah_produk()
	{
		$sql = "SELECT count(id) as id FROM paket";
		$result = $this->db->query($sql);
		return $result->row()->id;
	}

	public function tampil_data($table)
	{
			return $this->db->get($table);
	}

	public function find($id)
	{
		$result = $this->db->where('id',$id)
							->limit(1)
							->get('produk');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}

	}

	public function detail($id)
	{
		$this->db->select('*');
		$this->db->from('paket');
		$this->db->where('id', $id);
		$this->db->order_by('id','decs');
		$query = $this->db->get();
		return $query->row();
	}


	public function ambil_id_paket($id)
	{
		$result = $this->db->where('id',$id)->get('paket');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}
	public function insert_paket($data,$table)
	{
		$this->db->insert($table,$data);
	}

	public function edit_data2($table)
	{
		return $this->db->get_where($table);
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