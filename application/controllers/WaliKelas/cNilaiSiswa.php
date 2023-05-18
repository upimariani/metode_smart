<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cNilaiSiswa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mSiswa');
		$this->load->model('mNilaiSiswa');
	}

	public function index()
	{
		$data = array(
			'siswa' => $this->mSiswa->selectSiswa(),
			'nilai_siswa' => $this->mNilaiSiswa->select()
		);
		$this->load->view('WaliKelas/Layouts/head');
		$this->load->view('WaliKelas/Layouts/header');
		$this->load->view('WaliKelas/NilaiRaport/vNilaiRaport', $data);
		$this->load->view('WaliKelas/Layouts/footer');
	}
	public function create()
	{
		$data = array(
			'id_siswa' => $this->input->post('siswa'),
			'mata_pelajaran' => $this->input->post('mapel'),
			'nilai' => $this->input->post('nilai'),
		);
		$this->mNilaiSiswa->insert($data);
		$this->session->set_flashdata('success', 'Data Nilai Siswa Berhasil Ditambahkan!!!');
		redirect('WaliKelas/cNilaiSiswa', 'refresh');
	}
	public function detailNilai($id_siswa)
	{
		$data = array(
			'detailNilai' => $this->mNilaiSiswa->detailNilai($id_siswa)
		);
		$this->load->view('WaliKelas/Layouts/head');
		$this->load->view('WaliKelas/Layouts/header');
		$this->load->view('WaliKelas/NilaiRaport/vDetailNilai', $data);
		$this->load->view('WaliKelas/Layouts/footer');
	}
}

/* End of file cNilaiSiswa.php */
