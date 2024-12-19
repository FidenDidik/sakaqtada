<?php

class Bdsd_model extends CI_Model
{
    
    function __construct()
    {
        # code...
        parent:: __construct();
    }
     public function view(){
        $this->db->select('*');
        $this->db->from('bdsd');
        $this->db->order_by('id_bdsd');
        $query = $this->db->get();
        return $query;
    }
    public function insert_bdsd ($data){
        $this->db->insert('bdsd',$data);
    }
    public function delete_bdsd($id){
        $this->db->where('id_bdsd', $id);
        $this->db->delete('bdsd');
    }
    public function show_id($data){
    $this->db->select('*');
    $this->db->from('bdsd');
    $this->db->where('id_bdsd', $data);
    $query = $this->db->get();
    $result = $query->result();
    return $result;
    }
// Update Query For Selected karir
    public function update_bdsd($id,$data){
    $this->db->where('id_bdsd', $id);
    $this->db->update('bdsd', $data);
    }
}
