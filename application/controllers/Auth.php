<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		check_already_login();
		//posisi folder untuk menyimpan gambar captcha 
		$path = './assets/captcha/';
		//membuat folder apabila folder captcha tidak ada                
		if ( !file_exists($path) )
		{
			$create = mkdir($path, 0777);
			if ( !$create)                        
			return;
		}
		//Menampilkan huruf acak untuk dijadikan captcha                
		$word = array_merge(range('0', '9'), range('A', 'Z'));                
		$acak = shuffle($word);                
		$str  = substr(implode($word), 0, 5);                
		//Menyimpan huruf acak tersebut kedalam session                
		$data_ses = array('captcha_str' => $str);                
		$this->session->set_userdata($data_ses);
 
		 //array untuk menampilkan gambar captcha                
		 $vals = array(                    
					 'word'      => $str, //huruf acak yang telah dibuat diatas                    
					'img_path'   => $path, //path untuk menyimpangambar captcha          
					'img_url'    => base_url().'assets/captcha/',//url untuk menampilkan gambar captcha                    
					'img_width'  => '150', //lebar gambar captcha                    
					'img_height' => 40, //tinggi gambar captcha                    
					'expiration' => 7200 //expired time per captcha                
		);
		$cap = create_captcha($vals);                
		$data['captcha_image'] = $cap['image']; //variable array untuk menampilkan captcha pada view   
 
		$this->load->view('login',$data); //load view    
	}

	public function process()
	{	
		//cek apakah captcha yang diinputkan oleh User sudah benar atau belum
		$po_captcha = $this->input->post('captcha');
		if($po_captcha != $this->session->userdata('captcha_str')){
			echo "<script>
					alert('captcha salah');
					window.location='".site_url('auth/login')."';
					</script>";
				
		}else{
			$post = $this->input->post(null, TRUE);
			if(isset($_POST['login'])){
				$this->load->model('akun_m');
				$query = $this->akun_m->login($post);
				if($query->num_rows()>0){
					$row = $query->row();
					$params = array(
						'idakun' => $row->id_akun,
						'role' =>$row->role
					);
					$this->session->set_userdata($params);
					if($this->session->userdata('role')== 'admin'){ 
					echo "<script>
						alert('Login Berhasil');
						window.location='".site_url('dashboard/index')."';
						</script>";
					}
					else{
						echo "<script>
						alert('Login Berhasil');
						window.location='".site_url('dashboard/index2')."';
						</script>";
					}
				}	
				else{
					echo "<script>
						alert('Login Gagal, Username/Password Salah');
						window.location='".site_url('auth/login')."';
						</script>";
				}
			}
		}
	}
	
	public function logout()
	{
		$params = array('idakun', 'role');
		$this->session->unset_userdata($params);
		redirect('auth/login');
	}
}
