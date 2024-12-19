<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Datainventaris extends CI_Controller {

	public  function __construct(){
	parent::__construct();
	$this->load->helper(array('url','download','html','form'));
	$this->load->database();
	$this->load->model("backend_model/Datainventaris_model");
	}
	public function index() {
		if($this->session->user_login === TRUE) {
			$query['data'] = $this->Datainventaris_model->view();
			$this->load->view('backend/template_user/data/view_datainventaris', $query);
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function add_datainventaris() {
		if($this->session->user_login === TRUE) {
			$this->load->view('backend/template_user/data/view_adddatainventaris');
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function save_datainventaris() {
		if($this->session->user_login === TRUE) {
			// set rules untuk validasi
			$this->form_validation->set_rules('asal_tanah', 'asal_tanah', 'trim|required');
            $this->form_validation->set_rules('luas', 'luas', 'trim|required');
			$this->form_validation->set_rules('no_sertifikat', 'no_sertifikat', 'trim|required');
			$this->form_validation->set_rules('peroleh_tahun', 'peroleh_tahun', 'trim|required');
            $this->form_validation->set_rules('peruntukan', 'peruntukan', 'trim|required');
			$this->form_validation->set_rules('lokasi', 'lokasi', 'trim|required');
			$this->form_validation->set_rules('sumber_dari', 'sumber_dari', 'trim|required');
            $this->form_validation->set_rules('pelepasan', 'pelepasan', 'trim|required');
			$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
			
			if($this->form_validation->run() === FALSE) {
			 	$this->load->view('backend/template_user/data/view_datainventaris');
			} else {
				$data = array(
				
					'asal_tanah' => $this->input->post('asal_tanah'),
                    'luas' => $this->input->post('luas'),
                    'no_sertifikat' => $this->input->post('no_sertifikat'),	
					'peroleh_tahun' => $this->input->post('peroleh_tahun'),
                    'peruntukan' => $this->input->post('peruntukan'),
                    'lokasi' => $this->input->post('lokasi'),
					'sumber_dari' => $this->input->post('sumber_dari'),
                    'pelepasan' => $this->input->post('pelepasan'),
                    'keterangan' => $this->input->post('keterangan')

				);
				$this->Datainventaris_model->insert_datainventaris($data);
				$this->session->set_flashdata('datainventaris', 'success_add');
				redirect('backend/user/C_Datainventaris/index');
				}		
		    } else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function delete_datainventaris(){
		if($this->session->user_login === TRUE) {
		$id = $this->uri->segment(5);
		$this->Datainventaris_model->delete_datainventaris($id,$data);
				
				$this->session->set_flashdata('datainventaris', 'success_delete');
				redirect('backend/user/C_Datainventaris/index');
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function edit_datainventaris() {
		if($this->session->userdata('user_login') === TRUE) {
			$id = $this->uri->segment(5);
			$query['data'] = $this->Datainventaris_model->show_id($id);
			$this->load->view('backend/template_user/data/view_updatedatainventaris',$query);
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function update_datainventaris(){
		if($this->session->user_login === TRUE) {
	    $id = $this->input->post('id_datainventaris');
		$data = array(
                  'asal_tanah' => $this->input->post('asal_tanah'),
                    'luas' => $this->input->post('luas'),
                    'no_sertifikat' => $this->input->post('no_sertifikat'),	
					'peroleh_tahun' => $this->input->post('peroleh_tahun'),
                    'peruntukan' => $this->input->post('peruntukan'),
                    'lokasi' => $this->input->post('lokasi'),
					'sumber_dari' => $this->input->post('sumber_dari'),
                    'pelepasan' => $this->input->post('pelepasan'),
                    'keterangan' => $this->input->post('keterangan')
					);

		        $this->Datainventaris_model->update_datainventaris($id,$data);
				$this->session->set_flashdata('datainventaris', 'success_edit');
				redirect('backend/user/C_datainventaris/index');
	    }else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
}