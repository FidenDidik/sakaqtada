<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Changepass extends CI_Controller {

	public  function __construct(){
	parent::__construct();
		$this->load->model('backend_model/Changepass_model');
	
	}
	public function index() {
		if($this->session->user_login === TRUE) {
            $this->load->view('backend/template_user/changepass/view_changepass');
		} else {
			$this->session->set_flashdata('login', 'bypass');
			redirect('Login');
		}
	}
	
 #public function changepass()
  #  {
   # 	$this->load->view('regis/view_change_pass');
    #}

    public function change_pass()
    {
    	if($this->session->user_login === TRUE) {
		
			if($this->input->post('submit'))
    		{
	    	$username = $this->session->userdata('username');
	    	$pass_lama = $this->input->post('pass_lama');
	        $pass_baru = $this->input->post('pass_baru');
	        $konf_pass_baru = $this->input->post('konf_pass_baru');
	        $sql="SELECT password FROM pegawai WHERE username= '$username'";
	  		$result= $this->db->query($sql);
	  		foreach ($result-> result() as $row) 
	  		{
	  			$password=$row->password;
	  		}
	  		if(md5($pass_lama) != $password)
	  		{
	  			$this->session->set_flashdata('notif', '<div class="alert alert-danger">Password lama tidak sama dengan password yang tersimpan dalam sistem</div>');
                $this->load->view('backend/template_user/changepass/view_changepass');
	  		}
	  		elseif ($pass_baru !=$konf_pass_baru) 
	  		{
	  			$this->session->set_flashdata('notif', '<div class="alert alert-danger">Password baru tidak sama dengan konfirmasi password baru</div>');
                  $this->load->view('backend/template_user/changepass/view_changepass');
	  		}
	  		else
	  		{
	  			$data_password = array('password' =>md5($pass_baru));
                $where = array('username' => $username);
                $this->db->where($where);
                $this->db->update('pegawai', $data_password);

                $this->session->set_flashdata('notif', '<div class="alert alert-success">Password baru telah disimpan</div>');
                $this->load->view('backend/template_user/changepass/view_changepass');
	  		}
  		}
  		else
	  	{
            $this->load->view('backend/template_user/changepass/view_changepass');
	  	}
		}
		else 
		{
				$this->session->set_flashdata('login','notlogin');
				redirect('Login');
		}
    	
    }
}
