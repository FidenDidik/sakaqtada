<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_Imageberita extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','download','html','form'));
		$this->load->model('backend_model/Imageberita_model');
		$this->load->database();
		$this->load->library(['form_validation','session']);
	}
	public function index(){
		if($this->session->user_login === TRUE) {
		$data = [

			'berita'	=>$this->Imageberita_model->all()
		];
		$this->load->view('backend/template_user/berita/view_berita', $data);
	}else {
            $this->session->set_flashdata('login', 'bypass');
            redirect('backend/Login');
        }
    }
	public function edit($id){
		if($this->session->user_login === TRUE) {
		$rules = 	[
				[
					'field' =>'judul',
					'label' => 'Judul',
					'rules' => 'required'
				],
				[
					'field' =>'deskripsi',
					'label' => 'Deskripsi',
					'rules' => 'required'
			  	],
				
				[
					'field' =>'kategori',
					'label' => 'Kategori',
					'rules' => 'required'
				],
				[
					'field' =>'tanggal',
					'label' => 'Tanggal',
					'rules' => 'required'
				], 
				[
					'field' =>'jam',
					'label' => 'Jam',
					'rules' => 'required'
				]	        
              ];
		$this->form_validation->set_rules($rules);
		$image = $this->Imageberita_model->find($id)->row();
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('backend/template_user/berita/view_updateimage',['image'=>$image]);
		}
		else
		{
			if(isset($_FILES["userfile"]["name"]))
			{
				/* Start Uploading File */
				$config =	[
						'upload_path'	=> './uploads/berita/',
		            			'allowed_types' => 'gif|jpg|png',
		            			/*'max_size'      => 10000,
	            			    'max_width'     => 1024,
	            			    'max_height'    => 768,*/
	            			      ];

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload())
	            {
	                    $error = array('error' => $this->upload->display_errors());
			      $this->load->view('backend/template_user/berita/view_berita',['image'=>$image,'error'=>$error]);
	            }
	            else
	            {
	                    $file = $this->upload->data();
	                    $data['file'] = 'uploads/berita/' . $file['file_name'];
			      unlink($image->file);
	            }
			}               			
                     $data['judul']	    = set_value('judul');
			$data['deskripsi']	    = set_value('deskripsi');
			$data['kategori']	    = set_value('kategori');
			$data['tanggal']	    = set_value('tanggal');
			$data['jam']	           = set_value('jam');
			
			$this->Imageberita_model->update($id,$data);
			$this->session->set_flashdata('message','New image has been updated..');
			redirect('backend/user/C_Berita/index');
		}
	}else {
            $this->session->set_flashdata('login', 'bypass');
            redirect('backend/Login');
        }
    }
	public function delete($id){
	if($this->session->user_login === TRUE) {
		$this->Dokter_model->delete($id);
		$this->session->set_flashdata('message','Image has been deleted..');
		redirect('backend/profile/C_Sekilas/index');
	}else {
            $this->session->set_flashdata('login', 'bypass');
            redirect('backend/Login');
        }
    }
    public function detail($id){
	   if($this->session->user_login === TRUE) {
		$image = $this->Sekilas_model->detail($id)->row();
		$this->load->view('backend/profile/view_sekilas',['image'=>$image]);
	}else {
            $this->session->set_flashdata('login', 'bypass');
            redirect('backend/Login');
        }
    }
}
