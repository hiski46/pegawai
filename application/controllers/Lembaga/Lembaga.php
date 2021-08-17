<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lembaga extends CI_Controller {

	function __construct(){
		parent::__construct();	
		if (!$this->session->userdata('nama')) {
            redirect('login');
        }	
		$this->load->model('m_data');
		$this->load->helper('url');
	}



	public function index()
	{
        $this->load->view('Lembaga/lembaga');
	}

    public function Salah_satu()
    {
        $id=$this->uri->segment(4);
        if ($id==1) {
            $this->session->set_flashdata('nama_lembaga','Lembaga Sertifikasi Produk (LSPRO)');
            $this->load->view('Lembaga/lembaga');
        }
        if ($id==2) {
            $this->session->set_flashdata('nama_lembaga','Lembaga Inspeksi Teknis (LIT)');
            $this->load->view('Lembaga/lembaga');
        }
        if ($id==3) {
            $this->session->set_flashdata('nama_lembaga','Laboratorium Pengujian');
            $this->load->view('Lembaga/lembaga');
        }
        if ($id==4) {
            $this->session->set_flashdata('nama_lembaga','Laboratorium Kalibrasi');
            $this->load->view('Lembaga/lembaga');
        }
    }
}
