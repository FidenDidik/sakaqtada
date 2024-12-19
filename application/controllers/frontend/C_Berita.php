<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Berita extends CI_Controller {

	public  function __construct(){
	parent::__construct();
	$this->load->helper(array('url','download','html','form'));
	$this->load->database();
	$this->load->model("frontend_model/Berita_model");
	}
	public function view_berita() {
			$query['berita'] = $this->Berita_model->view_berita();
			$this->load->view('frontend/berita/view_berita', $query);
	}
    public function view_disdikpora() {
        $query['berita'] = $this->Berita_model->view_disdikpora();
        $this->load->view('frontend/berita/view_berita', $query);
    }
    public function view_infonasional() {
        $query['berita'] = $this->Berita_model->view_infonasional();
        $this->load->view('frontend/berita/view_berita', $query);
    }
    public function view_infobeasiswa() {
        $query['berita'] = $this->Berita_model->view_infobeasiswa();
        $this->load->view('frontend/berita/view_berita', $query);
    }
    public function detailberita($id)
    {
		$image = $this->Berita_model->detail($id)->row();
		$this->load->view('frontend/berita/view_detailberita',['image'=>$image]);
	}
    
}