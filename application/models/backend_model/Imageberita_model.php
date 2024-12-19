<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imageberita_model extends CI_Model {

    public function all()
    {
        $result = $this->db->get('berita');
        return $result;
    }

    public function find($id)
    {
        $row = $this->db->where('id_berita',$id)->limit(1)->get('berita');
        return $row;
    }

    public function create($data)
    {
        try{
            $this->db->insert('berita', $data);
            return true;
        }catch(Exception $e){
            return $e;
        }
    }

    public function update($id, $data)
    {
        try{
            $this->db->where('id_berita',$id)->limit(1)->update('berita', $data);
            return true;
        }catch(Exception $e){
            return $e;
        }
    }

    public function delete($id)
    {
        try {
            $this->db->where('id_berita',$id)->delete('berita');
            return true;
        }

        //catch exception
        catch(Exception $e) {
          echo $e->getMessage();
        }
    }
}
