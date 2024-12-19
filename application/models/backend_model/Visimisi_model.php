<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visimisi_model extends CI_Model {

    public function all()
    {
        $result = $this->db->get('visimisi');
        return $result;
    }

    public function find($id)
    {
        $row = $this->db->where('id_visimisi',$id)->limit(1)->get('visimisi');
        return $row;
    }

    public function create($data)
    {
        try{
            $this->db->insert('visimisi', $data);
            return true;
        }catch(Exception $e){
            return $e;
        }
    }

    public function update($id, $data)
    {
        try{
            $this->db->where('id_visimisi',$id)->limit(1)->update('visimisi', $data);
            return true;
        }catch(Exception $e){
            return $e;
        }
    }

    public function delete($id)
    {
        try {
            $this->db->where('id_visimisi',$id)->delete('visimisi');
            return true;
        }

        //catch exception
        catch(Exception $e) {
          echo $e->getMessage();
        }
    }
}
