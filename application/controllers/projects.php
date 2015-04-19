<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	public function index()
	{
		$this->projects();
	}
	public function projects()
	{
		$data['v']='projects';
		$this->load->view('template', $data);
	}
}

/* End of file projects.php */
/* Location: ./application/controllers/projects.php */