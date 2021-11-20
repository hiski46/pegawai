<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require('./application/third_party/vendor/autoload.php');
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
use \PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\Style\Border;

class Rekap extends CI_Controller {

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
        $perpage = 10;
        
        
        $config['base_url']=base_url('index.php/rekap/index/');
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
        $jlh=$this->m_data->tampil_data()->num_rows();
		$data['jlh'] = $jlh;
        $data['semua']=$this->m_data->getDataPagination($config["per_page"], $data['page'])->result();
       
		$this->load->view('rekap', $data);
	}
    public function portofolio($nip)
    {
        $porto = $this->m_data->Porto($nip);
        return $porto;
    }
    public function tampilPendidikan($nip)
    {
        $pd = $this->m_data->tampilPendidikan($nip);
        return $pd;
    }

    public function cekLembaga($nip){
        $a = array();
        if ($this->m_data->ceklspro($nip)==FALSE) {
            array_push($a,'Lembaga Sertifikasi Produk (LSPRO)');
        }
        if ($this->m_data->ceklit($nip)==FALSE) {
            array_push($a,'Lembaga Inspeksi Teknis');
        }
        if ($this->m_data->cekpeng($nip)==FALSE) {
            array_push($a,'Laboratorium Pengujian');
        }
        if ($this->m_data->cekkal($nip)==FALSE) {
            array_push($a,'Laboratorium Kalibrasi');
        }
        return $a;
    }
    public function Excel()
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $styleArray = array(
            'borders' => array(
                'allBorders' => array(
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN
                ),
            ),
        );
        $sheet->getStyle('A3:G3')->applyFromArray($styleArray);
        $sheet->mergeCells('A1:G1');
        $sheet->getStyle('A')->getAlignment()->setHorizontal('center');
        $sheet->setCellValue('A1', 'Data personil Lembaga Penilai Kesesuaian (LPK) Baristand Industri Bandar Lampung');
        $sheet->setCellValue('A3', 'No');
        $sheet->setCellValue('B3', 'NIP');
        $sheet->setCellValue('C3', 'Nama');
        $sheet->setCellValue('D3', 'Pendidikan Terakhir');
        $sheet->setCellValue('E3', 'Portofolio');
        $sheet->setCellValue('F3', 'Tahun');
        $sheet->setCellValue('G3', 'Lembaga');
        $sheet->getStyle("A3:G3")->getFont()->setBold( true );
        $sheet->getStyle("A1")->getFont()->setBold( true );
        
        $sdm=$this->m_data->tampil_data()->result();
        $no = 1;
        $x=4;
        foreach($sdm as $row){
            $sheet->setCellValue('A'.$x, $no++);
            $sheet->setCellValue('B'.$x, $row->nip);
            $sheet->getStyle('B'.$x)->getNumberFormat()->setFormatCode('##############');
            $sheet->setCellValue('C'.$x, $row->nama);
            $tampil_pd= $this->m_data->tampilPendidikan($row->nip);
            $pendidikan=array();
            foreach ($tampil_pd as $pd){
                array_push($pendidikan, $pd->pendidikan);
            }
        
            $stringPendidikan=implode(PHP_EOL,$pendidikan);
           
            $sheet->setCellValue('D'.$x, $stringPendidikan);
            $porto = $this->m_data->Porto($row->nip)->result();
            $nama_pelatihan=array();
            $tahun_pelatihan=array();
            foreach ($porto as $p) {
                array_push($nama_pelatihan, $p->nama_pelatihan);
                array_push($tahun_pelatihan, $p->tahun_pelatihan);
            }
            $string_nama_pelatihan = implode(PHP_EOL, $nama_pelatihan);
            $string_tahun_pelatihan = implode(PHP_EOL, $tahun_pelatihan);
            $sheet->setCellValue('E'.$x, $string_nama_pelatihan);
            $sheet->setCellValue('F'.$x, $string_tahun_pelatihan);
            $lembaga=$this->cekLembaga($row->nip);
            $string_lembaga=implode(PHP_EOL, $lembaga);
            $sheet->setCellValue('G'.$x, $string_lembaga);
            $sheet->getStyle('A'.$x.':G'.$x)->getAlignment()->setWrapText(true);
            $sheet->getStyle('A'.$x.':G'.$x)->getAlignment()->setVertical('center');
            $sheet->getStyle('A'.$x.':G'.$x)->applyFromArray($styleArray);
            $x++;    
        }
        foreach (range('A','G') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
            
         }
        $writer = new Xlsx($spreadsheet);
        $filename = 'data_pegawai';
        
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
        redirect('Rekap');

    }
    
}