<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider_model extends CI_Model {

    public function all()
    {
        $result = $this->db->get('slider');
        return $result;
    }

    public function find($id)
    {
        $row = $this->db->where('id_slider',$id)->limit(1)->get('slider');
        return $row;
    }

    public function create($data)
    {
        try{
            $this->db->insert('slider', $data);
            return true;
        }catch(Exception $e){
            return $e;
        }
    }

    public function update($id, $data)
    {
        try{
            $this->db->where('id_slider',$id)->limit(1)->update('slider', $data);
            return true;
        }catch(Exception $e){
            return $e;
        }
    }

    public function delete($id)
    {
        try {
            $this->db->where('id_slider',$id)->delete('slider');
            return true;
        }

        //catch exception
        catch(Exception $e) {
          echo $e->getMessage();
        }
    }
}
