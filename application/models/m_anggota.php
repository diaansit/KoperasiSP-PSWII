<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_anggota extends CI_Model{
	public function tampil_data()
	{
		return $this->db->get('anggota');
	}
	public function tampil($limit, $start)
	{
		return $this->db->get('anggota',$limit, $start);
	}

	public function count(){
		return $this->db->get('anggota')->num_rows();
	}
	
	public function input_data($data,$table){
		
		$this->db->insert($table, $data);
	}
	
	public function hapus_data($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function edit_data($where, $table){
		return $this->db->get_where($table,$where);
	}
	public function update_data($where,$data, $table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function detail_data($id_anggota=NULL){
		$query=$this->db->get_where('anggota', array('id_anggota'))->row();
		return $query;
	}
	public function get_keywoard($keyword){
		$this->db->select('*');
		$this->db->from('anggota');
		$this->db->like('id_anggota', $keyword);
		$this->db->or_like('nama_anggota', $keyword);
		$this->db->or_like('alamat_lengkap', $keyword);
		$this->db->or_like('tanggal_lahir', $keyword);
		$this->db->or_like('email', $keyword);
		$this->db->or_like('no_telepon', $keyword);

		return $this->db->get()->result();
	}

}