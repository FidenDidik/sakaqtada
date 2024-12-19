<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekilas_model extends CI_Model {

    public function all()
    {
        $result = $this->db->get('sekilas');
        return $result;
    }

    public function find($id)
    {
        $row = $this->db->where('id_sekilas',$id)->limit(1)->get('sekilas');
        return $row;
    }

    public function create($data)
    {
        try{
            $this->db->insert('sekilas', $data);
            return true;
        }catch(Exception $e){
            return $e;
        }
    }

    public function update($id, $data)
    {
        try{
            $this->db->where('id_sekilas',$id)->limit(1)->update('sekilas', $data);
            return true;
        }catch(Exception $e){
            return $e;
        }
    }

    public function delete($id)
    {
        try {
            $this->db->where('id_sekilas',$id)->delete('sekilas');
            return true;
        }

        //catch exception
        catch(Exception $e) {
          echo $e->getMessage();
        }
    }
}
