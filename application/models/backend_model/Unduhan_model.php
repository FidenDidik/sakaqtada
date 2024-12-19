<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Unduhan_model extends CI_Model {
    public function all()
    {
        $result = $this->db->get('unduhan');
        return $result;
    }
    public function detail($data){
       $this->db->select('*');
       $this->db->from('unduhan');
       $this->db->where('id_unduhan', $data);
       $query = $this->db->get();
       $result = $query->result();
       return $result;
    }
    public function find($id)
	{
		$row = $this->db->where('id_unduhan',$id)->limit(1)->get('unduhan');
		return $row;
	}

    public function create($data)
    {
        try{
            $this->db->insert('unduhan', $data);
            return true;
        }catch(Exception $e){
            return $e;
        }
    }
    public function update($id, $data)
    {
        try{
            $this->db->where('id_unduhan',$id)->limit(1)->update('unduhan', $data);
            return true;
        }catch(Exception $e){
            return $e;
        }
    }
    public function delete($id)
    {
        try {
            $this->db->where('id_unduhan',$id)->delete('unduhan');
            return true;
        }

        //catch exception
        catch(Exception $e) {
          echo $e->getMessage();
        }
    }
}
