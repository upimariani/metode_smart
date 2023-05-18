<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cSiswa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mSiswa');
	}

	public function index()
	{
		$data = array(
			'siswa' => $this->mSiswa->selectSiswa()
		);
		$this->load->view('WaliKelas/Layouts/head');
		$this->load->view('WaliKelas/Layouts/header');
		$this->load->view('WaliKelas/Siswa/vSiswa', $data);
		$this->load->view('WaliKelas/Layouts/footer');
	}
	public function create()
	{
		$data = array(
			'id_user' => $this->session->userdata('id'),
			'nama_siswa' => $this->input->post('nama'),
			'kelas' => $this->input->post('kelas'),
			'angkatan' => $this->input->post('angkatan'),
			'jk' => $this->input->post('jk'),
		);
		$this->mSiswa->insert($data);
		$this->session->set_flashdata('success', 'Data Siswa Berhasil Disimpan!!!');
		redirect('WaliKelas/cSiswa', 'refresh');
	}
	public function updateSiswa($id)
	{
		$data = array(
			'id_user' => $this->session->userdata('id'),
			'nama_siswa' => $this->input->post('nama'),
			'kelas' => $this->input->post('kelas'),
			'angkatan' => $this->input->post('angkatan'),
			'jk' => $this->input->post('jk'),
		);
		$this->mSiswa->update($id, $data);
		$this->session->set_flashdata('success', 'Data Siswa Berhasil Diperbaharui!!!');
		redirect('WaliKelas/cSiswa', 'refresh');
	}
	public function delete($id)
	{
		$this->mSiswa->delete($id);
		$this->session->set_flashdata('success', 'Data Siswa Berhasil Dihapus!!!');
		redirect('WaliKelas/cSiswa', 'refresh');
	}
}

/* End of file cSiswa.php */
