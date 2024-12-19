<?php
class Profile_model extends CI_Model
{
    function __construct()
    {
        # code...
        parent:: __construct();
    }
    function view_tentang(){
        $this->db->select('*');
        $this->db->from('sekilas');
        $query = $this->db->get();
        return $query;
    }
    function view_visimisi(){
        $this->db->select('*');
        $this->db->from('visimisi');
        $query = $this->db->get();
        return $query;
    }
    function view_sdm(){
        $this->db->select('*');
        $this->db->from('sdm');
        $this->db->order_by('id_sdm');
        $query = $this->db->get();
        return $query;
    }
    function view_struktur(){
        $this->db->select('*');
        $this->db->from('struktur');
        $query = $this->db->get();
        return $query;
    }
    function view_sambutan(){
        $this->db->select('*');
        $this->db->from('sambutan');
        $query = $this->db->get();
        return $query;
    }
    public function detail($id)
	{
		$row = $this->db->where('id_berita',$id)->limit(1)->get('berita');
		return $row;
	}

    
   

}


