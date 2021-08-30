<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailSdm extends CI_Controller {

	function __construct(){
		parent::__construct();	
		if (!$this->session->userdata('nama')) {
            redirect('login');
        }	
		$this->load->model('m_data');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}


	public function index()
	{
        
		$this->load->view('detailsdm');
	}

	public function UbahNama()
	{
		$nama=$this->input->post('nama');
		$nip=$this->input->post('nip');
		$nm = array('nama' => $nama );
		$where  = array('nip' => $nip );
		$this->m_data->UbahNama($where,$nm);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Nama Sudah Diubah</div>');
		redirect('Caridata/DetailSdm/'.$nip);
	}

	public function UbahPen()
	{
		$nip=$this->input->post('nip');
		$pen=$this->input->post('pen');
		$this->m_data->UbahPen($nip,$pen);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Pendidikan Terakhir Sudah Diubah</div>');
		redirect('Caridata/DetailSdm/'.$nip);
	}
	public function UbahLem()
	{
		$nip=$this->input->post('nip');
		$lspro=$this->input->post('lspro');
		$lit=$this->input->post('lit');
		$peng=$this->input->post('peng');
		$kal=$this->input->post('kal');

		if ($lspro==NULL&& $lit==NULL && $kal==NULL && $peng==NULL) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Data Lembaga Tidak Diubah. Anda belum memilih salah satu lembaga</div>');
			redirect('Caridata/DetailSdm/'.$nip);
		}else{

			$this->Hapus_Lem($nip);
				if ($lspro != null) {
					$this->m_data->tambahLembaga('lspro',1,$nip);
				}
				if ($lit != null) {
					$this->m_data->tambahLembaga('lit',2,$nip);
				}
				if ($peng != null) {
					$this->m_data->tambahLembaga('lab_pengujian',3,$nip);
				}
				if ($kal != null) {
					$this->m_data->tambahLembaga('lab_kalibrasi',4,$nip);
				}
				$this->session->set_flashdata('message', '<div class="alert alert-success role="alert"> Data Lembaga Berhasil Diubah. </div>');
				redirect('Caridata/DetailSdm/'.$nip);
		}
	}

	public function Hapus_Lem($nip)
	{
		$this->m_data->hapuslspro($nip);
		$this->m_data->hapuslit($nip);
		$this->m_data->hapuspeng($nip);
		$this->m_data->hapuskal($nip);
	}

	public function Edit_porto()
	{
		$id=$this->uri->segment(3);
		$nip=$this->input->post('nip');
		$pelatihan=$this->input->post('pelatihan');
		$tahun=$this->input->post('tahun');
		$penye=$this->input->post('penyelenggara');
		$serti_lama=$this->input->post('sertifikat-lama');
		$eval_lama=$this->input->post('eval-lama');
		$kerja_lama=$this->input->post('kerja-lama');

		$file = $_FILES['sertifikat-baru']['name'];
		$evaluasi = $_FILES['evaluasi-baru']['name'];
		$kerja = $_FILES['kerja-baru']['name'];
		

		
		
		$this->form_validation->set_rules('pelatihan','Pelatihan','required');
		$this->form_validation->set_rules('tahun','Tahun','required');
		$this->form_validation->set_rules('penyelenggara','Penyelenggara','required');
		//EndValidation
		$config['upload_path'] = '././assets/sertifikat';
			$config['allowed_types'] = 'pdf';
			$config['max_size'] = 500000;
		if ($this->form_validation->run()==FALSE) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">  Pastikan semua data terisi dan sudah benar</div>');
			redirect('Caridata/DetailSdm/'.$nip);
		}else{

			if($file == '' ){
				$file=$serti_lama;
		}else{
			

			$this->load->library('upload', $config);
			
			if(!$this->upload->do_upload('sertifikat-baru')){
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Upload sertifikat Gagal </div>');
				redirect('InputPorto');
				die;
			}else{
				$file = $this->upload->data('file_name');
			}
		}
		if($evaluasi == '' ){
			$evaluasi=$eval_lama;
		}else{
			

			$this->load->library('upload', $config);
				
			if(!$this->upload->do_upload('evaluasi-baru')){
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Upload Evaluasi Gagal </div>');
				redirect('InputPorto');
				die;
			}else{
				$evaluasi = $this->upload->data('file_name');
			}									
		}
		if($kerja == '' ){
			$kerja=$kerja_lama;
		}else{
			

			$this->load->library('upload', $config);
				
			if(!$this->upload->do_upload('kerja-baru')){
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Upload Surat Kerja Gagal </div>');
				redirect('InputPorto');
				die;
			}else{
				$kerja = $this->upload->data('file_name');
			}									
		}

			$data = array(
				'nama_pelatihan'=>$pelatihan,
				'nip' => $nip,
				'tahun_pelatihan' => $tahun,
				'penyelenggara'=>$penye,
				'sertifikat'=>$file,
				'form_evaluasi'=>$evaluasi,
				'surat_kerja'=>$kerja
			);
				$where  = array('id_portofolio' => $id );
				$this->m_data->UbahPorto($where,$data);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">  Anda Berhasil Mengubah Portofolio.</div>');
				redirect('Caridata/DetailSdm/'.$nip);
		}
	}

	public function hapus_porto()
	{
		$id=$this->uri->segment('3');
		$nip=$this->uri->segment('4');

		// Hapus file di folder 
        $this->load->helper("file");
        $ser=$this->m_data->cari_sertif_id($id);
        $ev=$this->m_data->cari_eval_id($id);

        foreach ($ser as $s){
            $path_ser='./assets/sertifikat/'.$s->sertifikat;
            if (file_exists($path_ser)) {
                // last resort setting
                // chmod($oldPicture, 0777);
                    // chmod($path_ser, 0644);
                    unlink($path_ser);
                    
                } 
        }
        foreach ($ev as $e){
            $path_eval='./assets/sertifikat/'.$e->form_evaluasi;
            if (file_exists($path_eval)) {
                    // last resort setting
                    // chmod($oldPicture, 0777);
                    // chmod($path_eval, 0644);
                    unlink($path_eval);
                    
                } 
        }

		$this->m_data->hapus_porto($id);
		redirect('Caridata/DetailSdm/'.$nip);
	}
}