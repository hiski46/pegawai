<?php 
 
class M_login extends CI_Model{

    function __construct()
    {
        parent::__construct();
        $config=array();
			
           
        $this->db=$this->load->database('', true);
	}

    function cek_login($table, $where)
	{
		return $this->db->get_where($table,$where);
	}


}