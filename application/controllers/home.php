<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->home();
	}
	public function home()
	{
		$data['v']='body';
		$this->load->view('template', $data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */