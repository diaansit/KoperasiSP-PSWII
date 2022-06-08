<?php

class M_product extends CI_Model {
   
    public function get_data ()
    {

        return $this->db->get('jenis_pinjaman');
    }
    public function get_uang()
    {
  
        return $this->db->get('jenis_simpanan');


    }    
  

    }


?>