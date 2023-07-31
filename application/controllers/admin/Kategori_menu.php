<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_menu extends CI_Controller {

	public function __construct()
    {
        parent::__construct();  
		$this->load->model('kategori_model');
        $this->load->model('menu_model');
        cek_login();
        cek_user();
    }

	public function index()
	{
		$data['kategori'] = $this->kategori_model->tampil_data('kategori')->result();
		$data['title'] = "Kategori Menu | Holygrounds Coffee";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/kategori_menu');
		$this->load->view('templates_admin/footer');	
	}

	public function tambah_kategori()
	{

		$data['kategori'] = $this->kategori_model->tampil_data('kategori')->result();
		$this->_rulesKategori();
		if($this->form_validation->run() == false){
			$this->index();
		}else{

	
			$nama 				= htmlspecialchars($this->input->post('nama'));
			$date 				= date('Y-m-d');
		
 

			$data = array(
				'nama' 		=> $nama,
				'date' 		=> $date

			);

			$this->kategori_model->insert_kategori($data,'kategori');
			$this->session->set_flashdata('pesan','
				<div class="mt-3 alert alert-success alert-dismissible fade show" role="alert">
  					Data Kategori Berhasil di <strong>Tambahkan!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/kategori_menu');
		}
		
	}

	public function edit_kategori($id)
	{
		$data['detail'] = $this->kategori_model->ambil_id_kategori($id);

		$data['title'] = "Edit Kategori | Restoran";
		$this->load->view('templates_admin/header',$data);
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/topbar');
		$this->load->view('admin/edit_kategori');
		$this->load->view('templates_admin/footer');
	}


	public function update_kategori_aksi()
	{
		
		$this->_rulesKategori();
		if($this->form_validation->run() == false){
			$this->index();
		}else{
			$id_kategori 		= htmlspecialchars($this->input->post('id_kategori'));
			$nama 				= htmlspecialchars($this->input->post('nama'));
			$date 				= date('Y-m-d');
		
 

			$data = array(

				'nama' 		=> $nama,
				'date' 		=> $date

			);

			$where = array('id_kategori' => $id_kategori);

			$this->kategori_model->update_data($where,$data,'kategori');
			$this->session->set_flashdata('pesan','
				<div class="alert alert-success alert-dismissible fade show" role="alert">
  					Data Kategori Berhasil di <strong>Update!</strong>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				');
			redirect('admin/kategori_menu');



		} 
	}
    
	public function delete_kategori($id) 
	{ 
		$kategori = $this->kategori_model->ambil_id_kategori($id); 
	 
		if ($kategori) { 
			$nama_kategori = $kategori[0]->nama; 
	 
			if ($this->kategori_model->is_kategori_used_in_menu($nama_kategori)) { 
				$this->session->set_flashdata('pesan', ' 
					<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
						Kategori tidak dapat dihapus karena masih digunakan dalam menu. 
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
							<span aria-hidden="true">&times;</span> 
						</button> 
					</div> 
				'); 
			} else { 
				$where = array('id_kategori' => $id); 
				$this->kategori_model->hapus_data($where, 'kategori'); 
				$this->session->set_flashdata('pesan', ' 
					<div class="alert alert-success alert-dismissible fade show" role="alert"> 
						Data Kategori Berhasil di <strong>Hapus!</strong> 
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
							<span aria-hidden="true">&times;</span> 
						</button> 
					</div> 
				'); 
			} 
		} else { 
			// Kategori tidak ditemukan 
			$this->session->set_flashdata('pesan', ' 
				<div class="alert alert-danger alert-dismissible fade show" role="alert"> 
					Kategori tidak ditemukan. 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"> 
						<span aria-hidden="true">&times;</span> 
					</button> 
				</div> 
			'); 
		} 
	 
		redirect('admin/kategori_menu'); 
	}
	
	public function _rulesKategori()
	{
		$this->form_validation->set_rules('nama','Nama Kategori','required',
			[
				'required' => "Nama Kategori tidak boleh kosong",
			]
	);

	}

}

/* End of file Kategori_menu.php */
/* Location: ./application/controllers/admin/Kategori_menu.php */