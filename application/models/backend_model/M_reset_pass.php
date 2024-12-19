
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_reset_pass extends CI_Model {

	public function all()
	{
		$result = $this->db->get('pegawai');
		return $result;
	}
	public function detail($data){
    $this->db->select('*');
    $this->db->from('pegawai');

    $this->db->where('id_pegawai', $data);


    $query = $this->db->get();
    $result = $query->result();
    return $result;
    }
}
