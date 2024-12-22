<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Berita extends CI_Controller {

	public  function __construct(){
	parent::__construct();
	$this->load->helper(array('url','download','html','form'));
	$this->load->database();
	$this->load->model("backend_model/Berita_model");
	}
	public function index() {
		if($this->session->user_login === TRUE) {
			$query['data'] = $this->Berita_model->view();
			$this->load->view('backend/template_user/berita/view_berita', $query);
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
    public function view_kegiatandesa() {
		if($this->session->user_login === TRUE) {
			$query['data'] = $this->Berita_model->view_kegiatandesa();
			$this->load->view('backend/template_user/berita/view_berita', $query);
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function view_infonasional() {
		if($this->session->user_login === TRUE) {
			$query['data'] = $this->Berita_model->view_infonasional();
			$this->load->view('backend/template_user/berita/view_berita', $query);
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function view_infokabupaten() {
		if($this->session->user_login === TRUE) {
			$query['data'] = $this->Berita_model->view_infokabupaten();
			$this->load->view('backend/template_user/berita/view_berita', $query);
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function add_berita() {
		if($this->session->user_login === TRUE) {
			$this->load->view('backend/template_user/berita/view_addberita');
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function save_berita() {
		if($this->session->user_login === TRUE) {
			// set rules untuk validasiz
			$this->form_validation->set_rules('judul', 'judul', 'trim|required');
			$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
			$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');
			$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
			$this->form_validation->set_rules('kategori', 'kategori');
			$this->form_validation->set_rules('tanggal', 'tanggal');
			$this->form_validation->set_rules('jam', 'jam');
         
			if($this->form_validation->run() === FALSE) {
			 	$this->load->view('backend/template_user/unit_kerja/view_berita');
			} else {
				$data = array(
					'judul' => $this->input->post('judul'),
                    'deskripsi' => $this->input->post('deskripsi'),
				    'uraian' => $this->input->post('uraian'),
                    'kategori' => $this->input->post('kategori'),
					'tanggal' => $this->input->post('tanggal'),
					'jam' => $this->input->post('jam'),
                   		
				);
				$this->Berita_model->insert_berita($data);
				$this->session->set_flashdata('berita', 'success_add');
				redirect('backend/user/C_berita/index');
				}		
		    } else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function delete_berita(){
		if($this->session->user_login === TRUE) {
		$id = $this->uri->segment(5);
		$this->Berita_model->delete_berita($id);
				
				$this->session->set_flashdata('berita', 'success_delete');
				redirect('backend/user/C_berita/index');
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function edit_berita() {
		if($this->session->userdata('user_login') === TRUE) {
			$id = $this->uri->segment(5);
			$query['data'] = $this->Berita_model->show_id($id);
			$this->load->view('backend/template_user/berita/view_updateberita',$query);
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
	public function update_berita(){
		if($this->session->user_login === TRUE) {
	    $id = $this->input->post('id_berita');
		$data = array(
                    'judul' => $this->input->post('judul'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'uraian' => $this->input->post('uraian'),
                    'kategori' => $this->input->post('kategori'),
					'tanggal' => $this->input->post('tanggal'),
					'jam' => $this->input->post('jam')
					);
		        $this->Berita_model->update_berita($id,$data);
				$this->session->set_flashdata('berita', 'success_edit');
				redirect('backend/user/C_berita/index');
	}else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('backend/Login');
		}
	}
}