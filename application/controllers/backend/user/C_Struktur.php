<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_Struktur extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','download','html','form'));
		$this->load->database();
		$this->load->model('backend_model/Struktur_model');
		$this->load->library(['form_validation','session']);
	}
	public function index(){
		if($this->session->user_login === TRUE) {
		$data = [

			'struktur'	=> $this->Struktur_model->all()
		];
		$this->load->view('backend/template_user/profile/view_struktur', $data);
		} else {
				$this->session->set_flashdata('login', 'bypass');
				redirect('backend/Login');
			}
		}
	public function add(){
		if($this->session->user_login === TRUE) {
		$rules = 	[
				        [
				                'field' => 'judul',
				                'label' => 'Judul',
				                'rules' => ''
				        ]
					];

		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('backend/profile/add_struktur');
		}
		else
		{
			$config =	[
							'upload_path'	=> './uploads/struktur/',
	            			'allowed_types' => 'gif|jpg|png',
            			];

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload())
            {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('backend/template_user/profile/add_struktur', $error);
            }
            else
            {
                    $file = $this->upload->data();
                    //print_r($file);
                    $data = [
                    			'file' 	=> 'uploads/struktur/' . $file['file_name'],
                    			'judul'   => set_value('judul')
                    		];
                    $this->Struktur_model->create($data);
					$this->session->set_flashdata('message','New image has been added..');
					redirect('backend/user/C_Struktur/index');
            }
        }
		} else {
				$this->session->set_flashdata('login', 'bypass');
				redirect('backend/Login');
			}
		}
	public function edit($id){
		if($this->session->user_login === TRUE) {
		$rules = 	[
				        [
				                'field' => 'judul',
				                'label' => 'Judul',
								'rules' => 'required'
				        ]
					];
		$this->form_validation->set_rules($rules);
		$image = $this->Struktur_model->find($id)->row();

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('backend/template_user/profile/view_editstruktur',['image'=>$image]);
		}
		else
		{
			if(isset($_FILES["userfile"]["name"]))
			{
				/* Start Uploading File */
				$config =	[
								'upload_path'	=> './uploads/struktur/',
		            			'allowed_types' => 'gif|jpg|png',
	            			];

	            $this->load->library('upload', $config);

	            if ( ! $this->upload->do_upload())
	            {
	                    $error = array('error' => $this->upload->display_errors());
						$this->load->view('backend/template_user/profile/view_editstruktur',['image'=>$image,'error'=>$error]);
	            }
	            else
	            {
	                    $file = $this->upload->data();
	                    $data['file'] = 'uploads/struktur/' . $file['file_name'];
						unlink($image->file);
	            }
			}
                        $data['judul']		= set_value('judul');
                        
			$this->Struktur_model->update($id,$data);
			$this->session->set_flashdata('message','New image has been updated..');
			redirect('backend/user/C_Struktur/index');
		}
		} else {
				$this->session->set_flashdata('login', 'bypass');
				redirect('backend/Login');
			}
		}
	public function delete($id){
		if($this->session->user_login === TRUE) {
		$this->Struktur_model->delete($id);
		$this->session->set_flashdata('message','Image has been deleted..');
		redirect('backend/user/C_Struktur/index');
	
        } else {
				$this->session->set_flashdata('login', 'bypass');
				redirect('backend/Login');
			}
		}
	}
