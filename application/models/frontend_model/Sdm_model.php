<?php
class Sdm_model extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
    }
  
     function view_sdm(){
        $this->db->select('*');
        $this->db->from('sdm');
        $this->db->order_by('id_sdm');
        $query = $this->db->get();
        return $query;
     }
    public function detail($id_sdm)
	{
		$query = $this->db->where('id_sdm',$id_sdm)->limit(1)->get('sdm');
        return $query;
	}
   
}

