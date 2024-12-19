<?php

class Video_model extends CI_Model
{
    
    function __construct()
    {
        # code...
        parent:: __construct();
    }
     public function view_video(){
        $this->db->select('*');
        $this->db->from('video');
        $this->db->limit('6');
        $this->db->order_by('id_video', 'DESC');
        $query = $this->db->get();
        return $query;
    }
    public function view_videodetail(){
        $this->db->select('*');
        $this->db->from('video');
        $this->db->order_by('id_video', 'DESC');
        $query = $this->db->get();
        return $query;
    }
}
