<?php

class Product extends CI_Controller {

    public function index () {
        $this->load->model('m_product');
        $data['product']= $this->m_product->get_data()->result();
       
        $data['uang']= $this->m_product->get_uang()->result();

        $this->template->load('template', 'v_product', $data);
       

    }

    public function index_anggota () {
        $this->load->model('m_product');
        $data['product']= $this->m_product->get_data()->result();
       
        $data['uang']= $this->m_product->get_uang()->result();

        $this->template->load('template_anggota', 'v_product', $data);
       

    }

}   


?>
