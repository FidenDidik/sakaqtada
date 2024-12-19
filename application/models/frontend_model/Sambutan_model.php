<?php
class Sambutan_model extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
    }
  
     function view_sambutan(){
        $this->db->select('*');
        $this->db->from('sambutan');
       

        $query = $this->db->get();
        return $query;
     }
     
    public function detail($id)
	{
		$row = $this->db->where('id_sambutan',$id)->limit(1)->get('sambutan');
		return $row;
	}
   
}



