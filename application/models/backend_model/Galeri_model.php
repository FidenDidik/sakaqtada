<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri_model extends CI_Model {

    public function all()
    {
        $result = $this->db->get('galeri');
        return $result;
    }

    public function find($id)
    {
        $row = $this->db->where('id_galeri',$id)->limit(1)->get('galeri');
        return $row;
    }

    public function create($data)
    {
        try{
            $this->db->insert('galeri', $data);
            return true;
        }catch(Exception $e){
            return $e;
        }
    }

    public function update($id, $data)
    {
        try{
            $this->db->where('id_galeri',$id)->limit(1)->update('galeri', $data);
            return true;
        }catch(Exception $e){
            return $e;
        }
    }

    public function delete($id)
    {
        try {
            $this->db->where('id_galeri',$id)->delete('galeri');
            return true;
        }

        //catch exception
        catch(Exception $e) {
          echo $e->getMessage();
        }
    }
}
