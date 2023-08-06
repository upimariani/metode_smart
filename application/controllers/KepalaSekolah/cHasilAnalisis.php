<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cHasilAnalisis extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mAnalisis');
	}


	public function index()
	{
		$data = array(
			'periode' => $this->mAnalisis->periode()
		);
		$this->load->view('KepalaSekolah/Layouts/head');
		$this->load->view('KepalaSekolah/Layouts/header');
		$this->load->view('KepalaSekolah/vHasilAnalisis', $data);
		$this->load->view('KepalaSekolah/Layouts/footer');
	}
	public function view($kelas, $angkatan)
	{
		$data = array(
			'view' => $this->mAnalisis->view($kelas, $angkatan),
			'kelas' => $kelas,
			'angkatan' => $angkatan
		);
		$this->load->view('KepalaSekolah/Layouts/head');
		$this->load->view('KepalaSekolah/Layouts/header');
		$this->load->view('KepalaSekolah/vViewHasil', $data);
		$this->load->view('KepalaSekolah/Layouts/footer');
	}



	public function download($kelas, $angkatan)
	{
		// memanggil library FPDF
		require('asset/fpdf.php');

		// intance object dan memberikan pengaturan halaman PDF
		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->AddPage();

		$pdf->SetFont('Times', 'B', 14);
		$pdf->Cell(40, 5, '', 0, 0, 'C');
		$pdf->Image('asset/logo.png', 15, 5);
		$pdf->Cell(150, 5, 'KEMENTRIAN AGAMA REPUBLIK INDONESIA', 0, 1, 'C');
		$pdf->SetFont('Times', 'B', 12);
		$pdf->Cell(40, 5, '', 0, 0, 'C');
		$pdf->Cell(150, 5, 'KANTOR KEMENTRIAN AGAMA KABUPATEN KUNINGAN', 0, 1, 'C');
		$pdf->SetFont('Times', 'B', 11);
		$pdf->Cell(40, 5, '', 0, 0, 'C');
		$pdf->Cell(150, 5, 'MADRASAH ALIYAH NEGERI (MAN) 2 KUNINGAN ', 0, 1, 'C');
		$pdf->Cell(40, 5, '', 0, 0, 'C');
		$pdf->Cell(150, 5, 'Jln. Siliwangi Km 15 Ciawigebang, Kuningan, 45591, Tlp/Fax : (0232) 878368', 0, 1, 'C');
		$pdf->Cell(40, 5, '', 0, 0, 'C');
		$pdf->Cell(150, 5, 'Website : www.manciwigebang.sch.id E-mail : man.ciawigebang@gmail.com', 0, 1, 'C');
		$pdf->SetFont('Times', 'B', 13);
		$pdf->SetLineWidth(1);
		$pdf->Line(10, 45, 200, 45);
		$pdf->Cell(200, 40, 'LAPORAN HASIL ANALISIS', 0, 0, 'C');
		$pdf->SetLineWidth(0);
		$pdf->Cell(10, 30, '', 0, 1);
		$pdf->SetFont('Times', 'B', 9);
		$pdf->Cell(10, 7, 'NO', 1, 0, 'C');
		$pdf->Cell(50, 7, 'NAMA', 1, 0, 'C');
		$pdf->Cell(75, 7, '	KELAS', 1, 0, 'C');
		$pdf->Cell(55, 7, 'HASIL', 1, 0, 'C');


		$pdf->Cell(10, 7, '', 0, 1);
		$pdf->SetFont('Times', '', 10);
		$no = 1;
		$data = $this->mAnalisis->view($kelas, $angkatan);
		foreach ($data as $key => $value) {
			$pdf->Cell(10, 6, $no++, 1, 0, 'C');
			$pdf->Cell(50, 6, $value->nama_siswa, 1, 0);
			$pdf->Cell(75, 6, $value->kelas . ' Angkatan ' . $value->angkatan, 1, 0);
			$pdf->Cell(55, 6, $value->hasil, 1, 1);
		}
		$pdf->Output();
	}
}


	/* End of file cHasilAnalisis.php */
