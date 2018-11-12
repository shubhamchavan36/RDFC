<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Raredare extends CI_Controller {

	
	public function index()
	{
	//	$this->load->view('welcome_message');
		$this->load->view('templates/header');
		$this->load->view('index');
		$this->load->view('templates/footer');

	}

	public function achive()
	{
	//	$this->load->view('welcome_message');
		$this->load->view('templates/header');
		$this->load->view('achive');

		$this->load->view('templates/footer');

	}


	public function growth()
	{
	//	$this->load->view('welcome_message');
		$this->load->view('templates/header');
		$this->load->view('growth');
		$this->load->view('templates/footer');

	}

	public function member()
	{
	//	$this->load->view('welcome_message');
		$sample['content']='amar chita is fine';
		
		$this->load->view('templates/header');
		$this->load->view('membership',$sample);
		$this->load->view('templates/footer');

	}

	public function fan()
	{
	//	$this->load->view('welcome_message');
		$data['fan']='With a growing fan base through performing and participating in various Divisional, Regional and Local tournaments, We are steadily reaching to people and winning their hearts. We are nothing without ours fans and their support. Here, you can actively be in touch with the clubs ongoing activities and behind the scenes of upcoming games and events. 
	Fans will also have elite access to RDFC\'s exclusive merchandize, event spotlights and season tickets.';
		$this->load->view('templates/header');
		$this->load->view('fan',$data);
		$this->load->view('templates/footer');

	}

	public function event()
	{
	//	$this->load->view('welcome_message');
		$this->load->view('templates/header');
		$this->load->view('');
		$this->load->view('templates/footer');

	}

	public function sponsors()
	{
	//	$this->load->view('welcome_message');
		$this->load->view('templates/header');
		$this->load->view('');
		$this->load->view('templates/footer');

	}


}
