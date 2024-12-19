<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Kontak extends CI_Controller {

	public  function __construct(){
	parent::__construct();
	$this->load->helper(array('url','download','html','form'));
	$this->load->database();
	$this->load->model("backend_model/Kontak_model");
	}
	public function index() {
		if($this->session->user_login === TRUE) {
			$query['data'] = $this->Kontak_model->view();
			$this->load->view('backend/template_user/kontak/view_kontak', $query);
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function update_kontak(){
		if($this->session->user_login === TRUE) {
	       $id = $this->input->post('id_kontak');
		$tgl = date("Y-m-d");
		$data = array(
                  
                    'jawaban' => $this->input->post('jawaban'),
		      'status' => $this->input->post('status'),
		      'tanggal_jawab' => $tgl
              );
		$this->Kontak_model->update_kontak($id,$data);
              $this->session->set_flashdata('kontak', 'success_edit');
              redirect('backend/user/C_Kontak/index');
	}else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
       public function delete_kontak(){
		if($this->session->user_login === TRUE) {
		$id = $this->uri->segment(5);
		$this->Kontak_model->delete_kontak($id,$data);
                     
                     $this->session->set_flashdata('kontak', 'success_delete');
                     redirect('backend/user/C_Kontak/index');
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function jawab_kontak() {
		if($this->session->userdata('user_login') === TRUE) {
			$id = $this->uri->segment(5);
			$query['data'] = $this->Kontak_model->show_id($id);
			$this->load->view('backend/template_user/kontak/view_jawab',$query);
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
}