<?php 
 
class M_data extends CI_Model{

function __construct()
    {
        parent::__construct();
        
        $config=array();
        if($this->session->userdata('database')!=NULL){
        $config['hostname'] = 'localhost';
        $config['username'] = 'root';
        $config['password'] = '';
        $config['database'] = $this->session->userdata('database');   
        $config['dbdriver'] = 'mysqli';
        $config['dbprefix'] = '';
        $config['pconnect'] = FALSE;
        $config['db_debug'] = TRUE;
        $this->db=$this->load->database($config, true);
         //load the 'default' database as defined in your config/database.php
    	}else{
			echo "Belum Ada Database";
		}
	}
	function tampil_data(){
		$this->db->select('*');
		$this->db->from('sdm');

		return $this->db->get();
	}
	function tampil_data_nip($nip){
		$this->db->select('*');
		$this->db->from('sdm');
		$this->db->where(array('nip'=>$nip));

		return $this->db->get();
	}
	
	function jabatan_all($tabel){
		$this->db->select('*');
		$this->db->from($tabel);


		return $this->db->get();
	}
	function tampil_Jabatan($idlem,$nip,$tabel){
		$this->db->select('*');
		$this->db->from($tabel);
		$this->db->where(array('nip'=>$nip, 'id_lembaga'=>$idlem));
		// var_dump($this->db->get());
		// die;
		return $this->db->get();
	}
	function tampil_Tugas($idlem,$nip,$idjab,$tabel){
		$this->db->select('*');
		$this->db->from($tabel);
		$this->db->where(array('nip'=>$nip, 'id_lembaga'=>$idlem, 'id_jabatan'=>$idjab));
		// var_dump($this->db->get());
		// die;
		return $this->db->get();
	}
	function tampilJabatan($idlem,$nip,$tabel){
		$this->db->select('*');
		$this->db->from($tabel);
		$this->db->where(array('nip'=>$nip, 'id_lembaga'=>$idlem));
		// var_dump($this->db->get());
		// die;
		return $this->db->get();
	}
	function tampilkan($idlem,$nip,$tabel){
		$this->db->select('*');
		$this->db->from($tabel);
		$this->db->where(array('nip'=>$nip, 'id_lembaga'=>$idlem));
		// var_dump($this->db->get());
		// die;
		return $this->db->get();
	}
	function tampil_data_lembaga($tabel){
		$query = $this->db->query('SELECT DISTINCT sdm.nip,nama FROM sdm JOIN '.$tabel.' where sdm.nip ='.$tabel.'.nip ' );

		return $query;
	}
	public function hapus_lembaga_kosong($tabel)
	{
		$query = $this->db->query('DELETE FROM ' .$tabel.' WHERE jabatan =""');
		return $query;
	}
	// public function hapus_jabatan($tabel,$nip,$jabatan)
	// {
	// 	$ganti=str_replace("_", " ", $jabatan);
	// 	$query = $this->db->query('DELETE FROM ' .$tabel.' WHERE jabatan ="'.$ganti.' " AND nip="'.$nip.'"');
	// 	return $query;
	// }

	public function cek_jabatan($tabel,$nip,$jabatan)
	{
		$query = $this->db->query('SELECT nip,jabatan FROM ' .$tabel.' WHERE jabatan ="'.$jabatan.' " AND nip="'.$nip.'"');

		if ($query->result()!=NULL) {
			return false;
		}else{
			return true;
		}
	}

	public function getDataPagination($limit,$offset)
	{
		$this->db->select('*');
		$this->db->from('sdm');
		$this->db->order_by('nama', 'ASC');
		$this->db->limit($limit,$offset);

		return $this->db->get();
	}
	public function Porto($nip)
	{
		$this->db->select('*');
		$this->db->where('nip',$nip);
		$this->db->from('portofolio');
		return $this->db->get();
	}
	// function only_makanan(){
	// 	$this->db->like('jenis', 'makanan');
	// 	$hasil=$this->db->get('table1')->result();
	// 	return $hasil;
	// }
	// function only_minuman(){
	// 	$this->db->like('jenis', 'minuman');
	// 	$hasil=$this->db->get('table1')->result();
	// 	return $hasil;
	// }
	// function only_suvenir(){
	// 	$this->db->like('jenis', 'suvenir');
	// 	$hasil=$this->db->get('table1')->result();
	// 	return $hasil;
	// }
	function CariSdm($nip){
		$query = $this->db->query('SELECT * from sdm where nip= "'.$nip.'" OR nama like ("%'.$nip.'%");' );
		// $this->db->select('*');
		// $this->db->from('sdm');
		// $this->db->where('nip',$nip)->like('nama',$nip);
		
		return $query->result();
	}
	function TampilSdm($nip){
		$query = $this->db->query('SELECT * from sdm where nip= "'.$nip.'";' );
		// $this->db->select('*');
		// $this->db->from('sdm');
		// $this->db->where('nip',$nip)->like('nama',$nip);
		
		return $query->result();
	}
	// function only_cash(){
	// 	$this->db->like('bayar', 'cash');
	// 	$hasil=$this->db->get('table1')->result();
	// 	return $hasil;
	// }
	// function only_online(){
	// 	$this->db->where_not_in('bayar', "cash");
	// 	$hasil=$this->db->get('table1')->result();
	// 	return $hasil;
	// }

