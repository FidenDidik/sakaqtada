<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Profile extends CI_Controller {
	public  function __construct(){
	parent::__construct();
    $this->load->library(['form_validation','session']);
	$this->load->helper(array('url','download','html','form'));
	$this->load->database();
	$this->load->model("frontend_model/Profile_model");	
    }
	public function view_sejarah()
	{	
		$query['sekilas'] = $this->Profile_model->view_tentang();	
		 $this->load->view('frontend/profile/view_sejarah', $query);
     
	}
	public function view_visimisi()
	{
		$query['visimisi'] = $this->Profile_model->view_visimisi();
		$this->load->view('frontend/profile/view_visimisi', $query);
	}
	public function view_struktur()
	{
		$query['struktur'] = $this->Profile_model->view_struktur();
		$this->load->view('frontend/profile/view_struktur', $query);
	}
	
	
}
