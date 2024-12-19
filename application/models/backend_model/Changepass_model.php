<?php

class Changepass_model extends CI_Model
{
	public function __construct()
	{	
		parent::__construct();
	}

	public function cek_user($uname, $upass)
	{
		$this->db->select('*');
		$this->db->from('pegawai');
		$this->db->where('username',$uname);
		$this->db->where('password',$upass);

		$query = $this->db->get();

		if($query->num_rows()>0)
		{
			return $query->row();
		}
		return NULL;
	}

	public function insertus($data){
		$this->db->insert('pegawai',$data);
	}

	public function m_viewus(){
		$view= $this->db->get('pegawai');
		return $view;
	}

	public function m_resetus($uid, $data){
		$this->db->where('id_pegawai',$uid);
		$this->db->update('pegawai',$data);
	}

	public function m_deleteus($uid){
		$this->db->where('id_pegawai',$uid);
		$this->db->delete('pegawai');	
	}

	public function m_view_updateus($uid){
		$this->db->where('id_pegawai',$uid);
		$query= $this->db->get('pegawai');
		return $query;	
	}

	public function m_updateus($id,$data){
		$this->db->where('id_pegawai', $id);
		$this->db->update('pegawai',$data);
	}
}
