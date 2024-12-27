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
    public function view_datainventaris(){
        $this->db->select('*');
        $this->db->from('datainventaris');
        $this->db->order_by('id_datainventaris', 'DESC');
        $query = $this->db->get();
        return $query;
    }
   

}
