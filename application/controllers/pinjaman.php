<?php
	class Pinjaman extends CI_Controller{
		public function index(){
			$data['pinjaman'] = $this->m_pinjaman->tampil_data()->result();
			$this->template->load('template', 'pinjaman/pinjaman', $data);
		}

		public function tambah(){
			$this->template->load('template', 'pinjaman/pinjaman', $data);
			$this->load->view('pinjaman/pinjaman');
		}
		
		public function tambah_aksi(){
		$id_pinjaman			= $this->input->post('id_pinjaman');
		$anggota_id				= $this->input->post('anggota_id');
		$jumlah_pinjaman		= $this->input->post('jumlah_pinjaman');
		$jenis_pinjaman			= $this->input->post('jenis_pinjaman');
		$angsuran_dari		    = $this->input->post('angsuran_dari');
		$lama_angsuran 		    = $this->input->post('lama_angsuran');

		$data = array(
			'id_pinjaman' 		 => $id_pinjaman,
			'anggota_id' 	 	 => $anggota_id,
			'jumlah_pinjaman'    => $jumlah_pinjaman,
			'jenis_pinjaman'	 => $jenis_pinjaman,
			'angsuran_dari'	     => $angsuran_dari,
			'lama_angsuran'	     => $lama_angsuran,
		);

		$this->m_pinjaman->input_data($data, 'pinjaman');
		redirect('pinjaman/index');
		}
		public function index_anggota(){
			$data['pinjaman'] = $this->m_pinjaman->tampil_data()->result();
			$this->template->load('template_anggota', 'pinjaman/anggota_pinjaman', $data);
		}

		public function tambah_aksi_anggota(){
        $id_pinjaman			= $this->input->post('id_pinjaman');
        $anggota_id				= $this->input->post('anggota_id');
        $jumlah_pinjaman		= $this->input->post('jumlah_pinjaman');
        $jenis_pinjaman			= $this->input->post('jenis_pinjaman');
        $angsuran_dari		    = $this->input->post('angsuran_dari');
        $lama_angsuran 		    = $this->input->post('lama_angsuran');

		$data = array(
            'id_pinjaman' 		 => $id_pinjaman,
			'anggota_id' 	 	 => $anggota_id,
			'jumlah_pinjaman'    => $jumlah_pinjaman,
			'jenis_pinjaman'	 => $jenis_pinjaman,
			'angsuran_dari'	     => $angsuran_dari,
			'lama_angsuran'	     => $lama_angsuran,
		);

		$this->m_pinjaman->input_data($data, 'pinjaman');
		echo "<script>
						alert('Data Pinjaman Berhasil dikirim');
						window.location='".site_url('pinjaman/index_anggota')."';
						</script>";
		}

		public function hapus($id_pinjaman){
			$where = array('id_pinjaman' => $id_pinjaman);
			$this->m_pinjaman->hapus_data($where, 'pinjaman');
			redirect('pinjaman/index');
		}
		
		public function edit($id_pinjaman){
		$where = array ('id_pinjaman'=>$id_pinjaman);
		$data['pinjaman'] = $this->m_pinjaman->edit_data($where, 'pinjaman')->result();
		$this->template->load('template', 'pinjaman/edit', $data);
		}

		public function update(){
        $id_pinjaman			= $this->input->post('id_pinjaman');
        $anggota_id				= $this->input->post('anggota_id');
        $jumlah_pinjaman		= $this->input->post('jumlah_pinjaman');
        $jenis_pinjaman			= $this->input->post('jenis_pinjaman');
        $angsuran_dari		    = $this->input->post('angsuran_dari');
        $lama_angsuran 		    = $this->input->post('lama_angsuran');
		
		$data  = array(
            'id_pinjaman' 		 => $id_pinjaman,
			'anggota_id' 	 	 => $anggota_id,
			'jumlah_pinjaman'    => $jumlah_pinjaman,
			'jenis_pinjaman'	 => $jenis_pinjaman,
			'angsuran_dari'	     => $angsuran_dari,
			'lama_angsuran'	     => $lama_angsuran,
			
			);
		$where = array(
			'id_pinjaman'=>$id_pinjaman
			);

		$this->m_pinjaman->update_data($where, $data, 'pinjaman');
		redirect('pinjaman/index');

		}

		public function detail($id_pinjaman){
		$this->load->model('m_pinjaman');
		$detail = $this->m_pinjaman->detail_data($id_pinjaman);
		$data['detail']=$detail;
		$this->template->load('template', 'pinjaman/detail', $data);
		}

		public function cetak(){
		$data['pinjaman'] = $this->m_pinjaman->tampil_data("pinjaman")->result();//tabel
		$this->load->view('pinjaman/print_pinjaman', $data);
		}

		public function pdf(){
			$this->load->library('dompdf_gen');

			$data['pinjaman'] = $this->m_pinjaman->tampil_data("pinjaman")->result();
			$this->load->view('pinjaman/eksport_pdf',$data);

			$paper_size = 'A4';
			$orientation = 'landscape';
			$html = $this->output->get_output();
			$this->dompdf->set_paper($paper_size,$orientation );

			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("laporan_pinjaman.pdf", array('Attachment' =>0));
		}
		public function excel(){
			$data['pinjaman'] = $this->m_pinjaman->tampil_data("pinjaman")->result();

			require(APPPATH. 'PHPExcel/Classes/PHPExcel.php');
			require(APPPATH. 'PHPExcel/Classes/PHPExcel/Writer/Excel2007.php');

			$object = new PHPExcel();
			$object->getProperties()->setCreator("Kelompok 7");
			$object->getProperties()->setLastModifiedBy("Kelompok 7");
			$object->getProperties()->setTitle("Data Pinjaman");

			$object->setActiveSheetIndex(0);

			$object->getActiveSheet()->setCellValue('A1', 'NO');
			$object->getActiveSheet()->setCellValue('B1', 'ID PINJAMAN');
			$object->getActiveSheet()->setCellValue('C1', 'ID ANGGOTA');
			$object->getActiveSheet()->setCellValue('D1', 'JUMLAH PINJAMAN');
			$object->getActiveSheet()->setCellValue('E1', 'JENIS PINJAMAN');
			$object->getActiveSheet()->setCellValue('F1', 'ASAL ANGSURAN');
			$object->getActiveSheet()->setCellValue('G1', 'LAMA ANGSURAN');

			$baris = 2;
			$no = 1;

			foreach ($data['pinjaman'] as $pjm){
				$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
				$object->getActiveSheet()->setCellValue('B'.$baris, $pjm->id_pinjaman);
				$object->getActiveSheet()->setCellValue('C'.$baris, $pjm->anggota_id);
				$object->getActiveSheet()->setCellValue('D'.$baris, $pjm->jumlah_pinjaman);
				$object->getActiveSheet()->setCellValue('E'.$baris, $pjm->jenis_pinjaman);
				$object->getActiveSheet()->setCellValue('F'.$baris, $pjm->angsuran_dari);
				$object->getActiveSheet()->setCellValue('G'.$baris, $pjm->lama_angsuran);

				$baris++;
			}

			$filename="Data_Pinjaman".'.xlsx';

			$object->getActiveSheet()->setTitle("Data Pinjaman");

			header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
			header('Content-Disposition: attachment;filename="'.$filename. '"');
			header('Cache-Control: max-age=0');

			$writer=PHPExcel_IOFactory::createwriter($object, 'Excel2007');
			$writer->save('php://output');
			exit;
		}
	}
?>