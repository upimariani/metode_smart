<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboardAdmin extends CI_Controller
{

	public function index()
	{
		$this->load->view('Admin/Layouts/head');
		$this->load->view('Admin/Layouts/header');
		$this->load->view('Admin/vDashboardAdmin');
		$this->load->view('Admin/Layouts/footer');
	}
}

/* End of file cDashboardAdmin.php */
