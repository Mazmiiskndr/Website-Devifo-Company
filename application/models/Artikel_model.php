<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_Model {

	public function get_jumlah_artikel()
	{
		$sql = "SELECT count(id) as id FROM tugas";
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
							->get('artikel');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}

	}

	public function detail($id)
	{
		$this->db->select('*');
		$this->db->from('tugas');
		$this->db->where('id', $id);
		$this->db->order_by('id','decs');
		$query = $this->db->get();
		return $query->row();
	}

	public function tampil_kategori()
	{
		$this->db->select('*');
		$this->db->from('kategori_artikel');
		$this->db->order_by('id','decs');
			return $this->db->get()->result();
	}

	public function ambil_id_artikel($id)
	{
		$result = $this->db->where('id',$id)->get('tugas');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}
	public function insert_artikel($data,$table)
	{
		$this->db->insert($table,$data);
	}

	public function ambil_kategori()
	{
		return $this->db->order_by('name', 'ASC')->get('kategori_artikel')->result();
	}

	public function insert_kategori($data,$table)
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

/* End of file artikel_model.php */
/* Location: ./application/models/artikel_model.php */