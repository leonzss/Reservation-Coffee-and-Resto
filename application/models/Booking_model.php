<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_model extends CI_Model {
	public function get_jumlah_booking()
	{
		$sql = "SELECT count(id_booking) as id_booking FROM booking";
		$result = $this->db->query($sql);
		return $result->row()->id_booking;
	}


	public function tampil_data($table)
	{
		return $this->db->get($table);
	}

	public function insert_booking($data,$table)
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

	// public function ambil_id_booking($id)
	// {
	// 	$result = $this->db->where('id_booking',$id)->get('booking');
	// 	if($result->num_rows() > 0){
	// 		return $result->result();
	// 	}else{
	// 		return false;
	// 	}
	// }

	public function ambil_id_booking($id)
	{
		$result = $this->db->where('id_booking',$id)->get('booking');
		if($result->num_rows() > 0){
			$booking_data = $result->row();
	
			// Mendapatkan URL gambar dari database (misalnya kolom 'gambar')
			$gambar_url = $booking_data->photo;
	
			// Menampilkan gambar
			// echo '<img src="'.base_url($gambar_url).'" alt="Booking Image">';
			
			return $result->result();
		}else{
			return false;
		}
	}
}

/* End of file booking_model.ph */
/* Location: ./application/models/booking_model.ph */