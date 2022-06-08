<?php
	class m_simpanan extends CI_Model{
		public function tampil_data(){
			return $this->db->get('simpanan');
		}
		public function get_data($limit, $start){
			return $this->db->get('simpanan', $limit, $start);
		}

		public function input_data($data,$table){
			$this->db->insert($table,$data);
		}
		public function count(){
			return $this->db->get('simpanan')->num_rows();
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
		public function detail_data($id_simpanan=NULL){
		$query=$this->db->get_where('simpanan', array('id_simpanan'))->row();
		return $query;
		}
		public function get_keyword($keyword){
			$this->db->select('*');
			$this->db->from('simpanan');
			$this->db->like('id_simpanan', $keyword);
			$this->db->or_like('id_anggota', $keyword);
			$this->db->or_like('nama_anggota', $keyword);
			$this->db->or_like('jenis_simpanan', $keyword);
			$this->db->or_like('jumlah_simpanan', $keyword);
			$this->db->or_like('tanggal_simpanan', $keyword);

			return $this->db->get()->result();
		}
	}
?>