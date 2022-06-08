<?php

class Anggota extends CI_Controller{
	public function index()
	{
		$config['base_url'] = site_url('anggota/index');
		$config['total_rows']= $this->m_anggota->count();
		$config['per_page']=3;

		$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['anggota'] = $this->m_anggota->tampil($config['per_page'], $data['start'])->result();
		$data['pagination'] = $this->pagination->create_links();
		$this->template->load('template', 'anggota/anggota_v', $data);
	}

	
	public function tambah(){
		$this->template->load('template', 'anggota/anggota_v', $data);
	}
	public function tambah_aksi(){
		$id_anggota		= $this->input->post('id_anggota');
		$nama_anggota	= $this->input->post('nama_anggota');
		$alamat_lengkap	= $this->input->post('alamat_lengkap');
		$tanggal_lahir	= $this->input->post('tanggal_lahir');
		$email			= $this->input->post('email');
		$no_telepon		= $this->input->post('no_telepon');
		
		$data  = array(
			'id_anggota'	=> $id_anggota,
			'nama_anggota'	=> $nama_anggota,
			'alamat_lengkap'=> $alamat_lengkap,
			'tanggal_lahir' => $tanggal_lahir,
			'email' 		=> $email,
			'no_telepon' 	=> $no_telepon,
			);

			$this->m_anggota->input_data($data, 'anggota');
			redirect('anggota/index');
	}

	public function hapus ($id_anggota)
	{
		$where = array('id_anggota'=>$id_anggota);
		$this->m_anggota->hapus_data($where, 'anggota');
		redirect ('anggota/index');
	}

	public function edit($id_anggota){
		$where = array ('id_anggota'=>$id_anggota);
		$data['anggota'] = $this->m_anggota->edit_data($where, 'anggota')->result();
		$this->template->load('template', 'anggota/edit', $data);
	}

	public function update(){
		$id_anggota		= $this->input->post('id_anggota');
		$nama_anggota	= $this->input->post('nama_anggota');
		$alamat_lengkap	= $this->input->post('alamat_lengkap');
		$tanggal_lahir	= $this->input->post('tanggal_lahir');
		$email			= $this->input->post('email');
		$no_telepon		= $this->input->post('no_telepon');
		
		$data  = array(
			'id_anggota'	=> $id_anggota,
			'nama_anggota'	=> $nama_anggota,
			'alamat_lengkap'=> $alamat_lengkap,
			'tanggal_lahir' => $tanggal_lahir,
			'email' 		=> $email,
			'no_telepon' 	=> $no_telepon,
			
			);
		$where = array(
			'id_anggota'=>$id_anggota
			);

		$this->m_anggota->update_data($where, $data, 'anggota');
		redirect('anggota/index');

	}

	public function detail($id_anggota){
		$this->load->model('m_anggota');
		$detail = $this->m_anggota->detail_data($id_anggota);
		$data['detail']=$detail;
		$this->template->load('template', 'anggota/detail', $data);
	}

	public function cetak(){
		$data['anggota'] = $this->m_anggota->tampil_data("anggota")->result();//tabel
		$this->load->view('anggota/print_anggota', $data);
	}

	public function pdf(){
		$this->load->library('dompdf_gen');

		$data['anggota'] = $this->m_anggota->tampil_data("anggota")->result();
		$this->load->view('anggota/eksport_pdf',$data);

		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size,$orientation );

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_anggota.pdf", array('Attachment' =>0));
	}

	public function excel(){
		$data['anggota'] = $this->m_anggota->tampil_data("anggota")->result();

		require(APPPATH. 'PHPExcel/Classes/PHPExcel.php');
		require(APPPATH. 'PHPExcel/Classes/PHPExcel/Writer/Excel2007.php');

		$excel = new PHPExcel();

		$excel->getProperties()->setCreator("Kelompok 07 PSW II");
		$excel->getProperties()->setLastModifiedBy("Kelompok 07 PSW II");
		$excel->getProperties()->setTitle("Daftar Anggota");

		$excel->setActiveSheetIndex(0);

		$excel->getActiveSheet()->setCellValue('A1', 'NO');
		$excel->getActiveSheet()->setCellValue('B1', 'ID Anggota');
		$excel->getActiveSheet()->setCellValue('C1', 'Nama Anggota');
		$excel->getActiveSheet()->setCellValue('D1', 'Alamat Lengkap');
		$excel->getActiveSheet()->setCellValue('E1', 'Tanggal Lahir');
		$excel->getActiveSheet()->setCellValue('F1', 'Email');
		$excel->getActiveSheet()->setCellValue('G1', 'No Telepon');

		$baris =2;
		$no = 1;

		foreach($data['anggota'] as $agt){
			$excel->getActiveSheet()->setCellValue('A'. $baris, $no++);
			$excel->getActiveSheet()->setCellValue('B'. $baris, $agt->id_anggota);
			$excel->getActiveSheet()->setCellValue('C'. $baris, $agt->nama_anggota);
			$excel->getActiveSheet()->setCellValue('D'. $baris, $agt->alamat_lengkap);
			$excel->getActiveSheet()->setCellValue('E'. $baris, $agt->tanggal_lahir);
			$excel->getActiveSheet()->setCellValue('F'. $baris, $agt->email);
			$excel->getActiveSheet()->setCellValue('G'. $baris, $agt->no_telepon);
			
			$baris++;
		}

		$filename ="Data_Anggota".'.xls';
		$excel->getActiveSheet()->setTitle("Data Anggota");

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename="'.$filename. '"');
		header('Cache-Control: max-age=0');

		ob_end_clean(); 
		$writer=PHPExcel_IOFactory::createwriter($excel, 'Excel2007');
		$writer->save('php://output');
		
		exit;
	}

	public function search(){

		$keyword = $this->input->post('keyword');
		$data['start'] = $this->uri->segment(3);
		$data['anggota']=$this->m_anggota->get_keywoard($keyword);
		$data['pagination'] = $this->pagination->create_links();
		$this->template->load('template', 'anggota/anggota_v', $data);
	}
}