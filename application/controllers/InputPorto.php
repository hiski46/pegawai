<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InputPorto extends CI_Controller {

	function __construct(){
		parent::__construct();	
		if (!$this->session->userdata('nama')) {
            redirect('login');
        }	
		$this->load->model('m_data');
		$this->load->helper('form','url');
	}
	public function index()
	{
		$this->load->view('inputPorto');
	}

	public function tambah_sdm(){
		$nama= $this->input->post('nama');
		$nip= $this->input->post('nip');
		$pendidikanTerakhir= $this->input->post('pendidikan-terakhir');
		$lspro=$this->input->post('lspro');
		$lit=$this->input->post('lit');
		$peng=$this->input->post('peng');
		$kal=$this->input->post('kal');

		// $file = $_FILES['gambar']['name'];
		

		// if($file == ''){
		// 	$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data gagal dimasukkan, anda Belum mamasukkan foto </div>');
        //     redirect('dashboard/dashboard');
		// }else{
		// 	$config['upload_path'] = '././assets/img';
		// 	$config['allowed_types'] = 'jpg|gif|png|jpeg';
		// 	$config['max_size'] = 10000;

		// 	$this->load->library('upload', $config);
		// 	if(!$this->upload->do_upload('gambar')){
		// 		echo 'upload gagal';
		// 		die;
		// 	}else{
		// 		$file = $this->upload->data('file_name');
		// 	}
		// }
			$data = array(
				'nama'=>$nama,
				'nip' => $nip,
				'pendidikan_terakhir' => $pendidikanTerakhir

			);
			$this->m_data->tambah($data,'sdm');
			if ($lspro != null) {
				$this->m_data->tambahLembaga('lspro',1,$nip);
			}
			if ($lit != null) {
				$this->m_data->tambahLembaga('lit',2,$nip);
			}
			if ($peng != null) {
				$this->m_data->tambahLembaga('lab_pengujian',3,$nip);
			}
			if ($kal != null) {
				$this->m_data->tambahLembaga('lab_kalibrasi',4,$nip);
			}
			
			// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">  Anda Berhasil Menambahkan Toko '.$nama.' </div>');
            redirect('Dashboard');

		
	}
}
