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

        $data['semua']=$this->m_data->getDataPagination($config["per_page"], $data['page'])->result();
       
		$this->load->view('caridata', $data);
	}
    public function TampilCari()
    {
        $nip=$this->input->post('cari');

        $data['semua']=$this->m_data->CariSdm($nip);
        
		$this->load->view('hasilcaridata', $data);
    }
    public function portofolio($nip)
    {
        $porto = $this->m_data->Porto($nip);
        return $porto;
    }
}