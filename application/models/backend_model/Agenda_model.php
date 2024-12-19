<?php
class Agenda_model extends CI_Model
{
    
    function __construct()
    {
        # code...
        parent:: __construct();
    }
     public function view(){
        $this->db->select('*');
        $this->db->from('agenda');
        $this->db->order_by('id_agenda', 'DESC');
        $query = $this->db->get();
        return $query;
    }
    public function insert_agenda ($data){
        $this->db->insert('agenda',$data);
    }
    public function delete_agenda($id){
        $this->db->where('id_agenda', $id);
        $this->db->delete('agenda');
    }
    public function show_id($data){
    $this->db->select('*');
    $this->db->from('agenda');
    $this->db->where('id_agenda', $data);
    $query = $this->db->get();
    $result = $query->result();
    return $result;
    }
// Update Query For Selected karir
    public function update_agenda($id,$data){
    $this->db->where('id_agenda', $id);
    $this->db->update('agenda', $data);
    }
}


