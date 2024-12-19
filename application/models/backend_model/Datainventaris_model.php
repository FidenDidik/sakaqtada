<?php

class Datainventaris_model extends CI_Model
{
    
    function __construct()
    {
        # code...
        parent:: __construct();
    }
     public function view(){
        $this->db->select('*');
        $this->db->from('datainventaris');
        $this->db->order_by('id_datainventaris', 'DESC');
        $query = $this->db->get();
        return $query;
    }
    public function insert_datainventaris ($data){
        $this->db->insert('datainventaris',$data);
    }
    public function delete_datainventaris($id){
        $this->db->where('id_datainventaris', $id);
        $this->db->delete('datainventaris');
    }
    public function show_id($data){
        $this->db->select('*');
        $this->db->from('datainventaris');
        $this->db->where('id_datainventaris', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
// Update Query For Selected karir
    public function update_datainventaris($id,$data){
    $this->db->where('id_datainventaris', $id);
    $this->db->update('datainventaris', $data);
    }
}
