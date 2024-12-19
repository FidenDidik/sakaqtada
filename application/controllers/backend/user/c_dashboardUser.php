<?php 
class c_dashboardUser extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
	$this->load->model('Login_model');
	
	}
	
	public function index() {
		if($this->session->user_login === TRUE) {
		
			$this->load->view('backend/template_user/user_template');

		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('Login');
	    }
	}
}
