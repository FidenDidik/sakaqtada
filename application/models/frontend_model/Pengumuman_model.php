<?php
class Pengumuman_model extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
    }
     function view_pengumuman(){
        $this->db->select('*');
        $this->db->from('pengumuman');
        $this->db->limit('10');
        $this->db->order_by('id_pengumuman', 'DESC');
        $query = $this->db->get();
        return $query;
     }
     function view_pengumumanmenu(){
        $this->db->select('*');
        $this->db->from('pengumuman');
        $this->db->order_by('id_pengumuman', 'DESC');
        $query = $this->db->get();
        return $query;
     }
     public function detail_pengumuman($data)
	{
            $this->db->select('*');
            $this->db->from('pengumuman');
            $this->db->where('id_pengumuman', $data);
            $query = $this->db->get();
            $result = $query->result();
            return $result;
        
	}
   
}



