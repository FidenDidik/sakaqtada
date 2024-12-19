<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Unduhan_model extends CI_Model {
   
   
       function view_informasipublik(){
              $this->db->select('*');
              $this->db->from('unduhan');
              $this->db->where('kategori="Informasi Publik"');
              $this->db->order_by('id_unduhan');
              $query = $this->db->get();
              return $query;
           }
       function view_infoapbd(){
              $this->db->select('*');
              $this->db->from('unduhan');
              $this->db->where('kategori="Info APBD"');
              $this->db->order_by('id_unduhan');
              $query = $this->db->get();
              return $query;
       }
       function view_infolakip(){
              $this->db->select('*');
              $this->db->from('unduhan');
              $this->db->where('kategori="Info LAKIP"');
              $this->db->order_by('id_unduhan');
              $query = $this->db->get();
              return $query;
       }
       function view_keputusanbupati(){
              $this->db->select('*');
              $this->db->from('unduhan');
              $this->db->where('kategori="Keputusan Bupati"');
              $this->db->order_by('id_unduhan');
              $query = $this->db->get();
              return $query;
       }
       function view_inforenstra(){
              $this->db->select('*');
              $this->db->from('unduhan');
              $this->db->where('kategori="Info Renstra"');
              $this->db->order_by('id_unduhan');
              $query = $this->db->get();
              return $query;
       }
       function view_lkpj(){
              $this->db->select('*');
              $this->db->from('unduhan');
              $this->db->where('kategori="LKPJ"');
              $this->db->order_by('id_unduhan');
              $query = $this->db->get();
              return $query;
       }
       function view_rpjmd(){
              $this->db->select('*');
              $this->db->from('unduhan');
              $this->db->where('kategori="RPJMD"');
              $this->db->order_by('id_unduhan');
              $query = $this->db->get();
              return $query;
       }
       function view_perbub(){
              $this->db->select('*');
              $this->db->from('unduhan');
              $this->db->where('kategori="Peraturan Bupati"');
              $this->db->order_by('id_unduhan');
              $query = $this->db->get();
              return $query;
       }
       function view_perda(){
              $this->db->select('*');
              $this->db->from('unduhan');
              $this->db->where('kategori="Peraturan Daerah"');
              $this->db->order_by('id_unduhan');
              $query = $this->db->get();
              return $query;
       }

       public function detail($data){
              $this->db->select('*');
              $this->db->from('unduhan');
              $this->db->where('id_unduhan', $data);
              $query = $this->db->get();
              $result = $query->result();
              return $result;
       }
    
}
