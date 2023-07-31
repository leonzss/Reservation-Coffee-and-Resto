<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Testimoni extends CI_Controller { 
 
    public function __construct() 
    { 
        parent::__construct(); 
        cek_login(); 
        cek_user(); 
    } 
 
    public function index() 
    { 
        $data['testimoni'] = $this->testimoni_model->tampil_data('testimoni')->result(); 
        $data['title'] = "Testimoni | Holygrounds Coffee"; 
        $this->load->view('templates_admin/header', $data); 
        $this->load->view('templates_admin/sidebar'); 
        $this->load->view('templates_admin/topbar'); 
        $this->load->view('admin/testimoni'); 
        $this->load->view('templates_admin/footer'); 
    } 
 
    public function delete_testimoni($id) 
    { 
        $where = array('id_testimoni' => $id); 
        $this->testimoni_model->hapus_data($where, 'testimoni'); 
        $this->session->set_flashdata('pesan', ' 
            <div class="alert alert-danger alert-dismissible fade show" role="alert"> 
                Data Testimoni Berhasil di <strong>Hapus!</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                    <span aria-hidden="true">&times;</span> 
                </button> 
            </div> 
        '); 
        redirect('admin/testimoni'); 
    } 
 
    public function approve_testimoni($id) 
    { 
        $where = array('id_testimoni' => $id); 
        $data = array('status' => 'approved'); 
        $this->testimoni_model->update_data($where, $data, 'testimoni'); 
        $this->session->set_flashdata('pesan', ' 
            <div class="alert alert-success alert-dismissible fade show" role="alert"> 
                Testimoni Berhasil di <strong>Approved!</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                    <span aria-hidden="true">&times;</span> 
                </button> 
            </div> 
        '); 
        redirect('admin/testimoni'); 
    } 
 
    public function reject_testimoni($id) 
    { 
        $where = array('id_testimoni' => $id); 
        $data = array('status' => 'rejected'); 
        $this->testimoni_model->update_data($where, $data, 'testimoni'); 
        $this->session->set_flashdata('pesan', ' 
            <div class="alert alert-danger alert-dismissible fade show" role="alert"> 
                Testimoni Berhasil di <strong>Rejected!</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
                    <span aria-hidden="true">&times;</span> 
                </button> 
            </div> 
        '); 
        redirect('admin/testimoni'); 
    } 
 
} 
?>