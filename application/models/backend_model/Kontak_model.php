<?php
class Kontak_model extends CI_Model
{
    
    function __construct()
    {
        # code...
        parent:: __construct();
    }
     public function view(){
        $this->db->select('*');
        $this->db->from('kontak');
        $this->db->order_by('id_kontak', 'DESC');
        $query = $this->db->get();
        return $query;
    }
    public function insert_kontak ($data){
        $this->db->insert('kontak',$data);
    }
    public function delete_kontak($id){
        $this->db->where('id_kontak', $id);
        $this->db->delete('kontak');
    }
    public function show_id($id){
    $this->db->select('*');
    $this->db->from('kontak');
    $this->db->where('id_kontak', $id);
    $query = $this->db->get();
    $result = $query->result();
    return $result;
    }
// Update Query For Selected karir
    public function update_kontak($id,$data){
    $this->db->where('id_kontak', $id);
    $this->db->update('kontak', $data);
    }
}


