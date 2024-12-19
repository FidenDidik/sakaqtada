<?php
class Galeri_model extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
    }
  
     function view_galeri(){
        $this->db->select('*');
        $this->db->from('galeri');
        $this->db->limit('6');
        $this->db->order_by('id_galeri', 'DESC');
        $query = $this->db->get();
        return $query;
     }
     function view_galeridetail(){
        $this->db->select('*');
        $this->db->from('galeri');
        $this->db->order_by('id_galeri', 'DESC');
        $query = $this->db->get();
        return $query;
     }
    public function detail($id)
	{
		$row = $this->db->where('id_galeri',$id)->limit(1)->get('galeri');
		return $row;
	}
   
}

