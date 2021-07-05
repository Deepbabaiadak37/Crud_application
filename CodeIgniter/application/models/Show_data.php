<?php



class Show_data extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function show_data()
	{


		 $users=$this->db->get('data');
		 return  $users->result_array();

	}
}


?>