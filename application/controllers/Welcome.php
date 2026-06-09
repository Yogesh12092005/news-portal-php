<?php

class Welcome extends CI_Controller {


		public function __construct()
	{
		parent ::__construct();
		error_reporting(0);
	}



	public function index()
	{
	//	$this->load->view('welcome_message');

		$file['breaking']=$this->db->get('breakingnews')->result();
		$file['slider']=$this->db->get('slider')->result();


		
		$this->load->view('template/header');
		$this->load->view('template/content', $file);
		$this->load->view('template/footer');
	}




}
