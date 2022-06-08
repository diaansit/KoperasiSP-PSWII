<?php
	class Simpanan extends CI_Controller{
		public function index(){
			$config['base_url'] = site_url('simpanan/index');
			$config['total_rows'] = $this->db->count_all('simpanan');
			$config['per_page'] = 5;
			$config['uri_segment'] =  3;
			$choice		= $config['total_rows']/ $config['per_page'];
			$config['num_links'] = floor($choice);

			$config['first_link']		= 'First';
			$config['last_link']		= 'Last';
			$config['next_link']		= 'Next';
			$config['prev_link']		= 'Prev';
			$config['full_tag_open']	= '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
			$config['full_tag_close']	= '</ul></nav></div>';
			$config['num_tag_open']		= '<li class="page-item"><span class="page-link">';
			$config['num_tag_close']	= '</span></li>';
			$config['cur_tag_open']		= '<li class="page-item active"><span class="page-link">';
			$config['cur_tag_close']	= '</span></li>';
			$config['next_tag_open']	= '<li class="page-item"><span class="page-link">';
			$config['next_tagl_close']	= '<span aria-hidden="true">&raquo</span></li>';
			$config['prev_tag_open']	= '<li class="page-item"><span class="page-link">';
			$config['prev_tagl_close']	= '</span>Next</li>';
			$config['first_tag_open']	= '<li class="page-item"><span class="page-link">';
			$config['first_tagl_close']	= '</span></li>';
			$config['last_tag_open']	= '<li class="page-item"><span class="page-link">';
			$config['last_tagl_close']	= '</span></li>';

			$this->pagination->initialize($config);
			$data['page'] = ($this->uri->segment(3))? $this->uri->segment(3) : 0;

			$data['simpanan'] = $this->m_simpanan->get_data($config['per_page'], $data['page'])->result();
			$data['pagination'] = $this->pagination->create_links();
			$this->template->load('template', 'simpanan/simpanan', $data);
		}

		public function tambah(){
			$this->template->load('template', 'simpanan/simpanan', $data);
			$this->load->view('simpanan/simpanan');
		}
		
		public function tambah_aksi(){
		$id_simpanan			= $this->input->post('id_simpanan');
		$id_anggota				= $this->input->post('id_anggota');
		$nama_anggota			= $this->input->post('nama_anggota');
		$jenis_simpanan			= $this->input->post('jenis_simpanan');
		$jumlah_simpanan		= $this->input->post('jumlah_simpanan');
		$tanggal_simpanan 		= $this->input->post('tanggal_simpanan');

		$data = array(
			'id_simpanan' 		 => $id_simpanan,
			'id_anggota' 	 	 => $id_anggota,
			'nama_anggota' 		 => $nama_anggota,
			'jenis_simpanan'	 => $jenis_simpanan,
			'jumlah_simpanan'	 => $jumlah_simpanan,
			'tanggal_simpanan'	 => $tanggal_simpanan,
		);

		$this->m_simpanan->input_data($data, 'simpanan');
		redirect('simpanan/index');
		}
		public function index_anggota(){
			$data['simpanan'] = $this->m_simpanan->tampil_data()->result();
			$this->template->load('template_anggota', 'simpanan/anggota_simpanan', $data);
		}

		public function tambah_aksi_anggota(){
		$id_simpanan			= $this->input->post('id_simpanan');
		$id_anggota				= $this->input->post('id_anggota');
		$nama_anggota			= $this->input->post('nama_anggota');
		$jenis_simpanan			= $this->input->post('jenis_simpanan');
		$jumlah_simpanan		= $this->input->post('jumlah_simpanan');
		$tanggal_simpanan 		= $this->input->post('tanggal_simpanan');

		$data = array(
			'id_simpanan' 		 => $id_simpanan,
			'id_anggota' 	 	 => $id_anggota,
			'nama_anggota' 		 => $nama_anggota,
			'jenis_simpanan'	 => $jenis_simpanan,
			'jumlah_simpanan'	 => $jumlah_simpanan,
			'tanggal_simpanan'	 => $tanggal_simpanan,
		);

		$this->m_simpanan->input_data($data, 'simpanan');
		echo "<script>
						alert('Data Simpanan Berhasil dikirim');
						window.location='".site_url('simpanan/index_anggota')."';
						</script>";
		}

		public function hapus($id_simpanan){
			$where = array('id_simpanan' => $id_simpanan);
			$this->m_simpanan->hapus_data($where, 'simpanan');
			redirect('simpanan/index');
		}
		
		public function edit($id_simpanan){
		$where = array ('id_simpanan'=>$id_simpanan);
		$data['simpanan'] = $this->m_simpanan->edit_data($where, 'simpanan')->result();
		$this->template->load('template', 'simpanan/edit', $data);
		}

		public function update(){
		$id_simpanan		= $this->input->post('id_simpanan');
		$id_anggota			= $this->input->post('id_anggota');
		$nama_anggota		= $this->input->post('nama_anggota');
		$jenis_simpanan		= $this->input->post('jenis_simpanan');
		$jumlah_simpanan	= $this->input->post('jumlah_simpanan');
		$tanggal_simpanan	= $this->input->post('tanggal_simpanan');
		
		$data  = array(
			'id_simpanan'	 	=> $id_simpanan,
			'id_anggota'	 	=> $id_anggota,
			'nama_anggota'	 	=> $nama_anggota,
			'jenis_simpanan'	=> $jenis_simpanan,
			'jumlah_simpanan'	=> $jumlah_simpanan,
			'tanggal_simpanan' 	=> $tanggal_simpanan,
			
			);
		$where = array(
			'id_simpanan'=>$id_simpanan
			);

		$this->m_simpanan->update_data($where, $data, 'simpanan');
		redirect('simpanan/index');

		}

		public function detail($id_simpanan){
		$this->load->model('m_simpanan');
		$detail = $this->m_simpanan->detail_data($id_simpanan);
		$data['detail']=$detail;
		$this->template->load('template', 'simpanan/detail', $data);
		}

		public function cetak(){
		$data['simpanan'] = $this->m_simpanan->tampil_data("simpanan")->result();//tabel
		$this->load->view('simpanan/print_simpanan', $data);
		}

		public function pdf(){
			$this->load->library('dompdf_gen');

			$data['simpanan'] = $this->m_simpanan->tampil_data("simpanan")->result();
			$this->load->view('simpanan/eksport_pdf',$data);

			$paper_size = 'A4';
			$orientation = 'landscape';
			$html = $this->output->get_output();
			$this->dompdf->set_paper($paper_size,$orientation );

			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("laporan_simpanan.pdf", array('Attachment' =>0));
		}
		public function excel(){
			$data['simpanan'] = $this->m_simpanan->tampil_data('simpanan')->result();
			require(APPPATH. 'PHPExcel/Classes/PHPExcel.php');
			require(APPPATH. 'PHPExcel/Classes/PHPExcel/Writer/Excel2007.php');

			$object = new PHPExcel();
			$object->getProperties()->setCreator("KelompokTujuh");
			$object->getProperties()->setLastModifiedBy("KelompokTujuh");
			$object->getProperties()->setTitle("Daftar Simpanan");

			$object->setActiveSheetIndex(0);
			$object->getActiveSheet()->setCellValue('A1', 'NO');
			$object->getActiveSheet()->setCellValue('B1', 'ID Simpanan');
			$object->getActiveSheet()->setCellValue('C1', 'ID Anggota');
			$object->getActiveSheet()->setCellValue('D1', 'Nama');
			$object->getActiveSheet()->setCellValue('E1', 'Jenis Simpanan');
			$object->getActiveSheet()->setCellValue('F1', 'Jumlah');
			$object->getActiveSheet()->setCellValue('G1', 'Tanggal Simpan');

			$baris = 2;
			$no = 1;

			foreach ($data['simpanan'] as $smp) {
				$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
				$object->getActiveSheet()->setCellValue('B'.$baris, $smp->id_simpanan);
				$object->getActiveSheet()->setCellValue('C'.$baris, $smp->id_anggota);
				$object->getActiveSheet()->setCellValue('D'.$baris, $smp->nama_anggota);
				$object->getActiveSheet()->setCellValue('E'.$baris, $smp->jenis_simpanan);
				$object->getActiveSheet()->setCellValue('F'.$baris, $smp->jumlah_simpanan);
				$object->getActiveSheet()->setCellValue('G'.$baris, $smp->tanggal_simpanan);

				$baris++;
			}

		$filename="Data Simpanan".'.xlsx';
		$object->getActiveSheet()->setTitle("Data Simpanan");

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$filename.'"');
		header('Cache-Control: max-age=0');
		$writer = PHPExcel_IOFactory::createwriter($object, 'Excel2007');
		$writer->save('php://output');


		exit;
		}

		public function search(){
			$keyword = $this->input->post('keyword');
			 $data['start'] = $this->uri->segment(3);
			$data['simpanan'] = $this->m_simpanan->get_keyword($keyword);
			 $data['pagination'] = $this->pagination->create_links();
			 $this->template->load('template', 'simpanan/simpanan', $data);
		}
	

	}
?>