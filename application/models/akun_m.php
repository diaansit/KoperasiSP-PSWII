<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun_m extends CI_Model {

    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('akun');
        $this->db->where('username', $post['username']);
        $this->db->where('password', $post['password']);
        $query = $this->db->get();
        return $query;
    }

    public function get($id= NULL)
    {
        $this->db->from('akun');
        if($id != NULL){
            $this->db->where('id_akun', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function input_data($data,$table){
		
		$this->db->insert($table, $data);
	}
	public function hapus_data($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
}