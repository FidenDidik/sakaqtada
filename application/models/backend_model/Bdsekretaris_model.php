<?php
class Bdsekretaris_model extends CI_Model
{
    
    function __construct()
    {
        # code...
        parent:: __construct();
    }
     public function view(){
        $this->db->select('*');
        $this->db->from('bdsekretaris');
        $this->db->order_by('id_bdsekretaris');
        $query = $this->db->get();
        return $query;
    }
    public function insert_bdsekretaris ($data){
        $this->db->insert('bdsekretaris',$data);
    }
    public function delete_bdsekretaris($id){
        $this->db->where('id_bdsekretaris', $id);
        $this->db->delete('bdsekretaris');
    }
    public function show_id($data){
    $this->db->select('*');
    $this->db->from('bdsekretaris');
    $this->db->where('id_bdsekretaris', $data);
    $query = $this->db->get();
    $result = $query->result();
    return $result;
    }
// Update Query For Selected karir
    public function update_Bdsekretaris($id,$data){
    $this->db->where('id_bdsekretaris', $id);
    $this->db->update('bdsekretaris', $data);
    }
}


