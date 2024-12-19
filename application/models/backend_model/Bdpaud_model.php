<?php

class Bdpaud_model extends CI_Model
{
    
    function __construct()
    {
        # code...
        parent:: __construct();
    }
     public function view(){
        $this->db->select('*');
        $this->db->from('bdpaud');
        $this->db->order_by('id_bdpaud');
        $query = $this->db->get();
        return $query;
    }
    public function insert_bdsd ($data){
        $this->db->insert('bdpaud',$data);
    }
    public function delete_bdsd($id){
        $this->db->where('id_bdpaud', $id);
        $this->db->delete('bdpaud');
    }
    public function show_id($data){
        $this->db->select('*');
        $this->db->from('bdpaud');
        $this->db->where('id_bdpaud', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
// Update Query For Selected karir
    public function update_bdpaud($id,$data){
    $this->db->where('id_bdpaud', $id);
    $this->db->update('bdpaud', $data);
    }
}
