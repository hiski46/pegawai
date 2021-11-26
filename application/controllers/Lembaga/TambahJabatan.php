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
    public function tampil_riwayat_jabatan($nip,$idlem)
    {
           $jabatan = $this->m_data->tampil_Jabatan($idlem, $nip, 'riwayat_jabatan');
           return $jabatan->result();
    }
    public function tampil_pengalaman($nip,$idlem)
    {
           $jabatan = $this->m_data->tampil_Jabatan($idlem, $nip, 'pengalaman');
           return $jabatan->result();
    }
    public function tampil_tugas($nip,$idlem)
    {
           $jabatan = $this->m_data->tampil_Jabatan($idlem, $nip, 'tugas');
           return $jabatan->result();
    }
    public function tampil_penjenjangan($nip,$idlem)
    {
           $jabatan = $this->m_data->tampil_Jabatan($idlem, $nip, 'penjenjangan');
           return $jabatan->result();
    }
    public function EditJabatan()
    {
        $nip=$this->input->post('nip');
		$id=$this->input->post('id');
        $idlem=$this->uri->segment(4);
        $nama=$this->input->post('nama');
		$jabatan=$this->input->post('r_jabatan');
		$tahun=$this->input->post('r_tahun');
		$where=array(
			'nip'=>$nip,
			'id'=>$id
		);
		$data=array(
			'jabatan'=>$jabatan,
			'tahun'=>$tahun
		);
		$this->m_data->UbahData($where, $data, 'riwayat_jabatan');
		redirect('Lembaga/TambahJabatan/menu/'.$nip.'/'.$idlem.'/'.$nama);
    }
    public function EditPengalaman()
    {
        $nip=$this->input->post('nip');
		$id=$this->input->post('id');
        $idlem=$this->uri->segment(4);
        $nama=$this->input->post('nama');
		$pengalaman=$this->input->post('pengalaman');
		$tahun=$this->input->post('r_tahun');
		$where=array(
			'nip'=>$nip,
			'id'=>$id
		);
		$data=array(
			'pengalaman'=>$pengalaman,
			'tahun'=>$tahun
		);
		$this->m_data->UbahData($where, $data, 'pengalaman');
		redirect('Lembaga/TambahJabatan/menu/'.$nip.'/'.$idlem.'/'.$nama);
    }
    public function EditTugas()
    {
        $nip=$this->input->post('nip');
		$id=$this->input->post('id');
        $idlem=$this->uri->segment(4);
        $nama=$this->input->post('nama');
		$tugas=$this->input->post('tugas');
		$jabatan=$this->input->post('jabatan');
		$where=array(
			'nip'=>$nip,
			'id'=>$id
		);
		$data=array(
			'tugas'=>$tugas,
			'jabatan'=>$jabatan
		);
		$this->m_data->UbahData($where, $data, 'tugas');
		redirect('Lembaga/TambahJabatan/menu/'.$nip.'/'.$idlem.'/'.$nama);
    }
    public function EditPenjenjangan()
    {
        $nip=$this->input->post('nip');
		$id=$this->input->post('id');
        $idlem=$this->uri->segment(4);
        $nama=$this->input->post('nama');
		$penjenjangan=$this->input->post('penjenjangan');
		$tahun=$this->input->post('tahun');
		$where=array(
			'nip'=>$nip,
			'id'=>$id
		);
		$data=array(
			'penjenjangan'=>$penjenjangan,
			'tahun'=>$tahun
		);
		$this->m_data->UbahData($where, $data, 'penjenjangan');
		redirect('Lembaga/TambahJabatan/menu/'.$nip.'/'.$idlem.'/'.$nama);
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
        $tmt=$this->input->post('tmt_jabatan');

        $data=array(
            'id_lembaga'=>$id,
            'nip'=>$nip,
            'jabatan'=>$jabatan,
            'tmt'=>$tmt
        );
        if($this->m_data->cekjabatan($data)==true){
            $this->m_data->tambahJabatan('jabatan_sdm',$data);
            redirect('Lembaga/TambahJabatan/menu/'.$nip.'/'.$id.'/'.$nama);
        }else{
            redirect('Lembaga/TambahJabatan/menu/'.$nip.'/'.$id.'/'.$nama);
        }
    }
    public function tambah_riwayat_jabatan()
    {
        $nip=$this->uri->segment(4);
        $id=$this->uri->segment(5);
        $nama=$this->uri->segment(6);
        $jabatan=$this->input->post('riwayat_jabatan');
        $tahun=$this->input->post('tahun_jabatan');
        $data=array(
            'id_lembaga'=>$id,
            'nip'=>$nip,
            'jabatan'=>$jabatan,
            'tahun'=>$tahun
        );
        $this->m_data->tambahJabatan('riwayat_jabatan',$data);
        redirect('Lembaga/TambahJabatan/menu/'.$nip.'/'.$id.'/'.$nama);
    }
    public function tambah_penjenjangan()
    {
        $nip=$this->uri->segment(4);
        $id=$this->uri->segment(5);
        $nama=$this->uri->segment(6);
        $penjenjangan=$this->input->post('penjenjangan');
        $tahun=$this->input->post('tahun');
        $data=array(
            'id_lembaga'=>$id,
            'nip'=>$nip,
            'penjenjangan'=>$penjenjangan,
            'tahun'=>$tahun
        );
        $this->m_data->tambahJabatan('penjenjangan',$data);
        redirect('Lembaga/TambahJabatan/menu/'.$nip.'/'.$id.'/'.$nama);
    }
    public function tambah_pengalaman()
    {
        $nip=$this->uri->segment(4);
        $id=$this->uri->segment(5);
        $nama=$this->uri->segment(6);
        $pengalaman=$this->input->post('pengalaman');
        $tahun=$this->input->post('tahun');
        $data=array(
            'id_lembaga'=>$id,
            'nip'=>$nip,
            'pengalaman'=>$pengalaman,
            'tahun'=>$tahun
        );
        $this->m_data->tambahJabatan('pengalaman',$data);
        redirect('Lembaga/TambahJabatan/menu/'.$nip.'/'.$id.'/'.$nama);
    }
    public function tambah_tugas()
    {
        $nip=$this->uri->segment(4);
        $id=$this->uri->segment(5);
        $nama=$this->uri->segment(6);
        $pengalaman=$this->input->post('tugas');
        $jabatan=$this->input->post('jabatan');
        $data=array(
            'id_lembaga'=>$id,
            'nip'=>$nip,
            'tugas'=>$pengalaman,
            'jabatan'=>$jabatan
        );
        $this->m_data->tambahJabatan('tugas',$data);
        redirect('Lembaga/TambahJabatan/menu/'.$nip.'/'.$id.'/'.$nama);
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
    public function hapusRiwayatJabatan()
    {
        $nip=$this->uri->segment(4);
        $id=$this->uri->segment(7);
        $idlem=$this->uri->segment(5);
        $nama=$this->uri->segment(6);
        $this->m_data->hapus_jabatan($id, 'riwayat_jabatan');
        redirect('Lembaga/TambahJabatan/menu/'.$nip.'/'.$idlem.'/'.$nama);
    }
    public function hapusPengalaman()
    {
        $nip=$this->uri->segment(4);
        $id=$this->uri->segment(7);
        $idlem=$this->uri->segment(5);
        $nama=$this->uri->segment(6);
        $this->m_data->hapus_jabatan($id, 'pengalaman');
        redirect('Lembaga/TambahJabatan/menu/'.$nip.'/'.$idlem.'/'.$nama);
    }
    public function hapusTugas()
    {
        $nip=$this->uri->segment(4);
        $id=$this->uri->segment(7);
        $idlem=$this->uri->segment(5);
        $nama=$this->uri->segment(6);
        $this->m_data->hapus_jabatan($id, 'tugas');
        redirect('Lembaga/TambahJabatan/menu/'.$nip.'/'.$idlem.'/'.$nama);
    }
    public function hapusPenjenjangan()
    {
        $nip=$this->uri->segment(4);
        $id=$this->uri->segment(7);
        $idlem=$this->uri->segment(5);
        $nama=$this->uri->segment(6);
        $this->m_data->hapus_jabatan($id, 'penjenjangan');
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
