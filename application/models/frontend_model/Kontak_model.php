<?php
class Kontak_model extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
    }
  
     function view_kontak(){
        $this->db->select('*');
        $this->db->from('kontak');
        $this->db->limit('10');
        $this->db->order_by('id_kontak', 'DESC');
        $query = $this->db->get();
        return $query;
     }
     public function insert_kontak ($data){
       $this->db->insert('kontak',$data);
   }
}
