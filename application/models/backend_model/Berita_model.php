<?php

class Berita_model extends CI_Model
{
    
    function __construct()
    {
        # code...
        parent:: __construct();
    }
    public function view(){
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->order_by('id_berita', 'DESC');
        $query = $this->db->get();
        return $query;
    }
     public function view_disdikpora(){
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->where('kategori="Kegiatan Disdikpora"');
        $this->db->order_by('id_berita', 'DESC');
        $query = $this->db->get();
        return $query;
    }
    public function view_infonasional(){
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->where('kategori="Info Nasional"');
        $this->db->order_by('id_berita', 'DESC');
        $query = $this->db->get();
        return $query;
    }
    public function view_infobeasiswa(){
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->where('kategori="Info Beasiswa"');
        $this->db->order_by('id_berita', 'DESC');
        $query = $this->db->get();
        return $query;
    }
    
    public function insert_berita ($data){
        $this->db->insert('berita',$data);
    }
    public function delete_berita($id){
        $this->db->where('id_berita', $id);
        $this->db->delete('berita');
    }
    public function show_id($data){
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->where('id_berita', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
// Update Query For Selected karir
    public function update_berita($id,$data){
    $this->db->where('id_berita', $id);
    $this->db->update('berita', $data);
    }
}
