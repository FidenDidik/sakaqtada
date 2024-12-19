<?php

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Login_model');

	}
	
	public function index() {
		$this->load->view('view_login');
	}
	
	public function cek_user_login() {
		// membuat rules untuk proses validasi
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		// menjalankan proses validasi
		if($this->form_validation->run() === FALSE) {
			$this->load->view('view_login');
			
		} else {
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			
			$cek = $this->Login_model->cek_user($username, $password);
			
			if($cek > 0) {
				// deklarasi variabel session dalam bentuk array
				$newdata = array(
					'id_pegawai' => $cek->id_pegawai,
					'nip'=> $cek->nip,
					'ttl'=> $cek->ttl,
					'first_name' => $cek->first_name,
					'last_name' => $cek->last_name,
					'username' => $cek->username,
					'level'=> $cek->level,
					'email'=> $cek->email,
					'bidang'=> $cek->bidang,
					'alamat'=> $cek->alamat,
					'no_hp'=> $cek->no_hp,
					'photo'=> $cek->photo,
					'email'=> $cek->email,
					'user_login' => TRUE
				);
				
				// set session
				$this->session->set_userdata($newdata); 
				if($cek->level === 'admin') {

					redirect('backend/admin/c_dashboard_admin');

				} else if($cek->level === 'user') {
					redirect('backend/user/c_dashboardUser');

				} else if($cek->level === 'bendahara') {
					redirect('bendahara/C_dashboard_bendahara');

				} else if($cek->level === 'sekre') {
					redirect('backend/user/sekre/C_dashboard_user');

				} else if($cek->level === 'kadis') {
					redirect('backend/user/kadis/C_dashboard_user');
		
				} else if($cek->level === 'kabid') {
					redirect('backend/user/kabid/C_dashboard_user');
				} else {
					redirect('C_dashboard');
				}

			} else {
				redirect('Login');
				
			}
		}redirect('Login');
	}
	
	public function logout() {
		$this->session->sess_destroy();
		redirect('Login');
	}
}
