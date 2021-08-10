<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();	
		if (!$this->session->userdata('nama')) {
            redirect('login');
        }	
		$this->load->model('m_data');
		$this->load->helper('url');
	}

	public function hapus()
    {
        $id_user = $this->uri->segment(4);
        $this->m_data->hapus($id_user);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda berhasil menghapus toko </div>');
        redirect('dashboard');
	}

	public function edit(){
			$nama= $this->input->post('nama');
			$alamat= $this->input->post('alamat');
			$jadwal= $this->input->post('jadwal');
			$website= $this->input->post('website');
			$kontak= $this->input->post('kontak');
			$metode= $this->input->post('metode');
			$jenis= $this->input->post('jenis');
			$lat= $this->input->post('lat');
			$long= $this->input->post('long');
			$file = $_FILES['gambar']['name'];
			$lama = $this->input->post('gambar_lama');
			$deskripsi = $this->input->post('deskripsi');
			$id = $this->input->post('id');
	
			if($file == NULL){
				$file = $lama;
				$data = array(
					'nmtoko'=>$nama,
					'alamat' => $alamat,
					'jadwal' => $jadwal,
					'web' => $website,
					'jenis' => $jenis,
					'cp' => $kontak,
					'bayar' => $jenis,
					'lat' => $lat,
					'long'=> $long,
					'pic' => $file,
					'deskripsi' => $deskripsi
				);
				$where = array(
					'Uid' => $id
				);
				$this->m_data->edit($where, $data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">  Anda Berhasil Mengubah data Toko '.$nama.' </div>');
				redirect('dashboard/dashboard');
			}else{
				$config['upload_path'] = '././assets/img';
				$config['allowed_types'] = 'jpg|gif|png|jpeg';
				$config['max_size'] = 10000;
	
				$this->load->library('upload', $config);
				if(!$this->upload->do_upload('gambar')){
					echo 'upload gagal';
					echo '->'.$file;
					die;
				}else{
					$file = $this->upload->data('file_name');
				}
				$data = array(
					'nmtoko'=>$nama,
					'alamat' => $alamat,
					'jadwal' => $jadwal,
					'web' => $website,
					'jenis' => $jenis,
					'cp' => $kontak,
					'bayar' => $jenis,
					'lat' => $lat,
					'long'=> $long,
					'pic' => $file,
					'deskripsi' => $deskripsi
				);
				$where = array(
					'Uid' => $id
				);
				$this->m_data->edit($where, $data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">  Anda Berhasil Mengubah data Toko '.$nama.' </div>');
				redirect('dashboard/dashboard');
			}
	}
	

	public function index()
	{
		$toko = $this->m_data->tampil_data();
		$data['toko'] = $toko;
		$this->load->view('dashboard',$data);
	}
}
