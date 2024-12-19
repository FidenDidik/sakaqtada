<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_Data extends CI_Controller {
	public  function __construct(){
	parent::__construct();
	$this->load->helper(array('url','download','html','form'));
	$this->load->database();
	$this->load->model("frontend_model/Data_model");

	}
	public function view_datapendidikan() {
			$query['data'] = $this->Data_model->view_datapendidikan();
			$this->load->view('frontend/data/view_datapendidikan', $query);
	}
    public function view_dataguru() {
        $query['data'] = $this->Data_model->view_dataguru();
        $this->load->view('frontend/data/view_dataguru', $query);
}
	public function detail() {
		
			$id = $this->uri->segment(4);
			$query['data'] = $this->Data_model->detaildataseklolah($id);
			$this->load->view('frontend/publikasi/view_detaildataseklolah', $query);
	}
	
}