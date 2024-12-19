<?php

class Datapendidikan_model extends CI_Model
{
    
    function __construct()
    {
        # code...
        parent:: __construct();
    }
     public function view(){
        $this->db->select('*');
        $this->db->from('datapendidikan');
        $this->db->order_by('id_datapendidikan');
        $query = $this->db->get();
        return $query;
    }
    public function insert_datapendidikan ($data){
        $this->db->insert('datapendidikan',$data);
    }
    public function delete_datapendidikan($id){
        $this->db->where('id_datapendidikan', $id);
        $this->db->delete('datapendidikan');
    }
    public function show_id($data){
        $this->db->select('*');
        $this->db->from('datapendidikan');
        $this->db->where('id_datapendidikan', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
// Update Query For Selected karir
    public function update_datapendidikan($id,$data){
    $this->db->where('id_datapendidikan', $id);
    $this->db->update('datapendidikan', $data);
    }
}
