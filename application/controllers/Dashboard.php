<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		
		$this->template->load('template', 'dashboard');
		
	}
	public function index2()
	{
		$this->template->load('template_anggota', 'dashboard');
	}
}
