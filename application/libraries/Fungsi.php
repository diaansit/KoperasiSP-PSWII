<?php

Class Fungsi {

    protected $ci;

    function __construct(){
        $this->ci =& get_instance();
    }

    function user_login(){
        $this->ci->load->model('akun_m');
        $idakun = $this->ci->session->userdata('idakun');
        $user_data = $this->ci->akun_m->get($idakun)->row();
        return $user_data;
    }
}