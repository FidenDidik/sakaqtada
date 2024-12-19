<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur_model extends CI_Model {

	public function all()
	{
		$result = $this->db->get('struktur');
		return $result;
	}

	public function find($id)
	{
		$row = $this->db->where('id_struktur',$id)->limit(1)->get('struktur');
		return $row;
	}

	public function create($data)
	{
		try{
			$this->db->insert('struktur', $data);
			return true;
		}catch(Exception $e){
			return $e;
		}
	}

	public function update($id, $data)
	{
		try{
			$this->db->where('id_struktur',$id)->limit(1)->update('struktur', $data);
			return true;
		}catch(Exception $e){
			return $e;
		}
	}

	public function delete($id)
	{
		try {
			$this->db->where('id_struktur',$id)->delete('struktur');
			return true;
		}

		//catch exception
		catch(Exception $e) {
		  echo $e->getMessage();
		}
	}
}