<?php
class Berita_model extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
    }
  
     function view_berita(){
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->order_by('id_berita', 'DESC');
        $this->db->limit('6');
        $query = $this->db->get();
        return $query;
     }
     function view_kegiatandesa(){
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->where('kategori="Kegiatan Desa"');
        $this->db->order_by('id_berita', 'DESC');
        $query = $this->db->get();
        return $query;
     }
     function view_infokabupaten(){
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->where('kategori="Info Kabupaten"');
        $this->db->order_by('id_berita', 'DESC');
        $query = $this->db->get();
        return $query;
     }
     function view_infonasional(){
        $this->db->select('*');
        $this->db->from('berita');
        $this->db->where('kategori="Info Nasional"');
        $this->db->order_by('id_berita', 'DESC');
        $query = $this->db->get();
        return $query;
     }
    public function detail($id)
	{
		$row = $this->db->where('id_berita',$id)->limit(1)->get('berita');
		return $row;
	}
   
}



