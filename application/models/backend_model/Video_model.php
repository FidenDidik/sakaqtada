<?php

class Video_model extends CI_Model
{
    
    function __construct()
    {
        # code...
        parent:: __construct();
    }
     public function view(){
        $this->db->select('*');
        $this->db->from('video');
        $this->db->order_by('id_video', 'DESC');
        $query = $this->db->get();
        return $query;
    }
    public function insert_video ($data){
        $this->db->insert('video',$data);
    }
    public function delete_video($id){
        $this->db->where('id_video', $id);
        $this->db->delete('video');
    }
    public function show_id($data){
        $this->db->select('*');
        $this->db->from('video');
        $this->db->where('id_video', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
// Update Query For Selected karir
    public function update_video($id,$data){
    $this->db->where('id_video', $id);
    $this->db->update('video', $data);
    }
}
