<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboardKepsek extends CI_Controller
{

	public function index()
	{
		$this->load->view('KepalaSekolah/Layouts/head');
		$this->load->view('KepalaSekolah/Layouts/header');
		$this->load->view('KepalaSekolah/vDashboardKepsek');
		$this->load->view('KepalaSekolah/Layouts/footer');
	}
}

/* End of file cDashboardKepsek.php */
