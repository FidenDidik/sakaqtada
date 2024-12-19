<?php
class Agenda_model extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
    }
  
     function view_agenda(){
        $this->db->select('*');
        $this->db->from('agenda');
        $this->db->limit('5');
        $this->db->order_by('id_agenda', 'DESC');

        $query = $this->db->get();
        return $query;
     }
     function view_agendamenu(){
        $this->db->select('*');
        $this->db->from('agenda');
        $this->db->order_by('id_agenda', 'DESC');
        $query = $this->db->get();
        return $query;
     }
     
    public function detail($data)
	{
            $this->db->select('*');
            $this->db->from('agenda');
            $this->db->where('id_agenda', $data);
            $query = $this->db->get();
            $result = $query->result();
            return $result;
        
	}
}



