<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Unitkerja extends CI_Controller {

	public  function __construct(){
	parent::__construct();
	$this->load->helper(array('url','download','html','form'));
	$this->load->database();
	$this->load->model("frontend_model/Unitkerja_model");
	}
	public function view_bdsekretaris() {
			$query['bdsekretariat'] = $this->Unitkerja_model->view();
			$this->load->view('frontend/unit_kerja/view_bdsekretaris', $query);
	}
    public function view_bdsd() {
        $query['bdsd'] = $this->Unitkerja_model->viewbdsd();
        $this->load->view('frontend/unit_kerja/view_bdsd', $query);
    }
    public function view_bdsmp() {
        $query['bdsmp'] = $this->Unitkerja_model->viewbdsmp();
        $this->load->view('frontend/unit_kerja/view_bdsmp', $query);
    }
    public function view_bdpaud() {
        $query['bdpaud'] = $this->Unitkerja_model->viewbdpaud();
        $this->load->view('frontend/unit_kerja/view_bdpaud', $query);
    }
    public function view_bdolahraga() {
        $query['bdolahraga'] = $this->Unitkerja_model->viewbdolahraga();
        $this->load->view('frontend/unit_kerja/view_bdolahraga', $query);
    }
}