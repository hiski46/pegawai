<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backup extends CI_Controller {

	function __construct(){
		parent::__construct();	
		if (!$this->session->userdata('nama')) {
            redirect('login');
        }	
		$this->load->model('m_data');
		$this->load->helper('url');
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
		$this->load->dbforge();
	}

	public function index()
	{
		
		// export database
		
		$aturan = array (
			'format'=>'sql',
			'filename'=>date("Y-m").'.sql'
		);
		$nama_zip = date("Y-m").'.sql';
		$backup = $this->dbutil->backup($aturan);
		write_file('./database/'.$nama_zip, $backup);
		// force_download($nama_zip, $backup);

		// database baru
		$db_name = 'balai_riset_'.date("Y-m");
		if ($this->dbforge->create_database($db_name,TRUE))
		{
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Database Baru berhasil dibuat</div>');
			//import sql

			// if($nama_zip != '')
 			// {
   			// 	$connect = mysqli_connect("localhost", "root", "", $db_name);
   			// 	$output = '';
   			// 	$count = 0;
   			// 	$file_data = file('./database/'.$nama);
   			// 	foreach($file_data as $row)
   			// 	{
    		// 		$start_character = substr(trim($row), 0, 2);
    		// 		if($start_character != '--' || $start_character != '/*' || $start_character != '//' || $row != '')
    		// 		{
     		// 			$output = $output . $row;
     		// 			$end_character = substr(trim($row), -1, 1);
     		// 			if($end_character == ';')
     		// 			{
      		// 				if(!mysqli_query($connect, $output))
      		// 				{
      		// 					$count++;
      		// 				}
      		// 				$output = '';
     		// 			}
			// 		}	
  			// 	}
   			// 		if($count > 0)
   			// 		{
    		// 			$message = '<label class="text-danger">There is an error in Database Import</label>';
   			// 		}
   			// 		else
   			// 		{
    		// 			$message = '<label class="text-success">Database Successfully Imported</label>';
  			// 		}
			// 	}	
 			
			// $lines = file('./database/'.$nama_zip);
			// $statement = '';
			// foreach ($lines as $line)
			// {
			// 	$statement .= $line;
			// 	var_dump($statement);
			// 	if (substr(trim($line), -1) === ';')
			// 	{
			// 		$this->db->simple_query($statement);
			// 		$statement = '';
			// 	}
				
			// }
			// die;

			$sql = file_get_contents('./database/'.$nama_zip);
			$mysqli = new mysqli("localhost", "root", "" ,$db_name);
			$mysqli->query('SET foreign_key_checks = 0');
			$mysqli->multi_query($sql);


		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Database Baru Gagal dibuat</div>');
			redirect('Dashboard');
		}
			
		 
			// force_download($nama_zip, $backup);
			redirect('Dashboard');
			
	}

	

	

}
