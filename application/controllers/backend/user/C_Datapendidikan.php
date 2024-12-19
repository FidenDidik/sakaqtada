<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Datapendidikan extends CI_Controller {

	public  function __construct(){
	parent::__construct();
	$this->load->helper(array('url','download','html','form'));
	$this->load->database();
	$this->load->model("backend_model/Datapendidikan_model");
	}
	public function index() {
		if($this->session->user_login === TRUE) {
			$query['data'] = $this->Datapendidikan_model->view();
			$this->load->view('backend/template_user/data/view_datapendidikan', $query);
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function add_datapendidikan() {
		if($this->session->user_login === TRUE) {
			$this->load->view('backend/template_user/data/view_adddatapendidikan');
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function save_datapendidikan() {
		if($this->session->user_login === TRUE) {
			// set rules untuk validasi
			$this->form_validation->set_rules('nama_rt', 'nama_rt', 'trim|required');
			$this->form_validation->set_rules('sd', 'sd', 'trim|required');
            $this->form_validation->set_rules('smp', 'smp', 'trim|required');
			$this->form_validation->set_rules('slta', 'slta', 'trim|required');
            $this->form_validation->set_rules('d1', 'd1', 'trim|required');
            $this->form_validation->set_rules('d2', 'd2', 'trim|required');
            $this->form_validation->set_rules('d3', 'd3', 'trim|required');
            $this->form_validation->set_rules('s1', 's1', 'trim|required');
            $this->form_validation->set_rules('s2', 's2', 'trim|required');
            $this->form_validation->set_rules('s3', 's3', 'trim|required');
			$this->form_validation->set_rules('tidak_tamatSD', 'tidak_tamatSD', 'trim|required');
			$this->form_validation->set_rules('tidak_sekolah', 'tidak_sekolah', 'trim|required');



			if($this->form_validation->run() === FALSE) {
			 	$this->load->view('backend/template_user/data/view_datapendidikan');
			} else {
				$data = array(
					'nama_rt' => $this->input->post('nama_rt'),
					'sd' => $this->input->post('sd'),
                    'smp' => $this->input->post('smp'),
                    'slta' => $this->input->post('slta'),
                    'd1' => $this->input->post('d1'),
                    'd2' => $this->input->post('d2'),
                    'd3' => $this->input->post('d3'),
                    's1' => $this->input->post('s1'),
                    's2' => $this->input->post('s2'),
                    's3' => $this->input->post('s3'),
					'tidak_tamatSD' => $this->input->post('tidak_tamatSD'),
					'tidak_sekolah' => $this->input->post('tidak_sekolah')
				);
				$this->Datapendidikan_model->insert_datapendidikan($data);
				$this->session->set_flashdata('datapendidikan', 'success_add');
				redirect('backend/user/C_Datapendidikan/index');
				}		
		    } else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function delete_datapendidikan(){
		if($this->session->user_login === TRUE) {
		$id = $this->uri->segment(5);
		$this->Datapendidikan_model->delete_datapendidikan($id);
				
				$this->session->set_flashdata('datapendidikan', 'success_delete');
				redirect('backend/user/C_Datapendidikan/index');
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function edit_datapendidikan() {
		if($this->session->userdata('user_login') === TRUE) {
			$id = $this->uri->segment(5);
			$query['data'] = $this->Datapendidikan_model->show_id($id);
			$this->load->view('backend/template_user/data/view_updatedatapendidikan',$query);
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function update_datapendidikan(){
		if($this->session->user_login === TRUE) {
	    $id = $this->input->post('id_datapendidikan');
		$data = array(
            
					'sd' => $this->input->post('sd'),
					'smp' => $this->input->post('smp'),
					'slta' => $this->input->post('slta'),
					'd1' => $this->input->post('d1'),
					'd2' => $this->input->post('d2'),
					'd3' => $this->input->post('d3'),
					's1' => $this->input->post('s1'),
					's2' => $this->input->post('s2'),
					's3' => $this->input->post('s3'),
					'tidak_tamatSD' => $this->input->post('tidak_tamatSD'),
					'tidak_sekolah' => $this->input->post('tidak_sekolah')
					);

		        $this->Datapendidikan_model->update_datapendidikan($id,$data);
				$this->session->set_flashdata('datapendidikan', 'success_edit');
				redirect('backend/user/C_datapendidikan/index');
	    }else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
}