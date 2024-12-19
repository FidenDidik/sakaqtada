<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Bdpaud extends CI_Controller {

	public  function __construct(){
	parent::__construct();
	$this->load->helper(array('url','download','html','form'));
	$this->load->database();
	$this->load->model("backend_model/Bdpaud_model");
	}
	public function index() {
		if($this->session->user_login === TRUE) {
			$query['data'] = $this->Bdpaud_model->view();
			$this->load->view('backend/template_user/unit_kerja/view_Bdpaud', $query);
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function add_Bdpa() {
		if($this->session->user_login === TRUE) {
			$this->load->view('backend/template_user/unit_kerja/view_Bdpa');
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function save_Bdpa() {
		if($this->session->user_login === TRUE) {
			// set rules untuk validasi
			$this->form_validation->set_rules('judul', 'judul', 'trim|required');
			$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		if($this->form_validation->run() === FALSE) {
			$this->load->view('backend/template_user/unit_kerja/view_Bdpa');
			} else {
				$data = array(
				
				'judul ' => $this->input->post('judul'),
				'uraian' => $this->input->post('uraian')		
				);
				$this->Bdpa_model->insert_Bdpa($data);
				$this->session->set_flashdata('sekretaris', 'success_add');
				redirect('backend/user/C_Bdpa/index');
				}		
		    } else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function delete_bdpaud(){
		if($this->session->user_login === TRUE) {
		$id = $this->uri->segment(5);
		$this->bdpaud_model->delete_bdpaud($id,$data);
				
				$this->session->set_flashdata('bdpaud', 'success_delete');
				redirect('backend/user/C_bdpaud/index');
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function edit_bdpaud() {
		if($this->session->userdata('user_login') === TRUE) {
			$id = $this->uri->segment(5);
			$query['data'] = $this->Bdpaud_model->show_id($id);
			$this->load->view('backend/template_user/unit_kerja/view_updatebdpaud',$query);
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function update_bdpaud(){
		if($this->session->user_login === TRUE) {
	    $id = $this->input->post('id_bdpaud');
		$data = array(
			      
			'judul' => $this->input->post('judul'),
			'uraian' => $this->input->post('uraian')
			);
		        $this->Bdpaud_model->update_bdpaud($id,$data);
				$this->session->set_flashdata('bdpaud', 'success_edit');
				redirect('backend/user/C_bdpaud/index');
	}else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
}