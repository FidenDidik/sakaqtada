<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Bdsekretaris extends CI_Controller {

	public  function __construct(){
	parent::__construct();
	$this->load->helper(array('url','download','html','form'));
	$this->load->database();
	$this->load->model("backend_model/Bdsekretaris_model");
	}
	public function index() {
		if($this->session->user_login === TRUE) {
			$query['data'] = $this->Bdsekretaris_model->view();
			$this->load->view('backend/template_user/unit_kerja/view_bdsekretaris', $query);
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function add_bdsekretaris() {
		if($this->session->user_login === TRUE) {
			$this->load->view('backend/template_user/unit_kerja/view_addbdsekretaris');
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function save_bdsekretaris() {
		if($this->session->user_login === TRUE) {
			// set rules untuk validasi
			$this->form_validation->set_rules('judul', 'judul', 'trim|required');
			$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
			if($this->form_validation->run() === FALSE) {
			 	$this->load->view('backend/template_user/unit_kerja/view_bdsekretaris');
			} else {
				$data = array(
				
					'judul ' => $this->input->post('judul'),
				    'uraian' => $this->input->post('uraian')		
				);
				$this->Bdsekretaris_model->insert_Bdsekretaris($data);
				$this->session->set_flashdata('sekretaris', 'success_add');
				redirect('backend/user/C_Bdsekretaris/index');
				}		
		    } else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function delete_Bdsekretaris(){
		if($this->session->user_login === TRUE) {
		$id = $this->uri->segment(5);
		$this->Bdsekretaris_model->delete_Bdsekretaris($id,$data);
				
				$this->session->set_flashdata('bdsekretaris', 'success_delete');
				redirect('backend/user/C_Bdsekretaris/index');
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function edit_Bdsekretaris() {
		if($this->session->userdata('user_login') === TRUE) {
			$id = $this->uri->segment(5);
			$query['data'] = $this->Bdsekretaris_model->show_id($id);
			$this->load->view('backend/template_user/unit_kerja/view_updatebdsekretaris',$query);
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function update_Bdsekretaris(){
		if($this->session->user_login === TRUE) {
	    $id = $this->input->post('id_bdsekretaris');
		$data = array(
			      
					'judul' => $this->input->post('judul'),
				    'uraian' => $this->input->post('uraian')
					);
		        $this->Bdsekretaris_model->update_Bdsekretaris($id,$data);
				$this->session->set_flashdata('bdsekretaris', 'success_edit');
				redirect('backend/user/C_Bdsekretaris/index');
	}else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
}