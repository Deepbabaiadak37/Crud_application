<?php

class Student_model extends CI_model {


	public function create($formdata)
	{
		$this->db->insert('data',$formdata);
	}

	public function getUser($id)
	{
		$this->db->where('id',$id);
		 return  $users= $users=$this->db->get('data')->row_array();

	}

	public function edit($id,$formdata)
	{

        $this->db->where('id', $id)->update('data', $formdata);
        
	}

	public function delete($id)
	{
		 $this->db->where('id', $id)->delete('data');

		redirect('show');
			
	}

} 




?>