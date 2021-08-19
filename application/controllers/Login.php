<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();	
		$this->load->model('m_login');
		$this->CI = & get_instance();
		$this->load->dbutil();
 
	}
	public function index()
	{
		if ($this->session->userdata('nama')) {
            redirect('dashboard');
        }
		$this->load->view('login');
		
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$db_name = $this->input->post('db');
		$where = array(
			'username' => $username,
			'password' => $password
		);
		$cek = $this->m_login->cek_login("admin", $where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login",
				'database'=> $db_name
			);
			
			$this->session->set_userdata($data_session);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Login Berhasil</div>');

			redirect(base_url("dashboard"));
		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username atau Password Salah</div>');
			redirect('login');
		}
	}
	function logout(){
		$this->session->unset_userdata('nama');
        $this->session->unset_userdata('password');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">  Anda Berhasil Logout </div>');
		redirect(base_url('login'));
	}

	public function cekDb()
	{
		$dbs = $this->dbutil->list_databases();
		
		return $dbs;
	}
}
