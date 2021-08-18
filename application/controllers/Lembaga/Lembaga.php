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
        $this->CI = & get_instance();
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
            $table='lspro';
            $table_jabatan='jabatan_lspro';
            
            $data['lembaga']=$this->m_data->tampil_data_lembaga($table)->result();
            //$data['jabatan']=$this->m_data->tampil_jabatan($table)->result();
            $data['list_jabatan']=$this->m_data->tampil_jabatan($table_jabatan)->result();
            $this->load->view('Lembaga/lembaga', $data);
        }
        if ($id==2) {
            $this->session->set_flashdata('nama_lembaga','Lembaga Inspeksi Teknis (LIT)');
            $table='lit';
            $table_jabatan='jabatan_lit';
            
            $data['lembaga']=$this->m_data->tampil_data_lembaga($table)->result();
            //$data['jabatan']=$this->m_data->tampil_jabatan($table)->result();
            $data['list_jabatan']=$this->m_data->tampil_jabatan($table_jabatan)->result();
            $this->load->view('Lembaga/lembaga', $data);
        }
        if ($id==3) {
            $this->session->set_flashdata('nama_lembaga','Laboratorium Pengujian');
            $table='lab_pengujian';
            $table_jabatan='jabatan_peng';
            
            $data['lembaga']=$this->m_data->tampil_data_lembaga($table)->result();
            //$data['jabatan']=$this->m_data->tampil_jabatan($table)->result();
            $data['list_jabatan']=$this->m_data->tampil_jabatan($table_jabatan)->result();
            $this->load->view('Lembaga/lembaga', $data);
        }
        if ($id==4) {
            $this->session->set_flashdata('nama_lembaga','Laboratorium Kalibrasi');
            $table='lab_kalibrasi';
            $table_jabatan='jabatan_kal';
            
            $data['lembaga']=$this->m_data->tampil_data_lembaga($table)->result();
            //$data['jabatan']=$this->m_data->tampil_jabatan($table)->result();
            $data['list_jabatan']=$this->m_data->tampil_jabatan($table_jabatan)->result();
            $this->load->view('Lembaga/lembaga', $data);
        }
    }

    public function tambah_jabatan()
    {
        $id=$this->uri->segment(4);
        $nip = $this->input->post('nip');
        $tambah_jabatan= $_POST['jabatan'];
        if ($id==1) {
            $this->session->set_flashdata('nama_lembaga','Lembaga Sertifikasi Produk (LSPRO)');
            $table='lspro';
            $table_jabatan='jabatan_lspro';
            $data['lembaga']=$this->m_data->tampil_data_lembaga($table)->result();
            //$data['jabatan']=$this->m_data->tampil_jabatan($table_jabatan)->result();
            $ruang=$this->input->post('ruang_lingkup');
            $kel=$this->input->post('kel_produk');
            $sub_kel=$this->input->post('sub_kel_produk');
            foreach($tambah_jabatan as $t){
                $data_jabatan = array(
                    'id_lembaga' => $id,
                    'nip' => $nip,
                    'jabatan' => $t,
                    'ruang_lingkup' => $ruang,
                    'kel_produk' => $kel,
                    'sub_kel_produk' => $sub_kel
                );
                if($this->m_data->cek_jabatan($table,$nip,$t)==TRUE){
                    if($t!=null){
                        $this->m_data->tambahJabatan($table, $data_jabatan );
                    }
                }else{
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Jabatan Tidak Ditambahkan. Jabatan '.$t.' sudah ada untuk nip ='.$nip.' </div>');
                }
            }
            // $this->m_data->hapus_lembaga_kosong($table);
            redirect("Lembaga/Lembaga/Salah_satu/".$id);
        }
        if ($id==2) {
            $this->session->set_flashdata('nama_lembaga','Lembaga Inspeksi Teknis (LIT)');
            $table='lit';
            $table_jabatan='jabatan_lit';
            $data['lembaga']=$this->m_data->tampil_data_lembaga($table)->result();
            //$data['jabatan']=$this->m_data->tampil_jabatan($table_jabatan)->result();
            $ruang=$this->input->post('ruang_lingkup');
            $kel=$this->input->post('kel_produk');
            $sub_kel=$this->input->post('sub_kel_produk');
            foreach($tambah_jabatan as $t){
                $data_jabatan = array(
                    'id_lembaga' => $id,
                    'nip' => $nip,
                    'jabatan' => $t,
                    'ruang_lingkup' => $ruang,
                    'kel_produk' => $kel,
                    'sub_kel_produk' => $sub_kel
                );
                if($this->m_data->cek_jabatan($table,$nip,$t)==TRUE){
                    if($t!=null){
                        $this->m_data->tambahJabatan($table, $data_jabatan );
                    }
                }else{
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Jabatan Tidak Ditambahkan. Jabatan '.$t.' sudah ada untuk nip ='.$nip.' </div>');
                }
            }
            // $this->m_data->hapus_lembaga_kosong($table);
            redirect("Lembaga/Lembaga/Salah_satu/".$id);
        }
        if ($id==3) {
            $this->session->set_flashdata('nama_lembaga','Laboratorium Pengujian');
            $table='lab_pengujian';
            $table_jabatan='jabatan_peng';
            $data['lembaga']=$this->m_data->tampil_data_lembaga($table)->result();
            //$data['jabatan']=$this->m_data->tampil_jabatan($table_jabatan)->result();
            $ruang=$this->input->post('ruang_lingkup');
            $kel=$this->input->post('kel_produk');
            $sub_kel=$this->input->post('sub_kel_produk');
            foreach($tambah_jabatan as $t){
                $data_jabatan = array(
                    'id_lembaga' => $id,
                    'nip' => $nip,
                    'jabatan' => $t,
                    'ruang_lingkup' => $ruang,
                    'kel_produk' => $kel,
                    'sub_kel_produk' => $sub_kel
                );
                if($this->m_data->cek_jabatan($table,$nip,$t)==TRUE){
                    if($t!=null){
                        $this->m_data->tambahJabatan($table, $data_jabatan );
                    }
                }else{
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Jabatan Tidak Ditambahkan. Jabatan '.$t.' sudah ada untuk nip ='.$nip.' </div>');
                }
            }
            // $this->m_data->hapus_lembaga_kosong($table);
            redirect("Lembaga/Lembaga/Salah_satu/".$id);
        }
        if ($id==4) {
            $this->session->set_flashdata('nama_lembaga','Laboratorium Kalibrasi');
            $table='lab_kalibrasi';
            $table_jabatan='jabatan_kal';
            $data['lembaga']=$this->m_data->tampil_data_lembaga($table)->result();
            //$data['jabatan']=$this->m_data->tampil_jabatan($table_jabatan)->result();
            $ruang=$this->input->post('ruang_lingkup');
            $kel=$this->input->post('kel_produk');
            $sub_kel=$this->input->post('sub_kel_produk');
            foreach($tambah_jabatan as $t){
                $data_jabatan = array(
                    'id_lembaga' => $id,
                    'nip' => $nip,
                    'jabatan' => $t,
                    'ruang_lingkup' => $ruang,
                    'kel_produk' => $kel,
                    'sub_kel_produk' => $sub_kel
                );
                if($this->m_data->cek_jabatan($table,$nip,$t)==TRUE){
                    if($t!=null){
                        $this->m_data->tambahJabatan($table, $data_jabatan );
                    }
                }else{
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Jabatan Tidak Ditambahkan. Jabatan '.$t.' sudah ada untuk nip ='.$nip.' </div>');
                }
            }
            // $this->m_data->hapus_lembaga_kosong($table);
            redirect("Lembaga/Lembaga/Salah_satu/".$id);
        }
    }
     public function hapus_jabatan()
     {
        $id=$this->uri->segment(4);
        $nip=$this->uri->segment(5);
        $jabatan=$this->uri->segment(6);
        if ($id==1) {
            $this->session->set_flashdata('nama_lembaga','Lembaga Sertifikasi Produk (LSPRO)');
            $table='lspro';
            $this->m_data->hapus_jabatan($table,$nip,$jabatan);
            redirect("Lembaga/Lembaga/Salah_satu/".$id);
        }
        if ($id==2) {
            $this->session->set_flashdata('nama_lembaga','Lembaga Inspeksi Teknis (LIT)');
            $table='lit';
            $this->m_data->hapus_jabatan($table,$nip,$jabatan);
            redirect("Lembaga/Lembaga/Salah_satu/".$id);
        }
        if ($id==3) {
            $this->session->set_flashdata('nama_lembaga','Laboratorium Pengujian');
            $table='lab_pengujian';
            $this->m_data->hapus_jabatan($table,$nip,$jabatan);
            redirect("Lembaga/Lembaga/Salah_satu/".$id);
        }
        if ($id==4) {
            $this->session->set_flashdata('nama_lembaga','Laboratorium Kalibrasi');
            $table='lab_kalibrasi';
            $this->m_data->hapus_jabatan($table,$nip,$jabatan);
            redirect("Lembaga/Lembaga/Salah_satu/".$id);
        }
     }

     public function tampil_jabatan($nip)
     {
       
        $id=$this->uri->segment(4);
        
        if ($id==1) {
            $table='lspro';
            $jabatan = $this->m_data->tampilJabatan($table, $nip);
            return $jabatan->result();
        }
        if ($id==2) {
            $this->session->set_flashdata('nama_lembaga','Lembaga Inspeksi Teknis (LIT)');
            $table='lit';
            $jabatan = $this->m_data->tampilJabatan($table, $nip);
            return $jabatan->result();
        }
        if ($id==3) {
            $this->session->set_flashdata('nama_lembaga','Laboratorium Pengujian');
            $table='lab_pengujian';
            $jabatan = $this->m_data->tampilJabatan($table, $nip);
            return $jabatan->result();
        }
        if ($id==4) {
            $this->session->set_flashdata('nama_lembaga','Laboratorium Kalibrasi');
            $table='lab_kalibrasi';
            $jabatan = $this->m_data->tampilJabatan($table, $nip);
            return $jabatan->result();
        }
     }
     
}
