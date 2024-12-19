<?php
class Unitkerja_model extends CI_Model
{
    
    function __construct()
    {
        # code...
        parent:: __construct();
    }
     public function view(){
        $this->db->select('*');
        $this->db->from('bdsekretaris');
        $query = $this->db->get();
        return $query;
    }
    public function viewbdsd(){
        $this->db->select('*');
        $this->db->from('bdsd');
        $query = $this->db->get();
        return $query;
    }
    public function viewbdsmp(){
        $this->db->select('*');
        $this->db->from('bdsmp');
        $query = $this->db->get();
        return $query;
    }
    public function viewbdpaud(){
        $this->db->select('*');
        $this->db->from('bdpaud');
        $query = $this->db->get();
        return $query;
    }
    public function viewbdolahraga(){
        $this->db->select('*');
        $this->db->from('bdolahraga');
        $query = $this->db->get();
        return $query;
    }
    
}