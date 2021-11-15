<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InputSDM extends CI_Controller {

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
		$jlh=$this->m_data->tampil_data()->num_rows();
		$data['jlh'] = $jlh;
		$this->load->view('inputSDM',$data);
	}

	public function tambah_sdm(){
		$nama= $this->input->post('nama');
		$nip= $this->input->post('nip');
		$pendidikanTerakhir= $this->input->post('pendidikan-terakhir');
		$pangkat= $this->input->post('pangkat');
		$tmt_pangkat= $this->input->post('tmt_pangkat');
		$ttl= $this->input->post('ttl');
		$alamat= $this->input->post('alamat');
		$riwayat= $this->input->post('riwayat');
		$telepon_kantor= $this->input->post('telepon_kantor');
		$telepon= $this->input->post('telepon');
		$jk= $this->input->post('jk');
		$status= $this->input->post('status');

		$lspro=$this->input->post('lspro');
		$lit=$this->input->post('lit');
		$peng=$this->input->post('peng');
		$kal=$this->input->post('kal');

		
			$data = array(
				'nama'=>$nama,
				'nip' => $nip,
				'pangkat' => $pangkat,
				'tmt_pangkat' => $tmt_pangkat,
				'unit_kerja' => "Baristand Industri Bandar Lampung",
				'ttl' => $ttl,
				'jenis_kelamin' => $jk,
				'status' => $status,
				'alamat' => $alamat,
				'riwayat_jabatan' => $riwayat,
				'telepon_kantor' => $telepon_kantor,
				'telepon_rumah' => $telepon,

			);
			$data_pend = array(
				'nip' => $nip,
				'pendidikan' => $pendidikanTerakhir

			);
			//Validation
			if ($lspro==null&&$lit==null&&$peng==null&&$kal==null){
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">  Anda belum menambahkan lembaga. <br>silahkan pilih minimal 1 lembaga</div>');
				redirect('InputSDM');
			}

			$this->form_validation->set_rules('nama','Nama','required');
			$this->form_validation->set_rules('nip','NIP','required|exact_length[14]|numeric|callback_ceknip');
			$this->form_validation->set_rules('pendidikan-terakhir','Pendidikan Terakhir','required');
			//EndValidation
			if ($this->form_validation->run()==FALSE) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">  Pastikan semua data terisi dan sudah benar</div>');
				$this->load->view('inputSDM');
			}else{
				$this->m_data->tambah($data,'sdm');
				$this->m_data->tambahPendidikan($data_pend,'pd_terakhir');
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
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">  Anda Berhasil Menambahkan SDM Baru. '.$nama.' </div>');
				$this->session->set_flashdata('nip',$nip);
				$this->session->set_flashdata('nama_sdm',$nama);
				redirect('inputPorto');
			}
	}
	public function ceknip($nip)
	{
		$this->form_validation->set_message('ceknip','NIP Sudah terdaftar');
		if($this->m_data->ceknip($nip)){
			return true;
		}else{
			return false;
		}
	}
}
