<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Completemenu extends CI_Controller {

	public function index()
	{
        $data['testimoni'] = $this->kategori_model->tampil_data('testimoni')->result();
		$data['title'] = "Complete Menu | Holygrounds Coffee";
		$this->load->view('templates_coffeeshop/header',$data);
		
		$this->load->view('coffeeshop/completemenu');
		$this->load->view('templates_coffeeshop/footer');	
	}

}

/* End of file Staff.php */
/* Location: ./application/controllers/Staff.php */