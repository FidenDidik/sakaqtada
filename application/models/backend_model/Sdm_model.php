<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sdm_model extends CI_Model {

    public function all()
    {
        $result = $this->db->get('sdm');
        return $result;
    }

    public function find($id)
    {
        $row = $this->db->where('id_sdm',$id)->limit(1)->get('sdm');
        return $row;
    }

    public function create($data)
    {
        try{
            $this->db->insert('sdm', $data);
            return true;
        }catch(Exception $e){
            return $e;
        }
    }

    public function update($id, $data)
    {
        try{
            $this->db->where('id_sdm',$id)->limit(1)->update('sdm', $data);
            return true;
        }catch(Exception $e){
            return $e;
        }
    }

    public function delete($id)
    {
        try {
            $this->db->where('id_sdm',$id)->delete('sdm');
            return true;
        }

        //catch exception
        catch(Exception $e) {
          echo $e->getMessage();
        }
    }
}
