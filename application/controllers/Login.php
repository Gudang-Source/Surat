<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('login');
		$this->session->sess_destroy();
		error_reporting(0);

	}

	public function index()
	{
		$this->load->view('login');
		// $this->load->model('login');
		// $this->load->view('utama');
	
	}

	public function lupa()
	{
		$this->load->view('lupa');
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */