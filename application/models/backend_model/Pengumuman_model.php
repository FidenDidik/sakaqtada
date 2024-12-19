<?php
class Pengumuman_model extends CI_Model
{
    
    function __construct()
    {
        # code...
        parent:: __construct();
    }
     public function view(){
        $this->db->select('*');
        $this->db->from('pengumuman');
        $this->db->order_by('id_pengumuman', 'DESC');
        $query = $this->db->get();
        return $query;
    }
    public function insert_pengumuman ($data){
        $this->db->insert('pengumuman',$data);
    }
    public function delete_pengumuman($id){
        $this->db->where('id_pengumuman', $id);
        $this->db->delete('pengumuman');
    }
    public function show_id($data){
    $this->db->select('*');
    $this->db->from('pengumuman');
    $this->db->where('id_pengumuman', $data);
    $query = $this->db->get();
    $result = $query->result();
    return $result;
    }
// Update Query For Selected karir
    public function update_pengumuman($id,$data){
    $this->db->where('id_pengumuman', $id);
    $this->db->update('pengumuman', $data);
    }
}