	function cek_login($table, $where)
	{
		return $this->db->get_where($table,$where);
	}
	
	function hapusJabatan($table, $nip)
	{
		$query = $this->db->query('DELETE FROM '.$table.' WHERE nip =' . $nip . ';');
		return $query;
	}


	function hapusSDM($id){
		$query = $this->db->query('DELETE FROM sdm WHERE nip =' . $id . ';');
		return $query;
	}
	function hapusPor($id){
		$query = $this->db->query('DELETE FROM portofolio WHERE nip =' . $id . ';');
		return $query;
	}
	function hapuslspro($id){
		$query = $this->db->query('DELETE FROM lspro WHERE nip =' . $id . ';');
		return $query;
	}
	function hapuslit($id){
		$query = $this->db->query('DELETE FROM lit WHERE nip =' . $id . ';');
		return $query;
	}
	function hapuspeng($id){
		$query = $this->db->query('DELETE FROM lab_pengujian WHERE nip =' . $id . ';');
		return $query;
	}
	function hapuskal($id){
		$query = $this->db->query('DELETE FROM lab_kalibrasi WHERE nip =' . $id . ';');
		return $query;
	}
	
	function cari_sertif($id){
		$query = $this->db->query('SELECT sertifikat FROM portofolio WHERE nip =' . $id . ';');
		return $query->result();
	}
	function cari_eval($id){
		$query = $this->db->query('SELECT form_evaluasi FROM portofolio WHERE nip =' . $id . ';');
		return $query->result();
	}
	function cari_sertif_id($id){
		$query = $this->db->query('SELECT sertifikat FROM portofolio WHERE id_portofolio =' . $id . ';');
		return $query->result();
	}
	function cari_eval_id($id){
		$query = $this->db->query('SELECT form_evaluasi FROM portofolio WHERE id_portofolio =' . $id . ';');
		return $query->result();
	}

	function hapus_porto($id){
		$query = $this->db->query('DELETE FROM portofolio WHERE id_portofolio ='. $id . ';');
		return $query;
	}

	function hapus_jabatan($id,$tabel){
		$query = $this->db->query('DELETE FROM '.$tabel.' WHERE id ='. $id . ';');
		return $query;
	}
	
	// function edit($where, $data)
	// {
	// 	$this->db->where($where);
	// 	$this->db->update('table1',$data);
	// }
	function tambahLembaga($table,$id,$nip){
		$query = $this->db->query('INSERT INTO '.$table.' (id_lembaga, nip) VALUES ('.$id.','.$nip.')' );
		return $query;
	}
	function tambahJabatan($table, $jabatan){
		$this->db->insert($table, $jabatan);
	}
	function tambah($data, $table){
		$this->db->insert($table, $data);
	}
	function tambahPendidikan($data, $table){
		$this->db->insert($table, $data);
	}

	function tampilPendidikan($nip)
	{
		$query = $this->db->query('SELECT * from pd_terakhir where nip= "'.$nip.'";' );		
		return $query->result();
	}

	function hapusPendidikan($id)
	{
		$query = $this->db->query('DELETE FROM pd_terakhir WHERE id ='. $id . ';');
		return $query;
	}

	public function cekjabatan($data)
	{
		$query=$this->db->get_where('jabatan_sdm',$data);
		if (empty($query->row_array())) {
			return true;
		}else{
			return false;
		}
	}
	public function ceknip($nip)
	{
		$query=$this->db->get_where('sdm',array('nip'=>$nip));
		if (empty($query->row_array())) {
			return true;
		}else{
			return false;
		}
	}
	
	public function ceklspro($nip)
	{
		$query=$this->db->get_where('lspro',array('nip'=>$nip));
		if (empty($query->row_array())) {
			return true;
		}else{
			return false;
		}
	}
	
	public function ceklit($nip)
	{
		$query=$this->db->get_where('lit',array('nip'=>$nip));
		if (empty($query->row_array())) {
			return true;
		}else{
			return false;
		}
	}
	public function cekpeng($nip)
	{
		$query=$this->db->get_where('lab_pengujian',array('nip'=>$nip));
		if (empty($query->row_array())) {
			return true;
		}else{
			return false;
		}
	}
	public function cekkal($nip)
	{
		$query=$this->db->get_where('lab_kalibrasi',array('nip'=>$nip));
		if (empty($query->row_array())) {
			return true;
		}else{
			return false;
		}
	}

	function UbahNama($where, $data)
	{
		$this->db->where($where);
		$this->db->update('sdm',$data);
	}
	function UbahData($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function UbahPen($nip,$pen)
	{
		$query = $this->db->query('UPDATE sdm SET pendidikan_terakhir = "'.$pen.'" WHERE nip = "'.$nip.'";');
		return $query;
	}
	public function UbahPorto($id,$data)
	{
		$this->db->where($id);
		$this->db->update('portofolio',$data);
	}
}

