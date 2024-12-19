<?php

class Data_model extends CI_Model
{
    
    function __construct()
    {
        # code...
        parent:: __construct();
    }
     public function view_datapendidikan(){
        $this->db->select('*');
        $this->db->from('datapendidikan');
        $this->db->order_by('id_datapendidikan');
        $query = $this->db->get();
        return $query;
    }
    public function view_dataguru(){
        $this->db->select('*');
        $this->db->from('dataguru');
        $this->db->order_by('id_dataguru', 'DESC');
        $query = $this->db->get();
        return $query;
    }
   

}
