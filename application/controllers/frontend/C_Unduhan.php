<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Unduhan extends CI_Controller {

	public  function __construct(){
	parent::__construct();
	$this->load->helper(array('url','download','html','form'));
	$this->load->database();
	$this->load->model("frontend_model/Unduhan_model");
	}
	public function view_informasipublik() {
		$query['unduhan'] = $this->Unduhan_model->view_informasipublik();
		$this->load->view('frontend/unduhan/view_informasipublik', $query);
	}
	public function view_infoapbd() {
		$query['unduhan'] = $this->Unduhan_model->view_infoapbd();
		$this->load->view('frontend/unduhan/view_informasiapbd', $query);
	}
	public function view_infolakip() {
		$query['unduhan'] = $this->Unduhan_model->view_infolakip();
		$this->load->view('frontend/unduhan/view_infolakip', $query);
	}
	
	public function view_keputusanbupati() {
		$query['unduhan'] = $this->Unduhan_model->view_keputusanbupati();
		$this->load->view('frontend/unduhan/view_keputusanbupati', $query);
	}
	public function view_inforenstra() {
		$query['unduhan'] = $this->Unduhan_model->view_inforenstra();
		$this->load->view('frontend/unduhan/view_inforenstra', $query);
	}
	public function view_lkpj() {
		$query['unduhan'] = $this->Unduhan_model->view_lkpj();
		$this->load->view('frontend/unduhan/view_lkpj', $query);
	}
	public function view_rpjmd() {
		$query['unduhan'] = $this->Unduhan_model->view_rpjmd();
		$this->load->view('frontend/unduhan/view_rpjmd', $query);
	}
	public function view_perbub() {
		$query['unduhan'] = $this->Unduhan_model->view_perbub();
		$this->load->view('frontend/unduhan/view_perbub', $query);
	}
	public function view_perda() {
		$query['unduhan'] = $this->Unduhan_model->view_perda();
		$this->load->view('frontend/unduhan/view_perda', $query);
	}
	public function detailunduhan($id) {
	      $id = $this->uri->segment(4);
		$query['data'] = $this->Unduhan_model->detail($id);
		$this->load->view('frontend/unduhan/view_detailunduhan',$query);
	}
}