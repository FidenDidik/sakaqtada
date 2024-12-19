<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Bdsmp extends CI_Controller {

	public  function __construct(){
	parent::__construct();
	$this->load->helper(array('url','download','html','form'));
	$this->load->database();
	$this->load->model("backend_model/Bdsmp_model");
	}
	public function index() {
		if($this->session->user_login === TRUE) {
			$query['data'] = $this->Bdsmp_model->view();
			$this->load->view('backend/template_user/unit_kerja/view_bdsmp', $query);
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function add_bdsmp() {
		if($this->session->user_login === TRUE) {
			$this->load->view('backend/template_user/unit_kerja/view_bdsmp');
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function save_bdsmp() {
		if($this->session->user_login === TRUE) {
			// set rules untuk validasi
			$this->form_validation->set_rules('judul', 'judul', 'trim|required');
			$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
			if($this->form_validation->run() === FALSE) {
			 	$this->load->view('backend/template_user/unit_kerja/view_bdsmp');
			} else {
				$data = array(
				
					'judul ' => $this->input->post('judul'),
				    'uraian' => $this->input->post('uraian')		
				);
				$this->Bdsmp_model->insert_bdsmp($data);
				$this->session->set_flashdata('sekretaris', 'success_add');
				redirect('backend/user/C_Bdsmp/index');
				}		
		    } else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function delete_bdsmp(){
		if($this->session->user_login === TRUE) {
		$id = $this->uri->segment(5);
		$this->bdsmp_model->delete_bdsmp($id,$data);
				
				$this->session->set_flashdata('bdsmp', 'success_delete');
				redirect('backend/user/C_Bdsmp/index');
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function edit_bdsmp() {
		if($this->session->userdata('user_login') === TRUE) {
			$id = $this->uri->segment(5);
			$query['data'] = $this->Bdsmp_model->show_id($id);
			$this->load->view('backend/template_user/unit_kerja/view_updatebdsmp',$query);
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function update_bdsmp(){
		if($this->session->user_login === TRUE) {
	    $id = $this->input->post('id_bdsd');
		$data = array(
			      
					'judul' => $this->input->post('judul'),
				    'uraian' => $this->input->post('uraian')
					);
		        $this->Bdsmp_model->update_bdsd($id,$data);
				$this->session->set_flashdata('bdsmp', 'success_edit');
				redirect('backend/user/C_Bdsmp/index');
	}else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
}