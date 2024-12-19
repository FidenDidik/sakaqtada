<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	public  function __construct(){
	parent::__construct();
	$this->load->library(['form_validation','session']);
	$this->load->helper(array('url','download','html','form'));
	$this->load->database();
    //Deklarasi Model 
	$this->load->model("frontend_model/Berita_model");
	$this->load->model("frontend_model/Sdm_model");
	$this->load->model("frontend_model/Galeri_model");
	$this->load->model("frontend_model/Video_model");
	$this->load->model("frontend_model/Agenda_model");
	$this->load->model("frontend_model/Pengumuman_model");
	$this->load->model("frontend_model/Slider_model");
	$this->load->model("frontend_model/Sambutan_model");
	$this->load->model("frontend_model/Jejakpendapat_model");
	$this->load->model("frontend_model/Unduhan_model");

	}
	public function index()
	{
		$query['berita'] = $this->Berita_model->view_berita();	
		
		$query['galeri'] = $this->Galeri_model->view_galeri();
		$query['video'] = $this->Video_model->view_video();
		$query['agenda'] = $this->Agenda_model->view_agenda();
		$query['pengumuman'] = $this->Pengumuman_model->view_pengumuman();
		$query['slider'] = $this->Slider_model->view_slider();
		$query['sambutan'] = $this->Sambutan_model->view_sambutan();
		$this->load->view('frontend/view_home', $query);
	}
	public function detailberita($id)
      {
		$image = $this->Berita_model->detail($id)->row();
		$this->load->view('frontend/berita/view_detailberita',['image'=>$image]);
	}
	public function save_jejakpendapat() {
		// set rules untuk validasi
		$this->form_validation->set_rules('type_jejakpendapat', 'type_jejakpendapat', 'trim|required');
			$data = array(
				'type_jejakpendapat' => $this->input->post('type_jejakpendapat')
			);
			$this->Jejakpendapat_model->insert_jejakpendapat($data);
			$this->session->set_flashdata('jejakpendapat', 'success_add');
			redirect('Home/index');	
	}
	public function view_jejakpendapat()
	{	
		$query['jejakpendapat'] = $this->Jejakpendapat_model->view_jejakpendapat();	
		 $this->load->view('frontend/jejakpendapat/view_jejakpendapat', $query);
	}
}
