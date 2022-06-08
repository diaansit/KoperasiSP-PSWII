<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
        $this->load->model('akun_m');
        $data['row']=$this->akun_m->get();
        
		$this->template->load('template', 'user/user_v', $data);
		
	}
		
	public function tambah(){
		$this->template->load('template', 'user/user_v', $data);
		$this->load->view('user/user_v');

	}
	public function tambah_aksi(){
		$id_akun		= $this->input->post('id_akun');
		$username   	= $this->input->post('username');
		$password		= $this->input->post('password');
		$nama			= $this->input->post('nama');
		$role			= $this->input->post('role');
		
		$data  = array(
			'id_akun'		=> $id_akun,
			'username'		=> $username,
			'password'		=> $password,
			'nama'			=> $nama,
			'role'	 		=> $role,
			);
			$this->akun_m->input_data($data, 'akun');
			redirect('user/index');
	}

	public function hapus($id_akun)
	{
		$where = array('id_akun'=>$id_akun);
		$this->akun_m->hapus_data($where, 'akun');
		redirect ('user/index');
	}

	

	
}
