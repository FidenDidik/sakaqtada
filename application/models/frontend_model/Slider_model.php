<?php
class Slider_model extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
    }
  
     function view_slider(){
        $this->db->select('*');
        $this->db->from('slider');
        $this->db->order_by('id_slider', 'DESC');
        $query = $this->db->get();
        return $query;
     }
     
    public function detail($id)
	{
		$row = $this->db->where('id_slider',$id)->limit(1)->get('slider');
		return $row;
	}
   
}



