<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {
	public function get_jumlah_kategori()
	{
		$sql = "SELECT count(id_kategori) as id_kategori FROM kategori";
		$result = $this->db->query($sql);
		return $result->row()->id_kategori;
	}


	public function tampil_data($table)
	{
		return $this->db->get($table);
	}

	public function insert_kategori($data,$table)
	{
		$this->db->insert($table,$data);
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

	public function is_kategori_used_in_menu($nama_kategori)
	{
		$this->db->where('nama_kategori', $nama_kategori);
    	$this->db->from('menu');    $count = $this->db->count_all_results();
    	return ($count > 0) ? true : false;
	}

	public function ambil_id_kategori($id)
	{
		$result = $this->db->where('id_kategori',$id)->get('kategori');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	} 


}

/* End of file Kategori_model.ph */
/* Location: ./application/models/Kategori_model.ph */