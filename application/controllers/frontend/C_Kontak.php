<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Kontak extends CI_Controller {

	public  function __construct(){
	parent::__construct();
	$this->load->helper(array('url','download','html','form'));
	$this->load->database();
	$this->load->model("frontend_model/Kontak_model");
	}
	public function view_kontak() {
              $query['kontak'] = $this->Kontak_model->view_kontak();
              $this->load->view('frontend/kontak/view_kontak', $query);
	}
       public function save_kontak() {
		
              // set rules untuk validasi
              $this->form_validation->set_rules('nama', 'nama', 'trim|required');
              $this->form_validation->set_rules('phone', 'phone', 'trim|required');
              $this->form_validation->set_rules('email', 'email', 'trim|required');		
              $this->form_validation->set_rules('pekerjaan', 'pekerjaan', 'trim|required');
              $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
              $this->form_validation->set_rules('komentar', 'komentar', 'trim|required');
              $this->form_validation->set_rules('status', 'status', 'trim|required');
              
              if($this->form_validation->run() === FALSE) {
                     $this->load->view('Login');
              } else {
                     $tgl = date("Y-m-d");
                     
                     $data = array(
                            'nama' => $this->input->post('nama'),
                            'phone' => $this->input->post('phone'),
                            'email' => $this->input->post('email'),
                            'pekerjaan' => $this->input->post('pekerjaan'),
                            'alamat' => $this->input->post('alamat'),
                            'komentar' => $this->input->post('komentar'),
                            'status' => $this->input->post('status'),
                            'date' => $tgl
                     );
                     $this->Kontak_model->insert_kontak($data);
                     
                     $this->session->set_flashdata('kontak', 'success_add');
                     redirect('frontend/C_Kontak/view_kontak');
              }
       }
}