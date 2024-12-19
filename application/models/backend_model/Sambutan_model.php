<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sambutan_model extends CI_Model {

    public function all()
    {
        $result = $this->db->get('sambutan');
        return $result;
    }

    public function find($id)
    {
        $row = $this->db->where('id_sambutan',$id)->limit(1)->get('sambutan');
        return $row;
    }

    public function create($data)
    {
        try{
            $this->db->insert('sambutan', $data);
            return true;
        }catch(Exception $e){
            return $e;
        }
    }

    public function update($id, $data)
    {
        try{
            $this->db->where('id_sambutan',$id)->limit(1)->update('sambutan', $data);
            return true;
        }catch(Exception $e){
            return $e;
        }
    }

    public function delete($id)
    {
        try {
            $this->db->where('id_sambutan',$id)->delete('sambutan');
            return true;
        }

        //catch exception
        catch(Exception $e) {
          echo $e->getMessage();
        }
    }
}
