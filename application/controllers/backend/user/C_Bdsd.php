<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Bdsd extends CI_Controller {

	public  function __construct(){
	parent::__construct();
	$this->load->helper(array('url','download','html','form'));
	$this->load->database();
	$this->load->model("backend_model/Bdsd_model");
	}
	public function index() {
		if($this->session->user_login === TRUE) {
			$query['data'] = $this->Bdsd_model->view();
			$this->load->view('backend/template_user/unit_kerja/view_bdsd', $query);
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function add_bdsd() {
		if($this->session->user_login === TRUE) {
			$this->load->view('backend/template_user/unit_kerja/view_bdsd');
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function save_bdsd() {
		if($this->session->user_login === TRUE) {
			// set rules untuk validasi
			$this->form_validation->set_rules('judul', 'judul', 'trim|required');
			$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
			if($this->form_validation->run() === FALSE) {
			 	$this->load->view('backend/template_user/unit_kerja/view_bdsd');
			} else {
				$data = array(
				
					'judul ' => $this->input->post('judul'),
				    'uraian' => $this->input->post('uraian')		
				);
				$this->Bdsd_model->insert_bdsd($data);
				$this->session->set_flashdata('sekretaris', 'success_add');
				redirect('backend/user/C_Bdsd/index');
				}		
		    } else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function delete_bdsd(){
		if($this->session->user_login === TRUE) {
		$id = $this->uri->segment(5);
		$this->Bdsd_model->delete_bdsd($id,$data);
				
				$this->session->set_flashdata('bdsd', 'success_delete');
				redirect('backend/user/C_Bdsd/index');
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function edit_bdsd() {
		if($this->session->userdata('user_login') === TRUE) {
			$id = $this->uri->segment(5);
			$query['data'] = $this->Bdsd_model->show_id($id);
			$this->load->view('backend/template_user/unit_kerja/view_updatebdsd',$query);
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function update_bdsd(){
		if($this->session->user_login === TRUE) {
	    $id = $this->input->post('id_bdsd');
		$data = array(
			      
					'judul' => $this->input->post('judul'),
				    'uraian' => $this->input->post('uraian')
					);
		        $this->Bdsd_model->update_bdsd($id,$data);
				$this->session->set_flashdata('bdsd', 'success_edit');
				redirect('backend/user/C_Bdsd/index');
	}else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
}