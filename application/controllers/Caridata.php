<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caridata extends CI_Controller {

	function __construct(){
		parent::__construct();	
		if (!$this->session->userdata('nama')) {
            redirect('login');
        }	
		$this->load->model('m_data');
		$this->load->helper('url');
        $this->load->library('pagination');
        $this->CI = & get_instance();
	}

	

	public function index($num='')
	{   
        $perpage = 5;
        
        
        $config['base_url']=base_url('index.php/caridata/index/');
        $config['total_rows']=$this->m_data->tampil_data()->num_rows();
        $config['per_page']=$perpage;
        $config['uri_segment']=3;
        $choice=$config['total_rows']/$config['per_page'];
        $config['num_links']=2;

        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = '>';
        $config['prev_link']        = '<';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination pagination-sm justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item "><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item  active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item "><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item "><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item "><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item "><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $jlh=$this->m_data->tampil_data()->num_rows();
		$data['jlh'] = $jlh;
        $data['semua']=$this->m_data->getDataPagination($config["per_page"], $data['page'])->result();
       
		$this->load->view('caridata', $data);
	}
    public function TampilCari()
    {
        $nip=$this->input->post('cari');

        $data['semua']=$this->m_data->CariSdm($nip);
        if ($nip==NULL) {
            redirect('Caridata#formCari');
        }
        $jlh=$this->m_data->tampil_data()->num_rows();
		$data['jlh'] = $jlh;
		$this->load->view('hasilcaridata', $data);
    }
    public function cekLembaga($nip){
        $a = array();
        if ($this->m_data->ceklspro($nip)==FALSE) {
            array_push($a,'Lembaga Sertifikasi Produk (LSPRO)');
        }
        if ($this->m_data->ceklit($nip)==FALSE) {
            array_push($a,'Lembaga Inspeksi Teknis');
        }
        if ($this->m_data->cekpeng($nip)==FALSE) {
            array_push($a,'Laboratorium Pengujian');
        }
        if ($this->m_data->cekkal($nip)==FALSE) {
            array_push($a,'Laboratorium Kalibrasi');
        }
        return $a;
    }
    public function portofolio($nip)
    {
        $porto = $this->m_data->Porto($nip);
        return $porto;
    }
    public function HapusSdm(){
        $nip=$this->uri->segment(3);
        $nama=$this->uri->segment(4);
        
        $this->m_data->hapuslspro($nip);
        $this->m_data->hapuslit($nip);
        $this->m_data->hapuspeng($nip);
        $this->m_data->hapuskal($nip);
        $this->m_data->hapusPor($nip);
        $this->m_data->hapusSdm($nip);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> '.$nama.' Sudah dihapus</div>');
        redirect('Caridata#formCari');
    }
    public function DetailSdm()
    {
        $nip=$this->uri->segment(3);
		$sdm=$this->m_data->TampilSdm($nip);
		$data['sdm'] = $sdm;
		$this->load->view('detailsdm',$data);
    }
}