<?php

class Welcome extends CI_Controller {



	public function index()
	{
	//	$this->load->view('welcome_message');

		echo "Hello index";
	}

	public function insert()
	{

		echo "Hello insert";

	}
		public function __construct()
	{
		parent ::__construct();
		error_reporting(0);

		echo "Hello constructor";


	}


}
