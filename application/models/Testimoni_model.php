<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Testimoni_model extends CI_Model { 
    public function get_jumlah_testimoni() 
    { 
        $sql = "SELECT count(id_testimoni) as id_testimoni FROM testimoni"; 
        $result = $this->db->query($sql); 
        return $result->row()->id_testimoni; 
    } 
 
    public function tampil_data($table) 
    { 
        return $this->db->get($table); 
    } 
 
    public function insert_testimoni($data, $table) 
    { 
        // Simpan testimoni dalam status "pending" 
        $data['status'] = 'pending'; 
        $this->db->insert($table, $data); 
    } 
 
    public function update_data($where, $data, $table) 
    { 
        $this->db->where($where); 
        $this->db->update($table, $data); 
    } 
 
    public function hapus_data($where, $table) 
    { 
        $this->db->where($where); 
        $this->db->delete($table); 
    } 
 
    public function ambil_id_testimoni($id) 
    { 
        $result = $this->db->where('id_testimoni', $id)->get('testimoni'); 
        if ($result->num_rows() > 0) { 
            return $result->result(); 
        } else { 
            return false; 
        } 
    } 
} 
?>