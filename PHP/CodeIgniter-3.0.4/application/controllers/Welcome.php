<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 
	//This is a controller
	public function index()
	{
		$this->load->view('welcome_message');
	}

	//Test controller - Get to this by 
	//CodeIgniter-3.0.4/index.php/welcome/test
	//Welcome path here is name of controller Class test is name of function below
	public function test()
	{
		echo "this is a test method test";
	}
	
		
}