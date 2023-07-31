<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	public function index()
	{
		$data['team'] = $this->team_model->tampil_data('team')->result();
		$data['testimoni'] = $this->kategori_model->tampil_data('testimoni')->result();
		$data['title'] = "Staff | Holygrounds Coffee";
		$this->load->view('templates_coffeeshop/header',$data);
		
		$this->load->view('coffeeshop/staff');
		$this->load->view('templates_coffeeshop/footer');	
	}

}

/* End of file Staff.php */
/* Location: ./application/controllers/Staff.php */