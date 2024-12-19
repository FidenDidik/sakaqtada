<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_Sdm extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','download','html','form'));
		$this->load->model('backend_model/Sdm_model');
		$this->load->database();
		$this->load->library(['form_validation','session']);
	}
	public function index(){
		if($this->session->user_login === TRUE) {
		$data = [

			'sdm'	=>$this->Sdm_model->all()
		];
		$this->load->view('backend/template_user/profile/view_sdm', $data);
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
							'field' => 'nip',
							'label' => 'Nip',
							'rules' => 'required'
						],
						[
							'field' => 'kelahiran',
							'label' => 'Kelahiran',
							'rules' => 'required'
						],
						[
							'field' => 'pangkat',
							'label' => 'Pangkat',
							'rules' => 'required'
						],	
						[
							'field' => 'pendidikan',
							'label' => 'Pendidikan',
							'rules' => 'required'
						], 
						[
							'field' => 'jabatan',
							'label' => 'Jabatan',
							'rules' => 'required'
						]         
					];
		$this->form_validation->set_rules($rules);
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('backend/template_user/profile/view_addsdm');
		}
		else
		{
			/* Start Uploading File */
			$config =	[
							'upload_path'	=> './uploads/profile/',
	            			'allowed_types' => 'gif|jpg|png|pdf|mp4',
	            			/*'max_size'      => 10000,
	            			    'max_width'     => 1024,
	            			    'max_height'    => 768,*/
	            		
            			];
            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload())
            {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('backend/template_user/profile/view_addsdm', $error);
            }
            else
            {
                    $file = $this->upload->data();
                    //print_r($file);
                    $data = [
                    			'file' 	 => 'uploads/profile/' . $file['file_name'],
                    			'nama'   => set_value('nama'),
								'nip'   => set_value('nip'),
								'kelahiran'   => set_value('kelahiran'),
								'pangkat'   => set_value('pangkat'),
								'pendidikan'   => set_value('pendidikan'),
								'jabatan'   => set_value('jabatan'),
                    		
                    		];
                    $this->Sdm_model->create($data);
					$this->session->set_flashdata('message','New image has been added..');
					redirect('backend/user/C_Sdm/index');
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
					],
					[
						'field' => 'nip',
						'label' => 'Nip',
						'rules' => 'required'
					],
					[
						'field' => 'kelahiran',
						'label' => 'Kelahiran',
						'rules' => 'required'
					],
					[
						'field' => 'pangkat',
						'label' => 'Pangkat',
						'rules' => 'required'
					],	
					[
						'field' => 'pendidikan',
						'label' => 'Pendidikan',
						'rules' => 'required'
					], 
					[
						'field' => 'jabatan',
						'label' => 'Jabatan',
						'rules' => 'required'
					]  		        
                 ];
		$this->form_validation->set_rules($rules);
		$image = $this->Sdm_model->find($id)->row();
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('backend/template_user/profile/view_updatesdm',['image'=>$image]);
		}
		else
		{
			if(isset($_FILES["userfile"]["name"]))
			{
				/* Start Uploading File */
				$config =	[
								'upload_path'	=> './uploads/profile/',
		            			'allowed_types' => 'gif|jpg|png|mp4',
		            			/*'max_size'      => 10000,
	            			    'max_width'     => 1024,
	            			    'max_height'    => 768,*/
	            			];

	            $this->load->library('upload', $config);

	            if ( ! $this->upload->do_upload())
	            {
	                    $error = array('error' => $this->upload->display_errors());
						$this->load->view('backend/template_user/profile/view_updatesdm',['image'=>$image,'error'=>$error]);
	            }
	            else
	            {
	                    $file = $this->upload->data();
	                    $data['file'] = 'uploads/profile/' . $file['file_name'];
						unlink($image->file);
	            }
			}               			
            $data['nama']		    = set_value('nama');
			$data['nip']		    = set_value('nip');
			$data['kelahiran']		= set_value('kelahiran');
			$data['pangkat']		= set_value('pangkat');
			$data['pendidikan']		= set_value('pendidikan');
			$data['jabatan']		= set_value('jabatan');
		
			$this->Sdm_model->update($id,$data);
			$this->session->set_flashdata('message','Visi dan Misi telah terupdate');
			redirect('backend/user/C_Sdm/index');
		}
	}else {
            $this->session->set_flashdata('login', 'bypass');
            redirect('backend/Login');
        }
    }
	public function delete($id){
	if($this->session->user_login === TRUE) {
		$this->Sdm_model->delete($id);
		$this->session->set_flashdata('message','Visi dan Misi telah  deleted..');
		redirect('backend/user/C_Sdm/index');
	}else {
            $this->session->set_flashdata('login', 'bypass');
            redirect('backend/Login');
        }
    }
    public function detail($id){
	   if($this->session->user_login === TRUE) {
		$image = $this->Sdm_model->detail($id)->row();
		$this->load->view('backend/profile/view_sdm',['image'=>$image]);
	}else {
            $this->session->set_flashdata('login', 'bypass');
            redirect('backend/Login');
        }
    }
}
