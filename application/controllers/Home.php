<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
    
	}

	public function blank(){
		$this->load->view('partials/error');
	}
	public function index()
	{
		$this->load->view('partials/header');
		$this->load->view('home');
		$this->load->view('partials/footer');	
	}

}
