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
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->load->view('inputPorto');
	}

	public function tambah_porto(){
		$pelatihan= $this->input->post('pelatihan');
		$tahun= $this->input->post('tahun');
		$penyelenggara= $this->input->post('penyelenggara');
		$nip=$this->input->post('nip');
		$nama=$this->input->post('nama');
	

		$file = $_FILES['sertifikat']['name'];
		$evaluasi = $_FILES['evaluasi']['name'];
		$kerja = $_FILES['kerja']['name'];
		$bukti = $_FILES['bukti']['name'];
		$this->session->set_flashdata('nip',$nip);
		$this->session->set_flashdata('nama_sdm',$nama);

		
		
		$this->form_validation->set_rules('pelatihan','Pelatihan','required');
		$this->form_validation->set_rules('tahun','Tahun','required');
		$this->form_validation->set_rules('penyelenggara','Penyelenggara','required');
		$config['upload_path'] = '././assets/sertifikat';
		$config['allowed_types'] = 'pdf';
		$config['max_size'] = 500000;
		//EndValidation
		if ($this->form_validation->run()==FALSE) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">  Pastikan semua data terisi dan sudah benar</div>');
			$this->load->view('InputPorto');
		}else{

			if($file == '' ){
				$file = '';
		}else{
			$this->load->library('upload', $config);
			
			if(!$this->upload->do_upload('sertifikat')){
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Upload sertifikat Gagal </div>');
				redirect('InputPorto');
				die;
			}else{
				$file = $this->upload->data('file_name');
			}
		}
		if($evaluasi == '' ){
			$evaluasi = '';
		}else{

			$this->load->library('upload', $config);
				
			if(!$this->upload->do_upload('evaluasi')){
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Upload sertifikat Gagal </div>');
				redirect('InputPorto');
				die;
			}else{
				$evaluasi = $this->upload->data('file_name');
			}									
		}
		if($kerja == '' ){
			$kerja = '';
		}else{

			$this->load->library('upload', $config);
				
			if(!$this->upload->do_upload('kerja')){
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Upload sertifikat Gagal </div>');
				redirect('InputPorto');
				die;
			}else{
				$kerja = $this->upload->data('file_name');
			}									
		}
		if($bukti == '' ){
			$bukti = '';
		}else{

			$this->load->library('upload', $config);
				
			if(!$this->upload->do_upload('bukti')){
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Upload sertifikat Gagal </div>');
				redirect('InputPorto');
				die;
			}else{
				$bukti = $this->upload->data('file_name');
			}									
		}

			$data = array(
				'nama_pelatihan'=>$pelatihan,
				'nip' => $nip,
				'tahun_pelatihan' => $tahun,
				'penyelenggara'=>$penyelenggara,
				'sertifikat'=>$file,
				'form_evaluasi'=>$evaluasi,
				'surat_kerja' =>$kerja,
				'bukti' =>$bukti
			);
				$this->m_data->tambah($data,'portofolio');
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">  Anda Berhasil Menambahkan Portofolio. Silahkan isi form dibawah apabila masih ada portofolio</div>');
				redirect('InputPorto');
		}
		
		}
			
			
			

		
	
}
