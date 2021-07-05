<?php

class User extends CI_Controller
{

	public function create()
	{
		
#load model ........

		$this->load->model('Student_model');


# form validations.....		
		
		$this->form_validation->set_rules('name','Name','required|alpha');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('contact','Contact','required|numeric|exact_length[10]');
		$this->form_validation->set_rules('address','Address','required');
		$this->form_validation->set_rules('dept','Dept','required|alpha');
		$this->form_validation->set_rules('roll','Roll','required|numeric');
		

		if($this->form_validation->run()==false)
		{
			$this->load->view('user');
		}
		else
		{
		
			$formdata=array();
			$formdata['username']=$this->input->post('name');
			$formdata['password']=$this->input->post('password');
			$formdata['email']=$this->input->post('email');
			$formdata['address']=$this->input->post('address');
			$formdata['contact']=$this->input->post('contact');
			$formdata['dept']=$this->input->post('dept');
			$formdata['roll']=$this->input->post('roll');


	# pass data into model functions........

			$this->Student_model->create($formdata);


	#session creatiom............

			$this->session->set_flashdata('success','New data added successfully');
			redirect(base_url().'index.php/show');



		}


	}




	public function edit($id)
	{
		$this->load->model('Student_model');
		$data['users']=$this->Student_model->getUser($id);
		
		$this->form_validation->set_rules('name','Name','required|alpha');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('contact','Contact','required|numeric|exact_length[10]');
		$this->form_validation->set_rules('address','Address','required');
		$this->form_validation->set_rules('dept','Dept','required|alpha');
		$this->form_validation->set_rules('roll','Roll','required|numeric');
		

		if($this->form_validation->run()==false)
		{
			$this->load->view('edit',["data"=>$data]);
	
		}
		else
		{
		
			$formdata=array();
			$formdata['username']=$this->input->post('name');
			$formdata['password']=$this->input->post('password');
			$formdata['email']=$this->input->post('email');
			$formdata['address']=$this->input->post('address');
			$formdata['contact']=$this->input->post('contact');
			$formdata['dept']=$this->input->post('dept');
			$formdata['roll']=$this->input->post('roll');

			$this->Student_model->edit($id,$formdata);

			$this->session->set_flashdata('success','Record updated');
			redirect('show');
		}

		
	}


	public function delete($id)
	{

		#delete.............
		$this->load->model('Student_model');
		$this->Student_model->delete($id);
		$this->load->view('show');
	}



}



?>
