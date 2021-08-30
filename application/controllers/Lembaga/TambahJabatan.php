<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TambahJabatan extends CI_Controller {

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
		$this->load->view('tambah_jabatan');
	}

    public function menu()
	{
        $nama=$this->uri->segment(6);
        $id=$this->uri->segment(5);
        $nip=$this->uri->segment(4);
        $data['nama']=$nama;
        $data['idlem']=$id;
        $data['nip']=$nip;
       
        if ($id==1) {
            // $this->session->set_flashdata('nama_lembaga','Lembaga Sertifikasi Produk (LSPRO)');
            // $table='lspro';
            // $table_jabatan='jabatan_lspro';
            
            // $data['lembaga']=$this->m_data->tampil_data_lembaga($table)->result();
            //$data['jabatan']=$this->m_data->tampil_jabatan($table)->result();
            // $data['list_jabatan']=$this->m_data->tampil_jabatan($table_jabatan)->result();
            // $this->load->view('Lembaga/lembaga', $data);
            $data['lem']="Lembaga Sertifikasi Produk (LSPRO)";
        }
        if ($id==2) {
            // $this->session->set_flashdata('nama_lembaga','Lembaga Inspeksi Teknis (LIT)');
            // $table='lit';
            // $table_jabatan='jabatan_lit';
            
            // $data['lembaga']=$this->m_data->tampil_data_lembaga($table)->result();
            // //$data['jabatan']=$this->m_data->tampil_jabatan($table)->result();
            // $data['list_jabatan']=$this->m_data->tampil_jabatan($table_jabatan)->result();
            // $this->load->view('Lembaga/lembaga', $data);
            $data['lem']="Lembaga Inspeksi Teknis (LIT)";
        }
        if ($id==3) {
            // $this->session->set_flashdata('nama_lembaga','Laboratorium Pengujian');
            // $table='lab_pengujian';
            // $table_jabatan='jabatan_peng';
            
            // $data['lembaga']=$this->m_data->tampil_data_lembaga($table)->result();
            // //$data['jabatan']=$this->m_data->tampil_jabatan($table)->result();
            // $data['list_jabatan']=$this->m_data->tampil_jabatan($table_jabatan)->result();
            // $this->load->view('Lembaga/lembaga', $data);
            $data['lem']="Laboratorium Pengujian";
        }
        if ($id==4) {
            // $this->session->set_flashdata('nama_lembaga','Laboratorium Kalibrasi');
            // $table='lab_kalibrasi';
            // $table_jabatan='jabatan_kal';
            
            // $data['lembaga']=$this->m_data->tampil_data_lembaga($table)->result();
            // //$data['jabatan']=$this->m_data->tampil_jabatan($table)->result();
            // $data['list_jabatan']=$this->m_data->tampil_jabatan($table_jabatan)->result();
            // $this->load->view('Lembaga/lembaga', $data);
            $data['lem']="Laboratorium Kalibrasi";
        }

		$this->load->view('lembaga/tambah_jabatan',$data);
	}
    public function tampil_jabatan($nip,$idlem)
    {
           $jabatan = $this->m_data->tampil_Jabatan($idlem, $nip, 'jabatan_sdm');
           return $jabatan->result();
    }
    public function jabatan_all()
    {
        $id=$this->uri->segment(5);
        if ($id==1) {
           $table='jabatan_lspro';
           $jabatan = $this->m_data->jabatan_all($table);
           
        }
        if ($id==2) {
            $table='jabatan_lit';
            $jabatan = $this->m_data->jabatan_all($table);
        }
        if ($id==3) {
            $table='jabatan_peng';
            $jabatan = $this->m_data->jabatan_all($table);
        }
        if ($id==4) {
            $table='jabatan_kal';
            $jabatan = $this->m_data->jabatan_all($table);
        }
        return $jabatan->result();
    }

    public function tambah()
    {
        $nip=$this->uri->segment(4);
        $id=$this->uri->segment(5);
        $nama=$this->uri->segment(6);
        $jabatan=$this->input->post('jabatan');
        $data=array(
            'id_lembaga'=>$id,
            'nip'=>$nip,
            'jabatan'=>$jabatan
        );
        if($this->m_data->cekjabatan($data)==true){
            $this->m_data->tambahJabatan('jabatan_sdm',$data);
            redirect('Lembaga/TambahJabatan/menu/'.$nip.'/'.$id.'/'.$nama);
        }else{
            redirect('Lembaga/TambahJabatan/menu/'.$nip.'/'.$id.'/'.$nama);
        }
    }
    public function hapusJabatan()
    {
        $nip=$this->uri->segment(4);
        $id=$this->uri->segment(7);
        $idlem=$this->uri->segment(5);
        $nama=$this->uri->segment(6);
        $this->m_data->hapus_jabatan($id, 'jabatan_sdm');
        redirect('Lembaga/TambahJabatan/menu/'.$nip.'/'.$idlem.'/'.$nama);
    }

    public function tambahRuangLingkup()
    {
        $nip=$this->uri->segment(4);
        $id=$this->uri->segment(5);
        $nama=$this->uri->segment(6);
        $ruang=$this->input->post('ruang');
        $data=array(
            'id_lembaga'=>$id,
            'nip'=>$nip,
            'ruang_lingkup'=>$ruang
        );
        
            $this->m_data->tambahJabatan('ruang_linkup',$data);
            redirect('Lembaga/TambahJabatan/menu/'.$nip.'/'.$id.'/'.$nama);
        
    }
    public function tampilruang($idlem,$nip)
    {
        
            $ruang = $this->m_data->tampilkan($idlem,$nip,'ruang_linkup');
            return $ruang->result();
        
    }
    public function hapusRuang()
    {
        $nip=$this->uri->segment(4);
        $id=$this->uri->segment(7);
        $idlem=$this->uri->segment(5);
        $nama=$this->uri->segment(6);
        $this->m_data->hapus_jabatan($id, 'ruang_linkup');
        redirect('Lembaga/TambahJabatan/menu/'.$nip.'/'.$idlem.'/'.$nama);
    }
    public function tampilKelompok($idlem,$nip)
    {
        
            $ruang = $this->m_data->tampilkan($idlem,$nip,'kel_produk');
            return $ruang->result();
        
    }
    public function hapusKelompok()
    {
        $nip=$this->uri->segment(4);
        $id=$this->uri->segment(7);
        $idlem=$this->uri->segment(5);
        $nama=$this->uri->segment(6);
        $this->m_data->hapus_jabatan($id, 'kel_produk');
        redirect('Lembaga/TambahJabatan/menu/'.$nip.'/'.$idlem.'/'.$nama);
    }
    public function tambahKelompok()
    {
        $nip=$this->uri->segment(4);
        $id=$this->uri->segment(5);
        $nama=$this->uri->segment(6);
        $ruang=$this->input->post('kelompok');
        $data=array(
            'id_lembaga'=>$id,
            'nip'=>$nip,
            'kel_produk'=>$ruang
        );
        
            $this->m_data->tambahJabatan('kel_produk',$data);
            redirect('Lembaga/TambahJabatan/menu/'.$nip.'/'.$id.'/'.$nama);
        
    }
    public function tampilSub($idlem,$nip)
    {
        
            $ruang = $this->m_data->tampilkan($idlem,$nip,'sub_kel_produk');
            return $ruang->result();
        
    }
    public function hapusSub()
    {
        $nip=$this->uri->segment(4);
        $id=$this->uri->segment(7);
        $idlem=$this->uri->segment(5);
        $nama=$this->uri->segment(6);
        $this->m_data->hapus_jabatan($id, 'sub_kel_produk');
        redirect('Lembaga/TambahJabatan/menu/'.$nip.'/'.$idlem.'/'.$nama);
    }
    public function tambahSub()
    {
        $nip=$this->uri->segment(4);
        $id=$this->uri->segment(5);
        $nama=$this->uri->segment(6);
        $ruang=$this->input->post('sub');
        $data=array(
            'id_lembaga'=>$id,
            'nip'=>$nip,
            'sub_kel_produk'=>$ruang
        );
        
            $this->m_data->tambahJabatan('sub_kel_produk',$data);
            redirect('Lembaga/TambahJabatan/menu/'.$nip.'/'.$id.'/'.$nama);
        
    }
}
