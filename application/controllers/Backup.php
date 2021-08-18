<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backup extends CI_Controller {

	function __construct(){
		parent::__construct();	
		if (!$this->session->userdata('nama')) {
            redirect('login');
        }	
		$this->load->model('m_data');
		$this->load->helper('url');
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
	}

	public function index()
	{
		$backup =& $this->dbutil->backup();
        write_file('./database/database.sql', $backup); 
        force_download('mybackup.sql', $backup);
		$jlh=$this->m_data->tampil_data()->num_rows();
		$data['jlh'] = $jlh;
		$this->load->view('dashboard',$data);
	}


}
