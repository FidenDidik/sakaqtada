<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Agenda extends CI_Controller {

	public  function __construct(){
	parent::__construct();
	$this->load->helper(array('url','download','html','form'));
	$this->load->database();
	$this->load->model("backend_model/Agenda_model");
	}
	public function index() {
		if($this->session->user_login === TRUE) {
			$query['data'] = $this->Agenda_model->view();
			$this->load->view('backend/template_user/home/view_agenda', $query);
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function add_agenda() {
		if($this->session->user_login === TRUE) {
			$this->load->view('backend/template_user/home/view_addagenda');
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function save_agenda() {
		if($this->session->user_login === TRUE) {
			// set rules untuk validasi
			$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
			$this->form_validation->set_rules('agenda', 'agenda', 'trim|required');
			$this->form_validation->set_rules('jam', 'jam', 'trim|required');
			$this->form_validation->set_rules('lokasi', 'lokasi', 'trim|required');
			$this->form_validation->set_rules('petugas_liputan', 'petugas_liputan', 'trim|required');


			if($this->form_validation->run() === FALSE) {
			 	$this->load->view('backend/template_user/unit_kerja/view_agenda');
			} else {
				$data = array(
				
				'tanggal' => $this->input->post('tanggal'),
				'agenda' => $this->input->post('agenda'),
				'jam' => $this->input->post('jam'),	
				'lokasi' => $this->input->post('lokasi'),
				'petugas_liputan' => $this->input->post('petugas_liputan')
                );
				$this->Agenda_model->insert_agenda($data);
				$this->session->set_flashdata('agenda', 'success_add');
				redirect('backend/user/C_Agenda/index');
				}		
		    } else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function delete_agenda(){
		if($this->session->user_login === TRUE) {
		$id = $this->uri->segment(5);
		$this->Agenda_model->delete_agenda($id,$data);
				
				$this->session->set_flashdata('agenda', 'success_delete');
				redirect('backend/user/C_Agenda/index');
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function edit_agenda() {
		if($this->session->userdata('user_login') === TRUE) {
			$id = $this->uri->segment(5);
			$query['data'] = $this->Agenda_model->show_id($id);
			$this->load->view('backend/template_user/home/view_updateagenda',$query);
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function update_agenda(){
		if($this->session->user_login === TRUE) {
	    $id = $this->input->post('id_agenda');
		$data = array(
                    'tanggal' => $this->input->post('tanggal'),
                    'agenda' => $this->input->post('agenda'),
                    'jam' => $this->input->post('jam'),	
                    'lokasi' => $this->input->post('lokasi'),
                    'petugas_liputan' => $this->input->post('petugas_liputan')
			);
		       $this->Agenda_model->update_agenda($id,$data);
			$this->session->set_flashdata('agenda', 'success_edit');
			redirect('backend/user/C_Agenda/index');
	}else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
}