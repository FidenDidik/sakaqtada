<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_Publikasi extends CI_Controller {
	public  function __construct(){
	parent::__construct();
	$this->load->helper(array('url','download','html','form'));
	$this->load->database();
	$this->load->model("frontend_model/Pengumuman_model");
	$this->load->model("frontend_model/Galeri_model");
	$this->load->model("frontend_model/Video_model");
	$this->load->model("frontend_model/Agenda_model");
	}
	public function view_pengumuman() {
			$query['pengumuman'] = $this->Pengumuman_model->view_pengumumanmenu();
			$this->load->view('frontend/publikasi/view_pengumuman', $query);
	}
	public function view_galeridetail() {
		$query['galeri'] = $this->Galeri_model->view_galeridetail();
		$this->load->view('frontend/publikasi/view_galeri', $query);
	}
	
	public function view_videodetail() {
		$query['video'] = $this->Video_model->view_videodetail();
		$this->load->view('frontend/publikasi/view_video', $query);
	}
	public function view_agenda() {
		$query['agenda'] = $this->Agenda_model->view_agendamenu();
		$this->load->view('frontend/publikasi/view_agenda', $query);
	}
	public function detail_pengumuman() {
		$id = $this->uri->segment(4);
		$query['data'] = $this->Pengumuman_model->detail_pengumuman($id);
		$this->load->view('frontend/publikasi/view_detailpengumuman', $query);
}
	public function detail() {
		
			$id = $this->uri->segment(4);
			$query['data'] = $this->Agenda_model->detail($id);
			$this->load->view('frontend/publikasi/view_detailagenda', $query);
	}
	
}