<?php
class Jejakpendapat_model extends CI_Model
{
    function __construct()
    {
        # code...
        parent:: __construct();
    }
    function insert_jejakpendapat($data){
        $this->db->insert('jejakpendapat',$data);
        
    }
    function view_jejakpendapat(){
        $this->db->select('*');
        $this->db->from('jejakpendapat');
        $this->db->order_by('id_jejakpendapat');
        $query = $this->db->get();
        return $query;
     }
}