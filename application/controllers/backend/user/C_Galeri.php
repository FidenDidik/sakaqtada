<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_Galeri extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','download','html','form'));
		$this->load->model('backend_model/Galeri_model');
		$this->load->database();
		$this->load->library(['form_validation','session']);
	}
	public function index(){
		if($this->session->user_login === TRUE) {
		$data = [

			'galeri'	=>$this->Galeri_model->all()
		];
		$this->load->view('backend/template_user/galeri/view_galeri', $data);
	}else {
            $this->session->set_flashdata('login', 'bypass');
            redirect('backend/Login');
        }
    }
	public function add(){
		if($this->session->user_login === TRUE) {
		$rules = 	[
				        [
							'field' => 'nama',
							'label' => 'Nama',
							'rules' => 'required'
						]
					
					];
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('backend/template_user/galeri/view_addgaleri');
		}
		else
		{
			/* Start Uploading File */
			$config =	[
							'upload_path'	=> './uploads/galeri/',
	            			'allowed_types' => 'gif|jpg|png|pdf',
	            			/*'max_size'      => 10000,
	            			    'max_width'     => 1024,
	            			    'max_height'    => 768,*/
	            		
            			];
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload())
            {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('backend/template_user/galeri/view_galeri', $error);
            }
            else
            {
                    $file = $this->upload->data();
                    //print_r($file);
                    $data = [
                    			'file' 	 => 'uploads/galeri/' . $file['file_name'],
                    			'nama'   => set_value('nama')
                    		];
                    $this->Galeri_model->create($data);
					$this->session->set_flashdata('message','New image has been added..');
					redirect('backend/user/C_Galeri/index');
            }
		}
		}else {
            $this->session->set_flashdata('login', 'bypass');
            redirect('backend/Login');
       	 }
    }
	public function edit($id){
		if($this->session->user_login === TRUE) {
		$rules = 	[
						[
							'field' => 'nama',
							'label' => 'Nama',
							'rules' => 'required'
						]
                   		        
                 ];
		$this->form_validation->set_rules($rules);
		$image = $this->Galeri_model->find($id)->row();
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('backend/template_user/galeri/view_updategaleri',['image'=>$image]);
		}
		else
		{
			if(isset($_FILES["userfile"]["name"]))
			{
				/* Start Uploading File */
				$config =	[
								'upload_path'	=> './uploads/galeri/',
		            			'allowed_types' => 'gif|jpg|png',
		            			/*'max_size'      => 10000,
	            			    'max_width'     => 1024,
	            			    'max_height'    => 768,*/
	            			];

	            $this->load->library('upload', $config);

	            if ( ! $this->upload->do_upload())
	            {
	                    $error = array('error' => $this->upload->display_errors());
						$this->load->view('backend/template_user/galeri/view_updategaleri',['image'=>$image,'error'=>$error]);
	            }
	            else
	            {
	                    $file = $this->upload->data();
	                    $data['file'] = 'uploads/galeri/' . $file['file_name'];
						unlink($image->file);
	            }
			}               			
            $data['nama']	  = set_value('nama');
		
			
			$this->Galeri_model->update($id,$data);
			$this->session->set_flashdata('message','New image has been updated..');
			redirect('backend/user/C_Galeri/index');
		}
	}else {
            $this->session->set_flashdata('login', 'bypass');
            redirect('backend/Login');
        }
    }
	public function delete($id){
	if($this->session->user_login === TRUE) {
		$this->Galeri_model->delete($id);
		$this->session->set_flashdata('message','Image has been deleted..');
		redirect('backend/user/C_Galeri/index');
	}else {
            $this->session->set_flashdata('login', 'bypass');
            redirect('backend/Login');
        }
    }
    public function detail($id){
	   if($this->session->user_login === TRUE) {
		$image = $this->Galeri_model->detail($id)->row();
		$this->load->view('backend/galeri/view_galeri',['image'=>$image]);
	}else {
            $this->session->set_flashdata('login', 'bypass');
            redirect('backend/Login');
        }
    }
}
