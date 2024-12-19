<?php

class Bdolahraga_model extends CI_Model
{
    
    function __construct()
    {
        # code...
        parent:: __construct();
    }
     public function view(){
        $this->db->select('*');
        $this->db->from('bdolahraga');
        $this->db->order_by('id_bdolahraga');
        $query = $this->db->get();
        return $query;
    }
    public function insert_bdsd ($data){
        $this->db->insert('bdolahraga',$data);
    }
    public function delete_bdsd($id){
        $this->db->where('id_bdolahraga', $id);
        $this->db->delete('bdolahraga');
    }
    public function show_id($data){
        $this->db->select('*');
        $this->db->from('bdolahraga');
        $this->db->where('id_bdolahraga', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
// Update Query For Selected karir
    public function update_bdolahraga($id,$data){
    $this->db->where('id_bdolahraga', $id);
    $this->db->update('bdolahraga', $data);
    }
}
