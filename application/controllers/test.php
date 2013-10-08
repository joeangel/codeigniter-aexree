<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$_allow_methods = array(
			"index",
			"bootstrap",
			"community",
		);
		$this->load->library('verify');
		$this->verify->controller_method($this, $_allow_methods);
	}

	public function index()
	{
		print_r($this->input->post(NULL, TRUE));
		$this->load->database();
		$this->load->library('clean');
		
		print_r($this->clean->post($this->input->post("a")));
		$this->load->view('welcome_message');
	}

	public function bootstrap()
	{
		$this->load->helper('url');
		$this->load->view('bootstrap');
	}

	public function community()
	{
		$_view_data = array(
			'title'		=> '長安科博',
		);
		$this->load->helper('url');
		$this->load->view('community', $_view_data);
	}
}
