<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();	
		$this->load->model('m_data');
 
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
		$where = array(
			'username' => $username,
			'password' => $password
		);
		$cek = $this->m_data->cek_login("admin", $where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
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
}
