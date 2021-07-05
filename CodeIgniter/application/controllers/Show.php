<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Show extends CI_controller{

	public function index()
	{
				#Load Show model...........

						$this->load->model('Show_data');

				#get the data array.......
						$data['users']=$this->Show_data->show_data();
					
					
						$this->load->view('show',["data"=>$data]);

	}


}

?>