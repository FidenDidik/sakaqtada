<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Bdolahraga extends CI_Controller {

	public  function __construct(){
	parent::__construct();
	$this->load->helper(array('url','download','html','form'));
	$this->load->database();
	$this->load->model("backend_model/Bdolahraga_model");
	}
	public function index() {
		if($this->session->user_login === TRUE) {
			$query['data'] = $this->Bdolahraga_model->view();
			$this->load->view('backend/template_user/unit_kerja/view_bdolahraga', $query);
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function add_bdolahraga() {
		if($this->session->user_login === TRUE) {
			$this->load->view('backend/template_user/unit_kerja/view_addbdolahraga');
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function save_bdolahraga() {
		if($this->session->user_login === TRUE) {
			// set rules untuk validasi
			$this->form_validation->set_rules('judul', 'judul', 'trim|required');
			$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
			if($this->form_validation->run() === FALSE) {
			 	$this->load->view('backend/template_user/unit_kerja/view_bdolahraga');
			} else {
				$data = array(
				
					'judul ' => $this->input->post('judul'),
				    'uraian' => $this->input->post('uraian')		
				);
				$this->Bdolahraga_model->insert_Bdpa($data);
				$this->session->set_flashdata('bdolahraga', 'success_add');
				redirect('backend/user/C_Bdpa/index');
				}		
		    } else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function delete_bdolahraga(){
		if($this->session->user_login === TRUE) {
		$id = $this->uri->segment(5);
		$this->Bdolahraga_model->delete_bdolahraga($id,$data);
				
				$this->session->set_flashdata('bdolahraga', 'success_delete');
				redirect('backend/user/C_Bdolahraga/index');
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function edit_bdolahraga() {
		if($this->session->userdata('user_login') === TRUE) {
			$id = $this->uri->segment(5);
			$query['data'] = $this->Bdolahraga_model->show_id($id);
			$this->load->view('backend/template_user/unit_kerja/view_updatebdolahraga',$query);
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function update_bdolahraga(){
		if($this->session->user_login === TRUE) {
	    $id = $this->input->post('id_bdolahraga');
		$data = array(   
			'judul' => $this->input->post('judul'),
			'uraian' => $this->input->post('uraian')
					);
		        $this->Bdolahraga_model->update_bdolahraga($id,$data);
				$this->session->set_flashdata('bdolahraga', 'success_edit');
				redirect('backend/user/C_Bdolahraga/index');
	}else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
}