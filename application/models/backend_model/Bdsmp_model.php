<?php

class Bdsmp_model extends CI_Model
{
    
    function __construct()
    {
        # code...
        parent:: __construct();
    }
     public function view(){
        $this->db->select('*');
        $this->db->from('bdsmp');
        $this->db->order_by('id_bdsmp');
        $query = $this->db->get();
        return $query;
    }
    public function insert_bdsd ($data){
        $this->db->insert('bdsmp',$data);
    }
    public function delete_bdsd($id){
        $this->db->where('id_bdsmp', $id);
        $this->db->delete('bdsmp');
    }
    public function show_id($data){
        $this->db->select('*');
        $this->db->from('bdsmp');
        $this->db->where('id_bdsmp', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
// Update Query For Selected karir
    public function update_bdsd($id,$data){
    $this->db->where('id_bdsmp', $id);
    $this->db->update('bdsmp', $data);
    }
}
