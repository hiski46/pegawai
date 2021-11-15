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
            $table='lspro';
            $table_jabatan='jabatan_lspro';
            
            $data['lembaga']=$this->m_data->tampil_data_lembaga($table)->result();
            //$data['jabatan']=$this->m_data->tampil_jabatan($table)->result();
            // $data['list_jabatan']=$this->m_data->tampil_jabatan($id,)->result();
            $this->load->view('Lembaga/lembaga', $data);
        }
        if ($id==2) {
            $this->session->set_flashdata('nama_lembaga','Lembaga Inspeksi Teknis (LIT)');
            $table='lit';
            $table_jabatan='jabatan_lit';
            
            $data['lembaga']=$this->m_data->tampil_data_lembaga($table)->result();
            //$data['jabatan']=$this->m_data->tampil_jabatan($table)->result();
            // $data['list_jabatan']=$this->m_data->tampil_jabatan($table_jabatan)->result();
            $this->load->view('Lembaga/lembaga', $data);
        }
        if ($id==3) {
            $this->session->set_flashdata('nama_lembaga','Laboratorium Pengujian');
            $table='lab_pengujian';
            $table_jabatan='jabatan_peng';
            
            $data['lembaga']=$this->m_data->tampil_data_lembaga($table)->result();
            //$data['jabatan']=$this->m_data->tampil_jabatan($table)->result();
            // $data['list_jabatan']=$this->m_data->tampil_jabatan($table_jabatan)->result();
            $this->load->view('Lembaga/lembaga', $data);
        }
        if ($id==4) {
            $this->session->set_flashdata('nama_lembaga','Laboratorium Kalibrasi');
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

         $sdm=$this->m_data->tampil_data_nip($nip)->result();
         $nama=array();
         foreach ($sdm as $s){
             array_push($nama,$s->nama);
            }
        $Nama=implode('; ', $nama);
            
        $jabatan=$this->m_data->tampil_jabatan($id,$nip,'jabatan_sdm')->result();
        $jb=array();
        foreach ($jabatan as $j){
            array_push($jb,$j->jabatan);
           }
       $Jabatan=implode('; ', $jb);

       $porto=$this->m_data->porto($nip)->result();
       
         
        //  $phpWord = new PhpWord();
        //  $section = $phpWord->addSection();
        //  $section->addText($nip);
        //  $table = $section->addTable();
        // for ($row = 1; $row <= 8; $row++) { $table->addRow();
        //     for ($cell = 1; $cell <= 5; $cell++) { 
        //         $table->addCell(1750)->addText("Row {$row}, Cell {$cell}");
        //     }
        // } 
        //  $writer = new Word2007($phpWord);
         
        //  $filename = 'CV';
         
        //  header('Content-Type: application/msword');
        //  header('Content-Disposition: attachment;filename="'. $filename .'.docx"'); 
        //  header('Cache-Control: max-age=0');
         
        //  $writer->save('php://output');

        // $template=base_url("assets/template/lspro.rtf");
        // $document= file_get_contents($template);
        // $document = str_replace("#nip", $nip, $document);
        // $document = str_replace("#nama", $Nama, $document);
        // $document = str_replace("#jabatan", $Jabatan, $document);

        

        // header("Content-type: application/msword");
        // header("Content-disposition: inline; filename=CV.doc");
        // header("Content-length: ".strlen($document));

        // echo $document;

        $styleTable = array('borderSize' => 6, 'borderColor' => '006699', 'cellMargin' => 80);
        $styleFirstRow = array('borderBottomSize' => 18, 'borderBottomColor' => '0000FF', 'bgColor' => '66BBFF');
        $styleCell = array('valign' => 'center');
        $styleCellBTLR = array('valign' => 'center', 'textDirection' => \PhpOffice\PhpWord\Style\Cell::TEXT_DIR_BTLR);
        $fontStyle = array('bold' => true, 'align' => 'center');
        $table = new Table(array('unit' => TblWidth::TWIP,'borderSize' => 6, 'borderColor' => '0000', 'cellMargin' => 80, 'align'=>'center' ));
        $n=0;
        $table->addRow();
        $table->addCell()->addText("NO.");
        $table->addCell()->addText("Nama Pelatihan");
        $table->addCell()->addText("Tahun");
        $table->addCell()->addText("Penyelenggara");
        $phpWord = new TemplateProcessor('assets/template/kalibrasi.docx');
        foreach ($porto as $p){
            $table->addRow();
            $table->addCell()->addText(++$n);
            $table->addCell()->addText($p->nama_pelatihan);
            $table->addCell()->addText($p->tahun_pelatihan);
            $table->addCell()->addText($p->penyelenggara);
            $phpWord->setValue('pelatihan',$p->nama_pelatihan);
        }
        foreach ($sdm as $s){
            $phpWord->setValue('nama',$s->nama);
            $phpWord->setValue('nip',$s->nip);
            $phpWord->setValue('pangkat',$s->pangkat);
        }
        
        $phpWord->setComplexBlock('{table}', $table);
        header("Content-type: application/msword");
        header("Content-Disposition: attachment; filename='".$nip."-kalibrasi.docx'");
        $phpWord->saveAs('php://output');
        // $phpWord->saveAs('assets/template/template_with_table.docx');
        // echo $phpWord;



        redirect("Lembaga/Lembaga/Salah_satu/".$id);
     }
     
}
