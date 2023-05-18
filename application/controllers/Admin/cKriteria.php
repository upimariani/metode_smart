<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cKriteria extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mKriteria');
	}
	public function absensi()
	{
		$this->form_validation->set_rules('range', 'Range Awal', 'required');
		$this->form_validation->set_rules('nilai', 'Nilai', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'absensi' => $this->mKriteria->selectAbsensi()
			);
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/header');
			$this->load->view('Admin/Kriteria/vKriteriaAbsensi', $data);
			$this->load->view('Admin/Layouts/footer');
		} else {
			$data = array(
				'range_absensi' => $this->input->post('range'),
				'nilai_absensi' => $this->input->post('nilai')
			);
			$this->mKriteria->insertAbsensi($data);
			$this->session->set_flashdata('success', 'Data Kriteria Absensi Berhasil Ditambahkan!!!');
			redirect('Admin/cKriteria/absensi', 'refresh');
		}
	}
	public function updateAbsensi($id)
	{
		$data = array(
			'range_absensi' => $this->input->post('range'),
			'nilai_absensi' => $this->input->post('nilai')
		);
		$this->mKriteria->updateAbsensi($id, $data);
		$this->session->set_flashdata('success', 'Data Kriteria Absensi Berhasil Diperbaharui!!!');
		redirect('Admin/cKriteria/absensi', 'refresh');
	}
	public function deleteAbsensi($id)
	{
		$this->mKriteria->deleteAbsensi($id);
		$this->session->set_flashdata('success', 'Data Kriteria Absensi Berhasil Dihapus!!!');
		redirect('Admin/cKriteria/absensi', 'refresh');
	}

	//keaktifan
	public function keaktifan()
	{
		$this->form_validation->set_rules('range', 'Range Awal', 'required');
		$this->form_validation->set_rules('nilai', 'Nilai', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'keaktifan' => $this->mKriteria->selectKeaktifan()
			);
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/header');
			$this->load->view('Admin/Kriteria/vKriteriaKeaktifan', $data);
			$this->load->view('Admin/Layouts/footer');
		} else {
			$data = array(
				'range_keaktifan' => $this->input->post('range'),
				'nilai_keaktifan' => $this->input->post('nilai')
			);
			$this->mKriteria->insertKeaktifan($data);
			$this->session->set_flashdata('success', 'Data Kriteria Keaktifan Berhasil Ditambahkan!!!');
			redirect('Admin/cKriteria/keaktifan', 'refresh');
		}
	}
	public function updateKeaktifan($id)
	{
		$data = array(
			'range_keaktifan' => $this->input->post('range'),
			'nilai_keaktifan' => $this->input->post('nilai')
		);
		$this->mKriteria->updateKeaktifan($id, $data);
		$this->session->set_flashdata('success', 'Data Kriteria Keaktifan Berhasil Diperbaharui!!!');
		redirect('Admin/cKriteria/keaktifan', 'refresh');
	}
	public function deleteKeaktifan($id)
	{
		$this->mKriteria->deleteKeaktifan($id);
		$this->session->set_flashdata('success', 'Data Kriteria Keaktifan Berhasil Dihapus!!!');
		redirect('Admin/cKriteria/keaktifan', 'refresh');
	}


	//kejuaraan
	public function kejuaraan()
	{
		$this->form_validation->set_rules('range', 'Range Awal', 'required');
		$this->form_validation->set_rules('nilai', 'Nilai', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'kejuaraan' => $this->mKriteria->selectKejuaraan()
			);
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/header');
			$this->load->view('Admin/Kriteria/vKriteriaKejuaraan', $data);
			$this->load->view('Admin/Layouts/footer');
		} else {
			$data = array(
				'range_kejuaraan' => $this->input->post('range'),
				'nilai_kejuaraan' => $this->input->post('nilai')
			);
			$this->mKriteria->insertkejuaraan($data);
			$this->session->set_flashdata('success', 'Data Kriteria Kejuaraan Berhasil Ditambahkan!!!');
			redirect('Admin/cKriteria/kejuaraan', 'refresh');
		}
	}
	public function updateKejuaraan($id)
	{
		$data = array(
			'range_kejuaraan' => $this->input->post('range'),
			'nilai_kejuaraan' => $this->input->post('nilai')
		);
		$this->mKriteria->updateKejuaraan($id, $data);
		$this->session->set_flashdata('success', 'Data Kriteria Kejuaraan Berhasil Diperbaharui!!!');
		redirect('Admin/cKriteria/kejuaraan', 'refresh');
	}
	public function deletekejuaraan($id)
	{
		$this->mKriteria->deleteKejuaraan($id);
		$this->session->set_flashdata('success', 'Data Kriteria Kejuaraan Berhasil Dihapus!!!');
		redirect('Admin/cKriteria/kejuaraan', 'refresh');
	}


	//kepribadian
	public function kepribadian()
	{
		$this->form_validation->set_rules('range', 'Range Awal', 'required');
		$this->form_validation->set_rules('nilai', 'Nilai', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'kepribadian' => $this->mKriteria->selectKepribadian()
			);
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/header');
			$this->load->view('Admin/Kriteria/vKriteriaKepribadian', $data);
			$this->load->view('Admin/Layouts/footer');
		} else {
			$data = array(
				'range_kepribadian' => $this->input->post('range'),
				'nilai_kepribadian' => $this->input->post('nilai')
			);
			$this->mKriteria->insertkepribadian($data);
			$this->session->set_flashdata('success', 'Data Kriteria Kepribadian Berhasil Ditambahkan!!!');
			redirect('Admin/cKriteria/kepribadian', 'refresh');
		}
	}
	public function updateKepribadian($id)
	{
		$data = array(
			'range_kepribadian' => $this->input->post('range'),
			'nilai_kepribadian' => $this->input->post('nilai')
		);
		$this->mKriteria->updatekepribadian($id, $data);
		$this->session->set_flashdata('success', 'Data Kriteria Kepribadian Berhasil Diperbaharui!!!');
		redirect('Admin/cKriteria/Kepribadian', 'refresh');
	}
	public function deleteKepribadian($id)
	{
		$this->mKriteria->deleteKepribadian($id);
		$this->session->set_flashdata('success', 'Data Kriteria Kepribadian Berhasil Dihapus!!!');
		redirect('Admin/cKriteria/Kepribadian', 'refresh');
	}



	public function raport()
	{
		$this->form_validation->set_rules('range', 'Range Awal', 'required');
		$this->form_validation->set_rules('nilai', 'Nilai', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'raport' => $this->mKriteria->selectRaport()
			);
			$this->load->view('Admin/Layouts/head');
			$this->load->view('Admin/Layouts/header');
			$this->load->view('Admin/Kriteria/vKriteriaRaport', $data);
			$this->load->view('Admin/Layouts/footer');
		} else {
			$data = array(
				'range_raport' => $this->input->post('range'),
				'nilai_raport' => $this->input->post('nilai')
			);
			$this->mKriteria->insertraport($data);
			$this->session->set_flashdata('success', 'Data Kriteria Raport Berhasil Ditambahkan!!!');
			redirect('Admin/cKriteria/raport', 'refresh');
		}
	}
	public function updateraport($id)
	{
		$data = array(
			'range_raport' => $this->input->post('range'),
			'nilai_raport' => $this->input->post('nilai')
		);
		$this->mKriteria->updateraport($id, $data);
		$this->session->set_flashdata('success', 'Data Kriteria Raport Berhasil Diperbaharui!!!');
		redirect('Admin/cKriteria/raport', 'refresh');
	}
	public function deleteraport($id)
	{
		$this->mKriteria->deleteraport($id);
		$this->session->set_flashdata('success', 'Data Kriteria Raport Berhasil Dihapus!!!');
		redirect('Admin/cKriteria/raport', 'refresh');
	}
}

/* End of file cKriteria.php */
