<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAnalisis extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mAnalisis');
	}

	public function index()
	{
		$data = array(
			'data_siswa' => $this->mAnalisis->data_siswa(),
			'kriteria' => $this->mAnalisis->kriteria(),
			'hasil_analisis' => $this->mAnalisis->selectAnalisis()
		);
		$this->load->view('WaliKelas/Layouts/head');
		$this->load->view('WaliKelas/Layouts/header');
		$this->load->view('WaliKelas/Analisis/vAnalisis', $data);
		$this->load->view('WaliKelas/Layouts/footer');
	}
	public function analisis()
	{
		$var_raport = $this->input->post('raport');

		$raport = $this->mAnalisis->kriteria();
		foreach ($raport['raport'] as $key => $value) {
			$range = $value->range_raport;

			if ($var_raport >= $range) {
				$nilai_raport = $value->nilai_raport;
				$id_raport = $value->id_raport; //k1
			}
		}

		$nilai_keaktifan = $this->input->post('nilai_keaktifan'); //k2
		$nilai_absensi = $this->input->post('nilai_absensi'); //k3
		$nilai_kepribadian = $this->input->post('nilai_sikap'); //k4
		$nilai_kejuaraan = $this->input->post('nilai_kejuaraan'); //k5

		//normalisasi
		$n_k1 = $nilai_raport / 100;
		$n_k2 = $nilai_keaktifan / 100;
		$n_k3 = $nilai_absensi / 100;
		$n_k4 = $nilai_kepribadian / 100;
		$n_k5 = $nilai_kejuaraan / 100;

		//nilai utility
		$u_k1 = $nilai_raport * $n_k1;
		$u_k2 = $nilai_keaktifan * $n_k2;
		$u_k3 = $nilai_absensi * $n_k3;
		$u_k4 = $nilai_kepribadian * $n_k4;
		$u_k5 = $nilai_kejuaraan * $n_k5;

		$hasil = $u_k1 + $u_k2 + $u_k3 + $u_k4 + $u_k5;

		// echo '<br>' . $u_k1;
		// echo '<br>' . $u_k2;
		// echo '<br>' . $u_k3;
		// echo '<br>' . $u_k4;
		// echo '<br>' . $u_k5;
		// echo '<br>' . $hasil;
		$id_siswa = $this->input->post('siswa');
		$data = array(
			'id_raport' => $id_raport,
			'id_keaktifan' => $this->input->post('keaktifan'),
			'id_absensi' => $this->input->post('absensi'),
			'id_kepribadian' => $this->input->post('kepribadian'),
			'id_kejuaraan' => $this->input->post('kejuaraan'),
			'hasil' => $hasil
		);
		$this->mAnalisis->insertAnalisis($id_siswa, $data);
		$this->session->set_flashdata('success', 'Data Analisis Berhasil Disimpan!!!');
		redirect('WaliKelas/cAnalisis');
	}
}

/* End of file cAnalisis.php */
