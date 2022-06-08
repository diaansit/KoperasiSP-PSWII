<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grafik_m extends CI_Model{
	function get_data(){
		$query = $this->db->query("SELECT tanggal_simpanan, SUM(jumlah_simpanan) AS jumlah_simpanan FROM simpanan GROUP BY tanggal_simpanan");
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
}
}