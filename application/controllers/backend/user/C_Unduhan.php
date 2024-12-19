<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_Unduhan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','download','html','form'));
		$this->load->database();
		$this->load->library(['form_validation','session']);
              $this->load->model('backend_model/Unduhan_model');
	}
	public function index(){
		if($this->session->user_login === TRUE) {
		$data = [
		'unduhan'	=>$this->Unduhan_model->all()
		];
		$this->load->view('backend/template_user/infopublik/view_infopublik', $data);
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
				 ],
				 [
                                   'field' => 'kategori',
                                   'label' => 'Kategori',
                                   'rules' => 'required'
				 ]
					
				];
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('backend/template_user/infopublik/view_addinfopublik');
		}
		else
		{
			/* Start Uploading File */
			$config =	[
					'upload_path'	=> './uploads/unduhan/',
					'allowed_types' => 'gif|jpg|png|pdf',
	            			/*'max_size'      => 10000,
	            			    'max_width'     => 1024,
	            			    'max_height'    => 768,*/
	            		
            			];
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload())
            {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('backend/template_user/infopublik/view_infopublik', $error);
            }
            else
            {
                    $file = $this->upload->data();
                    //print_r($file);
                    $data = [
                    			'file' 	 => 'uploads/unduhan/' . $file['file_name'],
                    			'nama'  	 => set_value('nama'),
					'kategori'   => set_value('kategori'),

                    		];
			$this->Unduhan_model->create($data);
			$this->session->set_flashdata('message','New image has been added..');
			redirect('backend/user/C_Unduhan/index');
            }
		}
		}else {
            $this->session->set_flashdata('login', 'bypass');
            redirect('backend/Login');
       	 }
    }
	public function edit($id){
		if($this->session->user_login === TRUE) {
		$rules = [
				[
					'field' => 'nama',
					'label' => 'Nama',
					'rules' => 'required'
				], 
				[
					'field' => 'kategori',
					'label' => 'Kategori',
					'rules' => 'required'
				]    
                 	];
		$this->form_validation->set_rules($rules);
		$image = $this->Unduhan_model->find($id)->row();
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('backend/template_user/infopublik/view_updateinfopublik',['image'=>$image]);
		}
		else
		{
			if(isset($_FILES["userfile"]["name"]))
			{
				/* Start Uploading File */
				$config =	[
						'upload_path'	=> './uploads/unduhan/',
		            			'allowed_types' => 'gif|jpg|png|pdf',
		            			/*'max_size'      => 10000,
	            			    'max_width'     => 1024,
	            			    'max_height'    => 768,*/
	            			];
	            $this->load->library('upload', $config);

	            if ( ! $this->upload->do_upload())
	            {
	              $error = array('error' => $this->upload->display_errors());
                      $this->load->view('backend/template_user/infopublik/view_updateinfopublik',['image'=>$image,'error'=>$error]);
	            }
	            else
	            {
	                    $file = $this->upload->data();
	                    $data['file'] = 'uploads/unduhan/' . $file['file_name'];
			      unlink($image->file);
	            }
			}               			
                     $data['nama']	  = set_value('nama');
			$data['kategori']	  = set_value('kategori');

			$this->Unduhan_model->update($id,$data);
			$this->session->set_flashdata('message','New image has been updated..');
			redirect('backend/user/C_Unduhan/index');
			}
	}else {
            $this->session->set_flashdata('login', 'bypass');
            redirect('backend/Login');
        }
    }
	public function delete($id){
	if($this->session->user_login === TRUE) {
		$this->Unduhan_model->delete($id);
		$this->session->set_flashdata('message','Image has been deleted..');
		redirect('backend/user/C_Unduhan/index');
	}else {
            $this->session->set_flashdata('login', 'bypass');
            redirect('backend/Login');
        }
    }
    public function detail() {
	if($this->session->userdata('user_login') === TRUE) {
		$id = $this->uri->segment(5);
		$query['data'] = $this->Unduhan_model->detail($id);
		$this->load->view('backend/template_user/infopublik/view_infopublikpdf',$query);
	} else {
		$this->session->set_flashdata('login', 'bypass');
		redirect('backend/Login');
	}
}
}
