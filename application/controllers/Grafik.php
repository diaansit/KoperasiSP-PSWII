<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grafik extends CI_Controller {

    function index(){
        $this->load->model('grafik_m');
        $x['data']=$this->grafik_m->get_data();
        $this->template->load('template', 'grafik_v', $x);
    }

    function index_anggota(){
      $this->load->model('grafik_m');
      $x['data']=$this->grafik_m->get_data();
      $this->template->load('template_anggota', 'grafik_v', $x);
    }
}
    