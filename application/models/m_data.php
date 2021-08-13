<?php 
 
class M_data extends CI_Model{
	function tampil_data(){
		$this->db->select('*');
		$this->db->from('sdm');

		return $this->db->get();
	}
	public function getDataPagination($limit,$offset)
	{
		$this->db->select('*');
		$this->db->from('sdm');
		$this->db->limit($limit,$offset);

		return $this->db->get();
	}
	public function Porto($nip)
	{
		$this->db->select('nama_pelatihan');
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

	
	// function edit($where, $data)
	// {
	// 	$this->db->where($where);
	// 	$this->db->update('table1',$data);
	// }
	function tambahLembaga($table,$id,$nip){
		$query = $this->db->query('INSERT INTO '.$table.' (id_lembaga, nip) VALUES ('.$id.','.$nip.')' );
		return $query;
	}
	function tambah($data, $table){
		$this->db->insert($table, $data);
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
}

