<?php
	class m_pinjaman extends CI_Model{
		public function tampil_data(){
			return $this->db->get('pinjaman');
		}

		public function input_data($data,$table){
			$this->db->insert($table,$data);
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
		public function detail_data($id_pinjaman=NULL){
		$query=$this->db->get_where('pinjaman', array('id_pinjaman'))->row();
		return $query;
		}
	}
?>