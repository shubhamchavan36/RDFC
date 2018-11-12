<?php  


class Admin extends CI_Controller
{
	
	public function Register()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('batch','Batch','required');
		$this->form_validation->set_rules('firstName','First Name','required');
		$this->form_validation->set_rules('lastName','Last Name','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('confirm_password','Confirm Password','required|matches[password]');
		$this->form_validation->set_rules('phoneNum','Phone Number','required');
		$this->form_validation->set_rules('state','State','required');


		if ($this->form_validation->run()) 
		{

			
			$this->load->model('AdminModel');
			$this->AdminModel->insert('users',$arrayName = array('firstName' => $firstName,'lastName'=>$lastName,'email'=>$email,'password'=>$password,'phoneNum'=>$phoneNum,'state'=>$state,'batch'=>$batch ));
		}
		else
		{
			echo 'error';
		   	$this->load->view('templates/header');
			$this->load->view('admin/register');
			$this->load->view('templates/footer');

		}


	}


	

	public function login()
	{
  		$this->load->library('form_validation');

   		$this->form_validation->set_rules('email','Email','required|valid_email');
   		$this->form_validation->set_rules('password','Password','required');

   		$email=$this->input->post('email');
   		$password=$this->input->post('password');

   		if($this->form_validation->run())
   		{
   			echo 'done';
   			$this->load->model('AdminModel');
   			$data['data']=$this->AdminModel->isvalidate($email,$password);
   					if ($data>1) 
   					{
						
						$this->load->view('templates/header');
						$this->load->view('index');
						$this->load->view('templates/footer');
		
					}
					else{
				echo 'loggin failed such email and password does not exit.please check email and password';}

   		}
		else
	 	{
	 		
   		$this->load->view('templates/header');
		$this->load->view('admin/login');
		$this->load->view('templates/footer');
   		}



   	
   	

	}

	public function iavalidate()
	{
   		



	}

	public function data()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('batch','Batch','required');
		$this->form_validation->set_rules('firstName','First Name','required');
		$this->form_validation->set_rules('lastName','Last Name','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('confirm_password','Confirm Password','required|matches[password]');
		$this->form_validation->set_rules('phoneNum','Phone Number','required');
		$this->form_validation->set_rules('state','State','required');


		if ($this->form_validation->run()) 
		{
			$this->load->model('AdminModel');
			$this->AdminModel->store();
			echo 'data insertedx';
			$data['reg']='data insertedx';
			$this->load->view('templates/header');
			$this->load->view('admin/login');
			$this->load->view('templates/footer');
		}
		else
		{
		echo 'error';
		}


	}



}