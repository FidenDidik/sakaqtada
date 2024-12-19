<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Video extends CI_Controller {

	public  function __construct(){
	parent::__construct();
	$this->load->helper(array('url','download','html','form'));
	$this->load->database();
	$this->load->model("backend_model/Video_model");
	}
	public function index() {
		if($this->session->user_login === TRUE) {
			$query['data'] = $this->Video_model->view();
			$this->load->view('backend/template_user/video/view_video', $query);
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function add_video() {
		if($this->session->user_login === TRUE) {
			$this->load->view('backend/template_user/video/view_addvideo');
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function save_video() {
		if($this->session->user_login === TRUE) {
			// set rules untuk validasi
			$this->form_validation->set_rules('judul_video', 'judul_video', 'trim|required');
			$this->form_validation->set_rules('frame1', 'frame1', 'trim|required');
			$this->form_validation->set_rules('video', 'video', 'trim|required');
			$this->form_validation->set_rules('frame2', 'frame2', 'trim|required');
			if($this->form_validation->run() === FALSE) {
			 	$this->load->view('backend/template_user/video/view_video');
			} else {
				$data = array(
				
				'judul_video' => $this->input->post('judul_video'),
                    		'frame1' => $this->input->post('frame1'),
                    		'video' => $this->input->post('video'),
                    		'frame2' => $this->input->post('frame2')
				);
				$this->Video_model->insert_video($data);
				$this->session->set_flashdata('video', 'success_add');
				redirect('backend/user/C_Video/index');
				}		
		    } else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function delete_video(){
		if($this->session->user_login === TRUE) {
		$id = $this->uri->segment(5);
		$this->Video_model->delete_video($id);
				
			$this->session->set_flashdata('video', 'success_delete');
			redirect('backend/user/C_Video/index');
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function edit_video() {
		if($this->session->userdata('user_login') === TRUE) {
			$id = $this->uri->segment(5);
			$query['data'] = $this->Video_model->show_id($id);
			$this->load->view('backend/template_user/video/view_updatevideo',$query);
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function update_video(){
		if($this->session->user_login === TRUE) {
	    $id = $this->input->post('id_video');
		$data = array(
                    
                    'frame1' => $this->input->post('frame1'),
                    'video' => $this->input->post('video'),
                    'frame2' => $this->input->post('frame2')
			);
		       $this->Video_model->update_video($id,$data);
			$this->session->set_flashdata('video', 'success_edit');
			redirect('backend/user/C_Video/index');
	   	 }else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
}