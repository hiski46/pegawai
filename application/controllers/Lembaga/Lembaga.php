<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Element\Table;
use PhpOffice\PhpWord\TemplateProcessor;
use PhpOffice\PhpWord\SimpleType\TblWidth;
use PhpOffice\PhpWord\Writer\Word2007;


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
            $this->session->set_flashdata('foto','lspro.jpeg');
            $table='lspro';
            $table_jabatan='jabatan_lspro';
            
            $data['lembaga']=$this->m_data->tampil_data_lembaga($table)->result();
            //$data['jabatan']=$this->m_data->tampil_jabatan($table)->result();
            // $data['list_jabatan']=$this->m_data->tampil_jabatan($id,)->result();
            $this->load->view('Lembaga/lembaga', $data);
        }
        if ($id==2) {
            $this->session->set_flashdata('nama_lembaga','Lembaga Inspeksi Teknis (LIT)');
            $this->session->set_flashdata('foto','inspeksi.jpeg');
            $table='lit';
            $table_jabatan='jabatan_lit';
            
            $data['lembaga']=$this->m_data->tampil_data_lembaga($table)->result();
            //$data['jabatan']=$this->m_data->tampil_jabatan($table)->result();
            // $data['list_jabatan']=$this->m_data->tampil_jabatan($table_jabatan)->result();
            $this->load->view('Lembaga/lembaga', $data);
        }
        if ($id==3) {
            $this->session->set_flashdata('nama_lembaga','Laboratorium Pengujian');
            $this->session->set_flashdata('foto','labuji.jpeg');
            $table='lab_pengujian';
            $table_jabatan='jabatan_peng';
            
            $data['lembaga']=$this->m_data->tampil_data_lembaga($table)->result();
            //$data['jabatan']=$this->m_data->tampil_jabatan($table)->result();
            // $data['list_jabatan']=$this->m_data->tampil_jabatan($table_jabatan)->result();
            $this->load->view('Lembaga/lembaga', $data);
        }
        if ($id==4) {
            $this->session->set_flashdata('nama_lembaga','Laboratorium Kalibrasi');
            $this->session->set_flashdata('foto','kalibrasi.jpeg');
            $table='lab_kalibrasi';
            $table_jabatan='jabatan_kal';
            
            $data['lembaga']=$this->m_data->tampil_data_lembaga($table)->result();
            //$data['jabatan']=$this->m_data->tampil_jabatan($table)->result();
            // $data['list_jabatan']=$this->m_data->tampil_jabatan($table_jabatan)->result();
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

     public function tampil_jabatan($nip,$idlem)
     {
            $jabatan = $this->m_data->tampilJabatan($idlem, $nip, 'jabatan_sdm');
            return $jabatan->result();
     }
     public function tampil_ruang($nip,$idlem)
     {
            $jabatan = $this->m_data->tampilJabatan($idlem, $nip, 'ruang_linkup');
            return $jabatan->result();
     }
     public function tampil_kelompok($nip,$idlem)
     {
            $jabatan = $this->m_data->tampilJabatan($idlem, $nip, 'kel_produk');
            return $jabatan->result();
     }
     public function tampil_sub($nip,$idlem)
     {
            $jabatan = $this->m_data->tampilJabatan($idlem, $nip, 'sub_kel_produk');
            return $jabatan->result();
     }

     public function Cetak()
     {
        $nip=$this->uri->segment(4);
        $id=$this->uri->segment(5);
        $nama=$this->uri->segment(6);


        $sdm=$this->m_data->tampil_data_nip($nip)->result(); 
        $jabatan=$this->m_data->tampil_jabatan($id,$nip,'jabatan_sdm')->result();
        $riwayat_jabatan=$this->m_data->tampil_jabatan($id,$nip,'riwayat_jabatan')->result();
        $porto=$this->m_data->porto($nip)->result();
        $pendidikan=$this->m_data->tampilPendidikan($nip);
        $pengalaman = $this->m_data->tampil_Jabatan($id, $nip, 'pengalaman')->result();
        if($id==1){
            $phpWord = new TemplateProcessor('assets/template/lspro.docx');
            foreach ($sdm as $s){
                $phpWord->setValue('nama',$s->nama);
                $phpWord->setValue('nip',$s->nip);
                $phpWord->setValue('pangkat',$s->pangkat);
                $phpWord->setValue('tmt_pangkat',$s->tmt_pangkat);
                $phpWord->setValue('ttl',$s->ttl);
                $phpWord->setValue('jenis_kelamin',$s->jenis_kelamin);
                $phpWord->setValue('status',$s->status);
                $phpWord->setValue('alamat',$s->alamat);
                $phpWord->setValue('telepon_kantor',$s->telepon_kantor);
                $phpWord->setValue('telepon_rumah',$s->telepon_rumah);
            }
            foreach ($jabatan as $j){
                $phpWord->setValue('jabatan',$j->jabatan);
                $phpWord->setValue('tmt_jabatan',$j->tmt);
            }
            $list_Rjabatan=array();
            foreach ($riwayat_jabatan as $j){
                $isi=$j->tahun.' - '.$j->jabatan;
                array_push($list_Rjabatan, $isi);
            }
            $phpWord->setValue('riwayat_jabatan',implode("</w:t><w:br/><w:t>",$list_Rjabatan));
            $list_pendidikan = array();
            foreach ($pendidikan as $j){
                $isi=$j->tahun.' - '.$j->pendidikan;
                array_push($list_pendidikan, $isi); 
            }
            $phpWord->setValue('riwayat_pendidikan',implode("</w:t><w:br/><w:t>",$list_pendidikan));
            $list_pelatihan=array();
            foreach ($porto as $p){
                $isi=$p->nama_pelatihan.' ('.$p->penyelenggara.' tahun '.$p->tahun_pelatihan.')';
                array_push($list_pelatihan, $isi);
            }
            $phpWord->setValue('pelatihan',implode("</w:t><w:br/><w:t>",$list_pelatihan));
            $list_pengalaman =array();
            foreach($pengalaman as $pl){
                $isi=$pl->tahun.' - '.$pl->pengalaman;
                array_push($list_pengalaman, $isi);
            }
            $phpWord->setValue('pengalaman',implode("</w:t><w:br/><w:t>",$list_pengalaman));
    
            header("Content-type: application/msword");
            header("Content-Disposition: attachment; filename='".$nama."-lspro.docx'");
            $phpWord->saveAs('php://output');

            redirect("Lembaga/Lembaga/Salah_satu/".$id);
        }if($id==2){
            $phpWord = new TemplateProcessor('assets/template/inspeksi.docx');
            foreach ($sdm as $s){
                $phpWord->setValue('nama',$s->nama);
                $phpWord->setValue('nip',$s->nip);
                $phpWord->setValue('pangkat',$s->pangkat);
                $phpWord->setValue('tmt_pangkat',$s->tmt_pangkat);
                $phpWord->setValue('ttl',$s->ttl);
                $phpWord->setValue('jenis_kelamin',$s->jenis_kelamin);
                $phpWord->setValue('alamat',$s->alamat);
                $phpWord->setValue('telepon_kantor',$s->telepon_kantor);
                $phpWord->setValue('telepon_rumah',$s->telepon_rumah);
            }
            foreach ($jabatan as $j){
                $phpWord->setValue('jabatan',$j->jabatan);
                $phpWord->setValue('tmt_jabatan',$j->tmt);
            }
            $list_Rjabatan=array();
            foreach ($riwayat_jabatan as $j){
                $isi=$j->tahun.' - '.$j->jabatan;
                array_push($list_Rjabatan, $isi);
            }
            $phpWord->setValue('riwayat_jabatan',implode("</w:t><w:br/><w:t>",$list_Rjabatan));
            $list_pendidikan = array();
            foreach ($pendidikan as $j){
                $isi=$j->tahun.' - '.$j->pendidikan;
                array_push($list_pendidikan, $isi); 
            }
            $phpWord->setValue('riwayat_pendidikan',implode("</w:t><w:br/><w:t>",$list_pendidikan));
            $list_pelatihan=array();
            foreach ($porto as $p){
                $isi=$p->nama_pelatihan.' ('.$p->penyelenggara.' tahun '.$p->tahun_pelatihan.')';
                array_push($list_pelatihan, $isi);
            }
            $phpWord->setValue('pelatihan',implode("</w:t><w:br/><w:t>",$list_pelatihan));
            $list_pengalaman =array();
            foreach($pengalaman as $pl){
                $isi=$pl->tahun.' - '.$pl->pengalaman;
                array_push($list_pengalaman, $isi);
            }
            $phpWord->setValue('pengalaman',implode("</w:t><w:br/><w:t>",$list_pengalaman));
    
            header("Content-type: application/msword");
            header("Content-Disposition: attachment; filename='".$nama."-inspeksi.docx'");
            $phpWord->saveAs('php://output');

            redirect("Lembaga/Lembaga/Salah_satu/".$id);
        }if($id==3){
            $phpWord = new TemplateProcessor('assets/template/labuji.docx');
            foreach ($sdm as $s){
                $phpWord->setValue('nama',$s->nama);
                
            }
            foreach ($jabatan as $j){
                $phpWord->setValue('jabatan',$j->jabatan);
                $phpWord->setValue('tmt_jabatan',$j->tmt);
            }
            $list_pendidikan = array();
            foreach ($pendidikan as $j){
                $isi=$j->tahun.' - '.$j->pendidikan;
                array_push($list_pendidikan, $isi); 
            }
            $phpWord->setValue('riwayat_pendidikan',implode("</w:t><w:br/><w:t>",$list_pendidikan));
            $table = new Table(array('unit' => TblWidth::TWIP,'borderSize' => 6, 'borderColor' => '0000', 'cellMargin' => 80, 'align'=>'center' ));
            $n=0;
            $table->addRow();
            $table->addCell(150)->addText("NO.");
            $table->addCell(4000)->addText("Nama Pelatihan");
            $table->addCell(2000)->addText("Instansi");
            $table->addCell(3000)->addText("Tahun");
            
            foreach ($porto as $p){
                $table->addRow();
                $table->addCell()->addText(++$n);
                $table->addCell()->addText($p->nama_pelatihan);
                $table->addCell()->addText($p->penyelenggara);
                $table->addCell()->addText($p->tahun_pelatihan);
            }
            $list_pengalaman =array();
            foreach($pengalaman as $pl){
                $isi=$pl->tahun.' - '.$pl->pengalaman;
                array_push($list_pengalaman, $isi);
            }
            $phpWord->setValue('pengalaman',implode("</w:t><w:br/><w:t>",$list_pengalaman));
            $phpWord->setComplexBlock('{table}', $table);
            header("Content-type: application/msword");
            header("Content-Disposition: attachment; filename='".$nama."-lab_uji.docx'");
            $phpWord->saveAs('php://output');
            redirect("Lembaga/Lembaga/Salah_satu/".$id);
        }if($id==4){
            // kalibrasi
            $styleTable = array('borderSize' => 6, 'borderColor' => '006699', 'cellMargin' => 80);
            $styleFirstRow = array('borderBottomSize' => 18, 'borderBottomColor' => '0000FF', 'bgColor' => '66BBFF');
            $styleCell = array('valign' => 'center');
            $styleCellBTLR = array('valign' => 'center', 'textDirection' => \PhpOffice\PhpWord\Style\Cell::TEXT_DIR_BTLR);
            $fontStyle = array('bold' => false, 'align' => 'left');
            $table = new Table(array('unit' => TblWidth::TWIP,'borderSize' => 6, 'borderColor' => '0000', 'cellMargin' => 80, 'align'=>'center' ));
            $n=0;
            $table->addRow();
            $table->addCell(150)->addText("NO.");
            $table->addCell(4000)->addText("Nama Pelatihan");
            $table->addCell(2000)->addText("Tahun");
            $table->addCell(3000)->addText("Penyelenggara");
            $phpWord = new TemplateProcessor('assets/template/kalibrasi.docx');
            $list_pelatihan = array();
            foreach ($porto as $p){
                $table->addRow();
                $table->addCell()->addText(++$n);
                $table->addCell()->addText($p->nama_pelatihan);
                $table->addCell()->addText($p->tahun_pelatihan);
                $table->addCell()->addText($p->penyelenggara);
                $isi=$p->nama_pelatihan.' ('.$p->penyelenggara.' tahun '.$p->tahun_pelatihan.')';
                array_push($list_pelatihan, $isi);
            }
            $phpWord->setValue('pelatihan',implode("</w:t><w:br/><w:t>",$list_pelatihan));
            foreach ($sdm as $s){
                $phpWord->setValue('nama',$s->nama);
                $phpWord->setValue('nip',$s->nip);
                $phpWord->setValue('pangkat',$s->pangkat);
                $phpWord->setValue('tmt_pangkat',$s->tmt_pangkat);
                $phpWord->setValue('ttl',$s->ttl);
                $phpWord->setValue('jenis_kelamin',$s->jenis_kelamin);
                $phpWord->setValue('status',$s->status);
                $phpWord->setValue('alamat',$s->alamat);
                $phpWord->setValue('telepon_kantor',$s->telepon_kantor);
                $phpWord->setValue('telepon_rumah',$s->telepon_rumah);
            }
            foreach ($jabatan as $j){
                $phpWord->setValue('jabatan',$j->jabatan);
                $phpWord->setValue('tmt_jabatan',$j->tmt);
            }
            $list_Rjabatan=array();
            foreach ($riwayat_jabatan as $j){
                $isi=$j->tahun.' - '.$j->jabatan;
                array_push($list_Rjabatan, $isi);
            }
            $phpWord->setValue('riwayat_jabatan',implode("</w:t><w:br/><w:t>",$list_Rjabatan));
            
            $list_pendidikan = array();
            foreach ($pendidikan as $j){
                $isi=$j->tahun.' - '.$j->pendidikan;
                array_push($list_pendidikan, $isi); 
            }
            $phpWord->setValue('riwayat_pendidikan',implode("</w:t><w:br/><w:t>",$list_pendidikan));
            // $phpWord->setComplexValue('riwayat_pendidikan', $list_pendidikan);
            
            $list_pengalaman =array();
            foreach($pengalaman as $pl){
                $isi=$pl->tahun.' - '.$pl->pengalaman;
                array_push($list_pengalaman, $isi);
            }
            $phpWord->setValue('pengalaman',implode("</w:t><w:br/><w:t>",$list_pengalaman));
            
            $phpWord->setComplexBlock('{table}', $table);
            header("Content-type: application/msword");
            header("Content-Disposition: attachment; filename='".$nama."-kalibrasi.docx'");
            $phpWord->saveAs('php://output');
            redirect("Lembaga/Lembaga/Salah_satu/".$id);
        } 
     }
     
}
