<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Pengumuman extends CI_Controller {

	public  function __construct(){
	parent::__construct();
	$this->load->helper(array('url','download','html','form'));
	$this->load->database();
	$this->load->model("backend_model/Pengumuman_model");
	}
	public function index() {
		if($this->session->user_login === TRUE) {
			$query['data'] = $this->Pengumuman_model->view();
			$this->load->view('backend/template_user/home/view_pengumuman', $query);
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function add_pengumuman() {
		if($this->session->user_login === TRUE) {
			$this->load->view('backend/template_user/home/view_addpengumuman');
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function save_pengumuman() {
		if($this->session->user_login === TRUE) {
			// set rules untuk validasi
            $this->form_validation->set_rules('judul', 'judul', 'trim|required');
			$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
			$this->form_validation->set_rules('pengumuman', 'pengumuman', 'trim|required');
			if($this->form_validation->run() === FALSE) {
			 	$this->load->view('backend/template_user/unit_kerja/view_Pengumuman');
			} else {
				$data = array(
                    'judul' => $this->input->post('judul'),
                    'tanggal' => $this->input->post('tanggal'),
                    'pengumuman' => $this->input->post('pengumuman')
                );
				$this->Pengumuman_model->insert_pengumuman($data);
				$this->session->set_flashdata('pengumuman', 'success_add');
				redirect('backend/user/C_Pengumuman/index');
				}		
		    } else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function delete_pengumuman(){
		if($this->session->user_login === TRUE) {
		$id = $this->uri->segment(5);
		$this->Pengumuman_model->delete_pengumuman($id,$data);
				
				$this->session->set_flashdata('pengumuman', 'success_delete');
				redirect('backend/user/C_Pengumuman/index');
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function edit_pengumuman() {
		if($this->session->userdata('user_login') === TRUE) {
			$id = $this->uri->segment(5);
			$query['data'] = $this->Pengumuman_model->show_id($id);
			$this->load->view('backend/template_user/home/view_updatepengumuman',$query);
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function update_pengumuman(){
		if($this->session->user_login === TRUE) {
	    $id = $this->input->post('id_pengumuman');
		$data = array(
                    'judul' => $this->input->post('judul'),
                    'tanggal' => $this->input->post('tanggal'),
                    'pengumuman' => $this->input->post('pengumuman')
					);
		        $this->Pengumuman_model->update_pengumuman($id,$data);
				$this->session->set_flashdata('pengumuman', 'success_edit');
				redirect('backend/user/C_Pengumuman/index');
	}else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
}