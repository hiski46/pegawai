<?php 
 
class M_data extends CI_Model{
	function tampil_data(){
        return $this->db->get('sdm')->result();
	}
	function only_makanan(){
		$this->db->like('jenis', 'makanan');
		$hasil=$this->db->get('table1')->result();
		return $hasil;
	}
	function only_minuman(){
		$this->db->like('jenis', 'minuman');
		$hasil=$this->db->get('table1')->result();
		return $hasil;
	}
	function only_suvenir(){
		$this->db->like('jenis', 'suvenir');
		$hasil=$this->db->get('table1')->result();
		return $hasil;
	}
	function only_pakaian(){
		$this->db->like('jenis', 'pakaian');
		$hasil=$this->db->get('table1')->result();
		return $hasil;
	}
	function only_cash(){
		$this->db->like('bayar', 'cash');
		$hasil=$this->db->get('table1')->result();
		return $hasil;
	}
	function only_online(){
		$this->db->where_not_in('bayar', "cash");
		$hasil=$this->db->get('table1')->result();
		return $hasil;
	}

	function cek_login($table, $where)
	{
		return $this->db->get_where($table,$where);
	}

	function hapus($id){
		$query = $this->db->query('DELETE FROM table1 WHERE UID =' . $id . ';');
		return $query;
	}
	function tambahLembaga($table,$id,$nip){
		$query = $this->db->query('INSERT INTO '.$table.' (id_lembaga, nip) VALUES ('.$id.','.$nip.')' );
		return $query;
	}

	function tambah($data, $table){
		$this->db->insert($table, $data);
	}

	function edit($where, $data)
	{
		$this->db->where($where);
		$this->db->update('table1',$data);
	}
}

