<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDasboardWaliKelas extends CI_Controller
{

	public function index()
	{
		$this->load->view('WaliKelas/Layouts/head');
		$this->load->view('WaliKelas/Layouts/header');
		$this->load->view('WaliKelas/vDashboardWaliKelas');
		$this->load->view('WaliKelas/Layouts/footer');
	}
}

/* End of file cDasboardWaliKelas.php */
