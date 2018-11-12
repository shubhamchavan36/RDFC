<?php 

class AdminModel extends CI_Model
{



	public function isvalidate($email,$password)
	{
		$data['content']=$this->db->get_where('users',$arr = array('email' =>$email ,'password'=>$password ));


	}

	public function store()
	{

		$arrayName = array
		(
			'firstName' => $this->input->post('firstName'),
			'lastName'=>$this->input->post('lastName'),
			'email'=>$this->input->post('email'),
			'password'=>$this->input->post('password'),
			'phoneNum'=>$this->input->post('phoneNum'),
			'state'=>$this->input->post('state'),
			'batch'=>$this->input->post('batch')
		);


		$this->db->insert('users',$arrayName);
	}
}

