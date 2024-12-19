<?php

class Login_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	
	public function cek_user($uname, $upass) {
		$this->db->select('*');
		$this->db->from('pegawai');
		$this->db->where('username', $uname);
		$this->db->where('password', $upass);
		
		$query = $this->db->get();
		
		if($query->num_rows() > 0) {
			return $query->row();
		}
		
		return NULL;
	}
}


/* <?php

class Login_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	
	public function cek_user($uname, $upass, $table) {
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('username', $uname);
		$this->db->where('user_pass', $upass);
		
		$query = $this->db->get();
		
		if($query->num_rows() > 0) {
			return $query->row();
		}
		
		return NULL;
	}
}
*/
